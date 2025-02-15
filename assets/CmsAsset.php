<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class CmsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        "/web/admin/css/bootstrap.min.css",
        "/web/admin/css/feather.css",
        "/web/admin/css/flags.css",
        "/web/admin/css/fontawesome.min.css",
        // "/web/admin/css/all.min.css",
        "/web/admin/css/style.css",
        "/web/admin/css/dan.css",
        "/web/admin/css/dan2.css",
        
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css",
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css",


        "/web/admin/css/datatables.min.css",
        "/web/admin/css/toastr.min.css",
        "https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap",


        "/web/admin/css/toatr.css",

    ];
    public $js = [
        // "/web/admin/dashboard/assets/js/jquery-3.6.0.min.js",
        "/web/admin/js/bootstrap.bundle.min.js",
        "/web/admin/js/feather.min.js",
        "/web/admin/js/jquery.slimscroll.min.js",
        "/web/admin/js/apexcharts.min.js",
        "/web/admin/js/chart-data.js",
        "/web/admin/js/datatables.min.js",
        "/web/admin/js/sweetalert.min.js",
        "/web/admin/js/custom.js",

        "/web/admin/js/fontawesome.min.js",

        "/web/admin/js/canvasjs.min.js",

        // modal handler
        "/web/admin/js/modal-handler.js",
        "/web/admin/js/toastr.min.js",
        "/web/admin/js/toastr.js",
        "/web/admin/js/script.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}