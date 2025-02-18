<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">

    <div class="login-box w-100" style="max-width: 400px;">
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'email')->textInput([
                    'autofocus' => true,
                    'placeholder' => 'Email',
                    'class' => 'form-control input-group mb-3'
                ])->label(false) ?>


                <?= $form->field($model, 'password')->passwordInput([
                    'autofocus' => true,
                    'placeholder' => 'Password',
                    'class' => 'form-control input-group mb-3'
                ])->label(false) ?>

                <div class="row">
                    <div class="col-8">
                        <div class="form-check">
                            <?= $form->field($model, 'rememberMe')->checkbox() ?>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-grid gap-2">
                            <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary']) ?>
                        </div>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>

                <div class="my-1 mx-0" style="color:#999;">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>