<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\Service $model */
/** @var yii\widgets\ActiveForm $form */
?>
<?php Pjax::begin(); ?>

<div class="row">
    <?php $form = ActiveForm::begin([
        'method' => 'post',
        'options' => ['data-pjax' => true], // Enable PJAX on the form submission
    ]); ?>

    <div class="row">
        <div class="col-md-6 col-12">
            <div class="form-group local-forms">
                <?= $form->field($model, 'admin_email')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group local-forms">
                <?= $form->field($model, 'support_email')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-12">
            <div class="form-group local-forms">
                <?= $form->field($model, 'sender_email')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group local-forms">
                <?= $form->field($model, 'sender_name')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-12">
            <div class="form-group local-forms">
                <?= $form->field($model, 'mailer_email')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group local-forms">
                <?= $form->field($model, 'mailer_password')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-12">
            <div class="form-group local-forms">
                <?= $form->field($model, 'transport')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<?php Pjax::end(); ?>