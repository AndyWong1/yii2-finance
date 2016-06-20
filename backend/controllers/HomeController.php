<?php
namespace backend\controllers;

use Yii;
use backend\controllers;

class HomeController extends BaseController{

    public function actionIndex(){
        $this->layout = 'master';
        return $this->render('index',[]);
    }
}