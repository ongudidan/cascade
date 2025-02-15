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
 * @author Qiang Xue <qiang.xue@gmail.com,
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',

        "/web/frontend/assets/css/animate.css",
        "/web/frontend/assets/css/owl.carousel.css",
        "/web/frontend/assets/css/owl.theme.css",
        "/web/frontend/assets/css/bootstrap.min.css",
        "/web/frontend/assets/css/hover-min.css",
        "/web/frontend/assets/css/flag-icon.min.css",
        "/web/frontend/assets/css/style.css",
        "/web/frontend/assets/css/elegant_icon.css",
        "/web/frontend/assets/fonts/font-awesome/css/font-awesome.min.css",
        "/web/frontend/assets/rslider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css",
        "/web/frontend/assets/rslider/fonts/font-awesome/css/font-awesome.css",
        "/web/frontend/assets/rslider/css/settings.css",

    ];
    public $js = [

        "/web/frontend/assets/js/nile-slider.js",
        "/web/frontend/assets/js/jquery-3.2.1.min.js",
        "/web/frontend/assets/rslider/js/jquery.themepunch.tools.min.js",
        "/web/frontend/assets/rslider/js/jquery.themepunch.revolution.min.js",
        "/web/frontend/assets/rslider/js/extensions/revolution.extension.actions.min.js",
        "/web/frontend/assets/rslider/js/extensions/revolution.extension.carousel.min.js",
        "/web/frontend/assets/rslider/js/extensions/revolution.extension.kenburn.min.js",
        "/web/frontend/assets/rslider/js/extensions/revolution.extension.layeranimation.min.js",
        "/web/frontend/assets/rslider/js/extensions/revolution.extension.migration.min.js",
        "/web/frontend/assets/rslider/js/extensions/revolution.extension.navigation.min.js",
        "/web/frontend/assets/rslider/js/extensions/revolution.extension.parallax.min.js",
        "/web/frontend/assets/rslider/js/extensions/revolution.extension.slideanims.min.js",
        "/web/frontend/assets/rslider/js/extensions/revolution.extension.video.min.js",
        "/web/frontend/assets/js/YouTubePopUp.jquery.js",
        "/web/frontend/assets/js/owl.carousel.min.js",
        "/web/frontend/assets/js/imagesloaded.min.js",
        "/web/frontend/assets/js/custom.js",
        "/web/frontend/assets/js/popper.min.js",
        "/web/frontend/assets/js/bootstrap.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
