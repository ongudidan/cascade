<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;

$this->params['meta_description'] = $contactModel->meta_description ?? '';
$this->params['meta_keywords'] = $contactModel->meta_keywords ?? '';
?>





<div class="page-title">
    <div class="container">
        <div class="padding-tb-120px">
            <h1>Contact Us</h1>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Contact Us</li>
            </ol>
        </div>
    </div>
</div>


<div class="padding-tb-100px">

    <div class="container">
        <div class="row">
            <?php if (Yii::$app->session->hasFlash('success')): ?>

                <div class="alert alert-success">
                    Thank you for contacting us. We will respond to you as soon as possible.
                </div>

                <p>
                    Note that if you turn on the Yii debugger, you should be able
                    to view the mail message on the mail panel of the debugger.
                    <?php if (Yii::$app->mailer->useFileTransport): ?>
                        Because the application is in development mode, the email is not sent but saved as
                        a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                        Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                        application component to be false to enable email sending.
                    <?php endif; ?>
                </p>




            <?php endif; ?>
            <div class="col-lg-6 sm-mb-45px">
                <!-- <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                <h5>Phone :</h5>
                <span class="d-block"><i class="fa fa-phone text-main-color margin-right-10px"
                        aria-hidden="true"></i> <?= $contactModel->phone1 ?? '' ?></span>
                <span class="d-block sm-mb-30px"><i class="fa fa-mobile text-main-color margin-right-10px"
                        aria-hidden="true"></i> <?= $contactModel->phone2 ?? '' ?></span>
                <h5 class="margin-top-20px">Address :</h5>
                <span class="d-block sm-mb-30px"><i class="fa fa-map text-main-color margin-right-10px"
                        aria-hidden="true"></i> <?= $contactModel->address ?? '' ?> </span>
                <h5 class="margin-top-20px">Email :</h5>
                <span class="d-block sm-mb-30px"><i class="fa fa-envelope-open text-main-color margin-right-10px"
                        aria-hidden="true"></i> <?= $contactModel->email ?? '' ?> </span>
            </div>

            <div class="col-lg-6">
                <div class="contact-modal">
                    <div class="background-main-color">
                        <div class="padding-30px">
                            <p>
                                If you have business inquiries or other questions, please fill out the following form to contact us.
                                Thank you.
                            </p>

                            <?php $form = ActiveForm::begin([
                                'id' => 'contact-form',
                                // 'action' => ['/site/contact'], // Ensure it submits to the correct action
                                'options' => ['data-pjax' => false],
                                'method' => 'post'
                            ]); ?>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <?= $form->field($model, 'email') ?>
                                </div>
                                <div class="form-group col-md-12">
                                    <?= $form->field($model, 'subject') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                            </div>

                            <?= Html::submitButton('SEND MESSAGE', [
                                'class' => 'btn-sm btn-lg btn-block background-dark text-white text-center text-uppercase rounded-0 padding-15px',
                                'name' => 'contact-button',
                                // 'data-pjax' => 0
                            ]) ?>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
