<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ResetPasswordForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">

    <div class="login-box w-100" style="max-width: 400px;">
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

                <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password')->passwordInput([
                    'autofocus' => true,
                    'placeholder' => 'Password',
                    'class' => 'form-control input-group mb-3'
                ])->label(false) ?>

                <div class="row">
                    <div class="col-12">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-primary btn-block']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>

                <p class="mt-3 mb-1">
                    <a href="<?= Url::to(['/site/login']) ?>">Login</a>
                </p>
            </div>
        </div>
    </div>
</div>