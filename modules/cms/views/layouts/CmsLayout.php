<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\CmsAsset;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;


CmsAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('/web/admin/img/logo-small.png')]);

$headerTitle = '';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
</head>

<body class="small-text">
    <?php $this->beginBody() ?>

    <div class="main-wrapper">

        <?= $this->render('components/_header') ?>
        <?= $this->render('components/_sidebar') ?>

        <main id="main" class="flex-shrink-0" role="main">
            <div class="page-wrapper">
                <div class="content container-fluid">
                    <?= $this->render('components/_page-header') ?>



                    <div class="row">
                        <div class="col-sm-12">
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </div>

    <?php $this->endBody() ?>

    <?php
    // $this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css');
    // $this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js', ['depends' => [\yii\web\JqueryAsset::class]]);
    ?>

    <?php
    // Display flash messages as Toastr notifications if any are set
    foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
        // Set toastr type based on the session flash key
        $type = 'info'; // Default type

        switch ($key) {
            case 'success':
                $type = 'success';
                break;
            case 'error':
                $type = 'error';
                break;
            case 'warning':
                $type = 'warning';
                break;
            case 'info':
                $type = 'info';
                break;
        }

        // Output the toastr notification using the session message
        $this->registerJs("
              toastr.options = {
            'closeButton': true,  // Enable the close button
            'debug': false,
            'newestOnTop': true,
            'progressBar': true,  // Show progress bar
            'preventDuplicates': true,
            'showDuration': '300',
            'hideDuration': '1000',
            'timeOut': '5000',  // Timeout duration in ms
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut'
        };
        toastr.$type('$message');
    ");
    }
    ?>

    <?php
    $this->registerJs(<<<JS
        $(document).on('pjax:send', function() {
            $('#pjax-container').css('opacity', '0.5'); // Fade effect
        });

        $(document).on('pjax:complete', function() {
            $('#pjax-container').css('opacity', '1'); // Restore opacity
        });
        JS);
    ?>

    <!-- Modal -->
    <?php

    // Check if 'modalSize' is set in params; default to Modal::SIZE_LARGE if not set
    $modalSize = isset($this->params['modalSize']) ? $this->params['modalSize'] : Modal::SIZE_LARGE;

    Modal::begin([
        'title' => '<span id="modal-title">Modal</span>',
        'id' => 'custom-modal',
        'size' => $modalSize, // Use the size from params or default size
    ]);

    echo '<div id="modal-content"></div>';

    Modal::end();
    ?>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-btn').forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const url = this.getAttribute('data-url');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = url;
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>
<?php $this->endPage() ?>