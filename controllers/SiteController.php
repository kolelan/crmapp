<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex(){
        $request = Yii::$app->getRequest();
        print_r($request);
        return 'Our CRM';
    }

}