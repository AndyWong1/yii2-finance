<?php
namespace backend\assets;

use yii\web\AssetBundle;

class LoginAsset extends  AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        //'css/bootstrap.min.css',
        //'css/bootstrap-reset.css',
        'css/style.css',
        'css/style-responsive.css',
    ];

    public $js = [
        'js/bootstrap.min.js',
        //HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries
        // [if lt IE 9]
        'js/html5shiv.js',
        'js/respond.min.js',
        //[endif]
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}