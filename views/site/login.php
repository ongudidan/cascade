<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-box">
    <!-- <div class="login-logo">
        <a href="../index2.html"><b>Admin</b>LTE</a>
    </div> -->
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="input-group mb-3">
                <input type="email" name="LoginForm[email]" class="form-control" placeholder="Email" />
                <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="LoginForm[password]" class="form-control" placeholder="Password" />
                <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
            <!--begin::Row-->
            <div class="row">
                <div class="col-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="LoginForm[rememberMe]" value="1" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <div class="d-grid gap-2">
                        <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!--end::Row-->
            <?php ActiveForm::end(); ?>


            <!-- <p class="mb-1"><a href="forgot-password.html">I forgot my password</a></p> -->
            <div class="my-1 mx-0" style="color:#999;">
                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                <br>
                Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
            </div>
            <!-- <p class="mb-0">
                <a href="register.html" class="text-center"> Register a new membership </a>
            </p> -->
        </div>
        <!-- /.login-card-body -->
    </div>
</div>