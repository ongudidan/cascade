<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\models\General;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\widgets\Pjax;

$generalModel = General::find()->one();

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('/web/uploads/' . ($generalModel ? $generalModel->favicon : 'default-favicon.ico'))]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CPoppins:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext"
        rel="stylesheet">
    <?php $this->head() ?>
</head>


<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <?php Pjax::begin(['id' => 'pjax-container']); ?>

    <?= $this->render('components/_header') ?>

    <main>
        <div>
            <?= $content ?>

            <?= $this->render('components/_footer') ?>

        </div>
    </main>

    <?php Pjax::end(); ?>

    <?php $this->endBody() ?>

    <script>
        // $(document).on('pjax:end', function() {
        //     // Reinitialize the sticky header script
        //     if (typeof initStickyHeader === "function") {
        //         initStickyHeader();
        //     }

        //     // Ensure styles are applied correctly
        //     $("#fixed-header-dark").removeClass("background-white").addClass("background-dark");
        // });
    </script>

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
</body>


</html>
<?php $this->endPage() ?>