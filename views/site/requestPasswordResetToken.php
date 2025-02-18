<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\PasswordResetRequestForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Url;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">

    <div class="login-box w-100" style="max-width: 400px;">
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Please fill out your email. A link to reset password will be sent there.</p>

                <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput([
                    'autofocus' => true,
                    'placeholder'=> 'Email',
                    'class' => 'form-control input-group mb-3'
                ])->label(false) ?>

                <div class="row">
                    <div class="col-12">
                        <?= Html::submitButton('Request new password', ['class' => 'btn btn-primary btn-block']) ?>
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