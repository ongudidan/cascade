<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

/** @var yii\web\View $this */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
$this->params['modalSize'] = \yii\bootstrap5\Modal::SIZE_EXTRA_LARGE;

$rows = [
    'About Us' => [
        'edit' => Url::to(['/cms/site-settings/about-form']),
        // 'view' => Url::to(['/cms/site-settings/view-about']),
    ],
    'Contact Information' => [
        'edit' => Url::to(['/cms/site-settings/contact-form']),
        // 'view' => Url::to(['/cms/site-settings/view-contact']),
    ],
  
    'Careers' => [
        'edit' => Url::to(['/cms/site-settings/careers-form']),
        // 'view' => Url::to(['/cms/site-settings/view-careers']),
    ],

    'Why Us' => [
        'edit' => Url::to(['/cms/site-settings/why-us-form']),
        // 'view' => Url::to(['/cms/site-settings/view-why-us']),
    ],
    'Help Desk' => [
        'edit' => Url::to(['/cms/site-settings/help-desk-form']),
        // 'view' => Url::to(['/cms/site-settings/view-help-desk']),
    ],
    'General (Logo, Favicon etc...)' => [
        'edit' => Url::to(['/cms/site-settings/general-form']),
        // 'view' => Url::to(['/cms/site-settings/view-logo-favicon']),
    ],
    'Email Settings' => [
        'edit' => Url::to(['/cms/site-settings/email-setting-form']),
        // 'view' => Url::to(['/cms/site-settings/view-logo-favicon']),
    ],
];


?>

<?php Pjax::begin(['id' => 'pjax-container']); ?>

<div class="service-index">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table- mb-0">
                            <thead class="service-thread">
                                <tr>
                                    <th>#</th>
                                    <th>Sections</th>
                                    <th class="text-center">Action</th> <!-- Align the header to the center -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rows as $title => $urls): ?>
                                    <tr>
                                        <td><?= array_search($title, array_keys($rows)) + 1 ?></td> <!-- Row Number -->
                                        <td><?= Html::encode($title) ?></td>
                                        <td class="text-center"> <!-- Align buttons to the center -->
                                            <div class="d-flex justify-content-center">
                                                <?= Html::button('<i class="fas fa-edit"></i> View & Edit', [
                                                    'class' => 'btn btn-sm edit-btn btn-outline-success me-2',
                                                    'data-url' => $urls['edit'],
                                                    'data-title' => 'Edit ' . Html::encode($title),
                                                ]) ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                        <!-- Pagination inside the table container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php Pjax::end(); ?>