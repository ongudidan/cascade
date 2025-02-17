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

                <div class="form-group">
                    <?= $form->field($model, 'email', [
                        'template' => '
                            <div class="input-group">
                                {input}
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            {error}', // Ensure errors are shown below the input
                        'options' => ['class' => 'w-100 m-0 p-0']
                    ])->textInput([
                        'autofocus' => true,
                        'class' => 'form-control' . ($model->hasErrors('email') ? ' is-invalid' : ''),
                        'placeholder' => 'Email'
                    ]) ?>

                    <div class="invalid-feedback">
                        <?= $model->getFirstError('email') ?>
                    </div>
                </div>

                <div class="form-group">
                    <?= $form->field($model, 'password', [
                        'template' => '
                            <div class="input-group">
                                {input}
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fa fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            {error}', // Ensure errors are shown below the input
                        'options' => ['class' => 'w-100 m-0 p-0']
                    ])->passwordInput([
                        'autofocus' => true,
                        'class' => 'form-control' . ($model->hasErrors('password') ? ' is-invalid' : ''),
                        'placeholder' => 'Password'
                    ]) ?>

                    <div class="invalid-feedback">
                        <?= $model->getFirstError('password') ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="LoginForm[rememberMe]" value="1" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
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