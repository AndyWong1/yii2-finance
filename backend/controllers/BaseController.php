<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;



class BaseController extends Controller {

    public function beforeAction($action){
        if(parent::beforeAction($action)){
            if(Yii::$app->user->isGuest){
                $this->redirect("/site/login");
            }
            else{
                return true;
            }
        }
        return true;
    }
}