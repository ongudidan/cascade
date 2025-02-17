<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

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

            <?php endif; ?>
            <div class="col-lg-6 sm-mb-45px">
                <h5>Phone :</h5>
                <span class="d-block"><i class="fa fa-phone text-main-color margin-right-10px"></i> <?= $contactModel->phone1 ?? '' ?></span>
                <span class="d-block sm-mb-30px"><i class="fa fa-mobile text-main-color margin-right-10px"></i> <?= $contactModel->phone2 ?? '' ?></span>
                <h5 class="margin-top-20px">Address :</h5>
                <span class="d-block sm-mb-30px"><i class="fa fa-map text-main-color margin-right-10px"></i> <?= $contactModel->address ?? '' ?> </span>
                <h5 class="margin-top-20px">Email :</h5>
                <span class="d-block sm-mb-30px"><i class="fa fa-envelope-open text-main-color margin-right-10px"></i> <?= $contactModel->email ?? '' ?> </span>
            </div>

            <div class="col-lg-6">
                <div class="contact-modal">
                    <div class="bg-dark text-white">
                        <div class="padding-30px">
                            <p>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>

                            <?php $form = ActiveForm::begin([
                                'id' => 'contact-form',
                                'options' => ['onsubmit' => 'return false;'], // Prevent default submission
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
                                'id' => 'contact-submit-btn'
                            ]) ?>

                            <?php ActiveForm::end(); ?>

                            <!-- Success Message -->
                            <div id="success-message" class="alert alert-success mt-3" style="display: none;">
                                Thank you for contacting us. We will respond to you as soon as possible.
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$ajaxUrl = \yii\helpers\Url::to(['site/contact']); // Ensure this points to the correct action
$js = <<<JS
    $(document).on('click', '#contact-submit-btn', function(e) {
        e.preventDefault(); // Prevent form submission
        
        var form = $('#contact-form');
        var formData = form.serialize();

        $.ajax({
            url: '$ajaxUrl',
            type: 'POST',
            data: formData,
            dataType: 'json',
            beforeSend: function() {
                $('#contact-submit-btn').prop('disabled', true).text('Sending...');
            },
            success: function(response) {
                if (response.success) {
                    $('#success-message').fadeIn().delay(5000).fadeOut();
                    form.trigger('reset'); // Reset form fields
                } else {
                    $.each(response.errors, function(key, val) {
                        form.find('#' + key).addClass('is-invalid').after('<div class="invalid-feedback">' + val + '</div>');
                    });
                }
            },
            // error: function() {
            //     alert('Something went wrong. Please try again.');
            // },
            complete: function() {
                $('#contact-submit-btn').prop('disabled', false).text('SEND MESSAGE');
            }
        });

        return false;
    });
JS;
$this->registerJs($js);
?>