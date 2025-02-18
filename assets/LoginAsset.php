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
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/web/adminlte/css/adminlte.min.css',
        "/web/adminlte/plugins/fontawesome-free/css/all.min.css",
        // '/web/adminlte/css/adminlte.css',

        "/web/admin/css/toatr.css",


        // "https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css",
        // "https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css",
        // "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css",
        // "https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css",
        // "https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/d/web/ist/css/jsvectormap.min.css",


        "https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css",
        "https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css",
        "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css",
        // "/web/adminlte/dist/css/adminlte.css",
    ];
    public $js = [
        // '/web/cms/js/adminlte.min.js',
        "https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js",
        "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js",
        '/web/cms/js/adminlte.js',
        "https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js",
        "https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js",

        "/web/admin/js/toastr.min.js",
        "/web/admin/js/toastr.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
