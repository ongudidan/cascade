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

    <div class="row g-3 align-items-center"> <!-- Bootstrap row with spacing -->
        <div class="col-12 col-sm-12">
            <div class="form-group local-forms">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            </div>
        </div>


        <?= $form->field($model, 'description', ['template' => '{input}{error}',])->widget(CKEditor::className(), [
            'options' => ['rows' => 6],
            'preset' => 'advanced',
        ]) ?>

        <div class="col-12 col-sm-12">
            <div class="form-group local-forms">
                <?= $form->field($model, 'meta_description')->textarea(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-12 col-sm-12">
            <div class="form-group local-forms">
                <?= $form->field($model, 'meta_keywords')->textarea(['maxlength' => true]) ?>
            </div>
        </div>



        <div class="col-md-6">
            <?= $form->field($model, 'imageFile', [
                'template' => "{label}\n<div class='col'>{input}</div>\n{error}",
                'options' => ['class' => 'mb-0'],
            ])->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'initialPreview' => $model->image ? [Yii::getAlias('@web') . "/web/uploads/" . $model->image] : [],
                    'initialPreviewAsData' => true,
                    'initialPreviewConfig' => [['caption' => $model->image, 'key' => 1]],
                    'previewFileType' => 'image',
                    'showUpload' => false,
                    'showRemove' => true,
                ],
            ]); ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'iconFile', [
                'template' => "{label}\n<div class='col'>{input}</div>\n{error}",
                'options' => ['class' => 'mb-0'],
            ])->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'initialPreview' => $model->icon ? [Yii::getAlias('@web') . "/web/uploads/" . $model->icon] : [],
                    'initialPreviewAsData' => true,
                    'initialPreviewConfig' => [['caption' => $model->icon, 'key' => 1]],
                    'previewFileType' => 'image',
                    'showUpload' => false,
                    'showRemove' => true,
                ],
            ]); ?>
        </div>


        <div class="col-12 col-sm-12">
            <div class="form-group local-forms">
                <?= $form->field($model, 'status')->dropDownList([
                    '10' => 'Active',
                    '9' => 'Inactive',
                ]) ?>
            </div>
        </div>


        <div class="form-group d-flex justify-content-center">
            <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
        </div>

    </div>




    <?php ActiveForm::end(); ?>

</div>


<?php Pjax::end(); ?>