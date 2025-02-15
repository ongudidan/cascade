<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\Service $model */
/** @var yii\widgets\ActiveForm $form */
?>
<?php Pjax::begin(); ?>

<?php $form = ActiveForm::begin([
    'method' => 'post',
    'options' => ['data-pjax' => true], // Enable PJAX on the form submission
]); ?>

<div class="row g-3 align-items-center"> <!-- Bootstrap row with spacing -->

    <div class="col-md-4">
        <?= $form->field($model, 'logoFile', [
            'template' => "{label}\n<div class='col'>{input}</div>\n{error}",
            'options' => ['class' => 'mb-0'],
        ])->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            'pluginOptions' => [
                'initialPreview' => $model->logo ? [Yii::getAlias('@web') . "/web/uploads/" . $model->logo] : [],
                'initialPreviewAsData' => true,
                'initialPreviewConfig' => [['caption' => $model->logo, 'key' => 1]],
                'previewFileType' => 'image',
                'showUpload' => false,
                'showRemove' => true,
            ],
        ]); ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'faviconFile', [
            'template' => "{label}\n<div class='col'>{input}</div>\n{error}",
            'options' => ['class' => 'mb-0'],
        ])->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            'pluginOptions' => [
                'initialPreview' => $model->favicon ? [Yii::getAlias('@web') . "/web/uploads/" . $model->favicon] : [],
                'initialPreviewAsData' => true,
                'initialPreviewConfig' => [['caption' => $model->favicon, 'key' => 1]],
                'previewFileType' => 'image',
                'showUpload' => false,
                'showRemove' => true,
            ],
        ]); ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'bannerFile', [
            'template' => "{label}\n<div class='col'>{input}</div>\n{error}",
            'options' => ['class' => 'mb-0'],
        ])->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            'pluginOptions' => [
                'initialPreview' => $model->home_banner ? [Yii::getAlias('@web') . "/web/uploads/" . $model->home_banner] : [],
                'initialPreviewAsData' => true,
                'initialPreviewConfig' => [['caption' => $model->home_banner, 'key' => 1]],
                'previewFileType' => 'image',
                'showUpload' => false,
                'showRemove' => true,
            ],
        ]); ?>
    </div>

</div>

<div class="text-center mt-3">
    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<?php Pjax::end(); ?>