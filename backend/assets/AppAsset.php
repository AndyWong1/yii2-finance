<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //扩展 css
        'css/owl.carousel.css',
        'js/jquery-easy-pie-chart/jquery.easy-pie-chart.css',

        //自定义 css
        'css/style.css',
        'css/style-responsive.css'
    ];
    public $js = [
        
        'js/bootstrap.min.js',
        'js/jquery.dcjqaccordion.2.7.js',
        'js/jquery.scrollTo.min.js',
        'js/jquery.nicescroll.js',
        'js/jquery.sparkline.js',
        'js/jquery-easy-pie-chart/jquery.easy-pie-chart.js',
        'js/owl.carousel.js',
        'js/jquery.customSelect.min.js',
        'js/respond.min.js',

        'js/common-scripts.js',
        'js/sparkline-chart.js',
        'js/easy-pie-chart.js',
        'js/count.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
