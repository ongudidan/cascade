<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Service $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="service-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img(Yii::getAlias('/web/uploads/') . $model->image, [
                        'class' => 'img-thumbnail',
                        'style' => 'max-width: 150px; max-height: 150px;',
                        'alt' => 'Service Image'
                    ]);
                },
            ],
            [
                'attribute' => 'description',
                'format' => 'raw', // This maintains CKEditor styling
                'value' => function ($model) {
                    return $model->description;
                },
            ],
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->status == 10 ? 'Active' : 'Inactive';
                },
            ],
            [
                'attribute' => 'created_at',
                'value' => function ($model) {
                    return date('d M Y, H:i', (int) $model->created_at); // Cast to integer
                },
            ],
            [
                'attribute' => 'updated_at',
                'value' => function ($model) {
                    return date('d M Y, H:i', (int) $model->updated_at); // Cast to integer
                },
            ],

        ],
    ]) ?>


</div>