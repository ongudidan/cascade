<?php

use dosamigos\ckeditor\CKEditor;
use kartik\file\FileInput;
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

    <?= $form->field($model, 'imageFile')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'initialPreview' => $model->banner_image ? [Yii::getAlias('@web') . "/web/uploads/" . $model->banner_image] : [],
            'initialPreviewAsData' => true, // Show image preview
            'initialPreviewConfig' => [
                ['caption' => $model->banner_image, 'key' => 1]
            ],
            'previewFileType' => 'image',
            'showUpload' => false, // Hide upload button since handling in controller
            'showRemove' => true, // Allow image removal
        ],
    ]); ?>


    <?= $form->field($model, 'description', ['template' => '{input}{error}',])->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'advanced',
    ]) ?>

    <div class="col-12 col-sm-12">
        <div class="form-group local-forms">
            <?= $form->field($model, 'phone1')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-12 col-sm-12">
        <div class="form-group local-forms">
            <?= $form->field($model, 'phone2')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-12 col-sm-12">
        <div class="form-group local-forms">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-12 col-sm-12">
        <div class="form-group local-forms">
            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group d-flex justify-content-center">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<?php Pjax::end(); ?>