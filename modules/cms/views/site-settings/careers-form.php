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

    <div class="form-group d-flex justify-content-center">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<?php Pjax::end(); ?>