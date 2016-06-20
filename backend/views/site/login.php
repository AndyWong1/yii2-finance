
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use backend\assets\LoginAsset;
use backend\assets\FontAwesomeAsset;

FontAwesomeAsset::register($this);
LoginAsset::register($this);
$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
$image_path = Url::to('@web/');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="互联网理财平台后台">
    <?=Html::csrfMetaTags() ?>
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>


</head>

<body class="login-body">




<div class="container">


    <?=Html::beginForm(['site/login'],'post',['class'=>'form-signin'])?>
    <h2 class="form-signin-heading">互联网理财平台后台</h2>
    <div class="login-wrap">
        <input name="LoginForm[username]" type="text" class="form-control" placeholder="User ID" autofocus>
        <input name="LoginForm[password]" type="password" class="form-control" placeholder="Password">
        <label class="checkbox">
            <input name="LoginForm[rememberMe]" type="checkbox" value="1"> Remember me
                <span class="pull-right">
                </span>
        </label>

        <button class="btn btn-lg btn-login btn-block" type="submit">立即登录</button>
        <p><span style="color:red;"><?=$model->getFirstError('password')?></span></p>



    </div>

    <?=Html::endForm()?>

</div>






</body>
</html>












