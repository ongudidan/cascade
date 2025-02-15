<?php

use app\models\Service;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\modules\cms\models\ServiceSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
$this->params['modalSize'] = \yii\bootstrap5\Modal::SIZE_EXTRA_LARGE;

?>

<?php Pjax::begin(['id' => 'pjax-container']); ?>

<div class="service-index">

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">

                    <div class="row align-items-center g-3 pb-3">
                        <!-- Search Form -->
                        <div class="col d-flex align-items-center">
                            <?php $form = ActiveForm::begin([
                                'method' => 'get',
                                'action' => Url::to(['/cms/service/index']),
                                // 'options' => ['class' => 'd-flex w-100 flex-wrap gap-2'], // Flexible layout with spacing
                                'options' => ['class' => 'd-flex w-100 flex-wrap gap-2', 'data-pjax' => true], // Enable PJAX on form submission

                            ]); ?>

                            <?= $form->field($searchModel, 'title', [
                                'options' => ['class' => 'flex-grow-1'], // Full width for input
                            ])->textInput([
                                'class' => 'form-control',
                                'placeholder' => 'Title ...',
                            ])->label(false); ?>

                            <?= Html::submitButton('Search', ['class' => 'btn btn-primary align-self-stretch']); ?>

                            <?php ActiveForm::end(); ?>
                        </div>

                        <!-- Add Button -->
                        <div class="col-auto">
                            <?= Html::button('<i class="fas fa-plus"></i>', [
                                'class' => 'btn btn-primary align-self-stretch add-btn',
                                'data-url' => Url::to(['/cms/service/create']), // Use Yii2 URL helper
                                'data-title' => 'Add New Service',
                            ]) ?>
                        </div>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-sm mb-0">
                            <thead class="service-thread">
                                <tr>
                                    <th>#</th>
                                    <th>Icon</th>
                                    <th>Title</th>
                                    <th>Description</th>


                                    <th class="text-center">Action</th> <!-- Align the header to the center -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($dataProvider->getCount() > 0): ?>
                                    <?php foreach ($dataProvider->getModels() as $index => $row): ?>
                                        <tr>
                                            <td><?= $dataProvider->pagination->page * $dataProvider->pagination->pageSize + $index + 1 ?></td>
                                            <!-- Circular Image -->
                                            <td class="text-center">
                                                <img src="<?= $row->image ? Yii::getAlias('/web/uploads/') . $row->image : '/web/uploads/default.png' ?>"
                                                    alt="Icon"
                                                    class="rounded-circle border shadow-sm"
                                                    style="width: 40px; height: 40px; object-fit: cover;">
                                            </td>
                                            <td><?= $row->title ?? '-' ?></td>
                                            <td>
                                                <?= \yii\helpers\StringHelper::truncateWords(strip_tags($row->description), 15, '...') ?>
                                            </td>

                                            <td class="text-center"> <!-- Align buttons to the center -->
                                                <div class="d-flex justify-content-center">
                                                    <?= Html::button('<i class="fas fa-edit"></i> Edit', [
                                                        'class' => 'btn btn-sm edit-btn btn-outline-info me-2',
                                                        'data-url' => \yii\helpers\Url::to(['/cms/service/update', 'id' => $row->id]),
                                                        'data-title' => 'Edit Class Section',
                                                    ]) ?>

                                                    <?= Html::button('<i class="fas fa-eye"></i> View', [
                                                        'class' => 'btn btn-sm view-btn btn-outline-primary me-2',
                                                        'data-url' => \yii\helpers\Url::to(['/cms/service/view', 'id' => $row->id]),
                                                        'data-title' => 'View Class Section',
                                                    ]) ?>

                                                    <?= Html::button('<i class="fas fa-trash-alt"></i> Delete', [
                                                        'class' => 'btn btn-sm delete-btn btn-outline-danger',
                                                        'data-url' => \yii\helpers\Url::to(['/cms/service/delete', 'id' => $row->id]),
                                                    ]) ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="10" class="text-center">No data found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                        <!-- Pagination inside the table container -->
                        <div class="pagination-wrapper mt-3">
                            <?= LinkPager::widget([
                                'pagination' => $dataProvider->pagination,
                                'options' => ['class' => 'pagination justify-content-center mb-4'],
                                'linkOptions' => ['class' => 'page-link'],
                                'activePageCssClass' => 'active',
                                'disabledPageCssClass' => 'disabled',
                                'prevPageLabel' => '<span aria-hidden="true">«</span><span class="sr-only">Previous</span>',
                                'nextPageLabel' => '<span aria-hidden="true">»</span><span class="sr-only">Next</span>',
                            ]); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<?php Pjax::end(); ?>