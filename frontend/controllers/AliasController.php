<?php


namespace frontend\controllers;


use yii\web\Controller;

class AliasController extends Controller
{
    public function actionExample()
    {
        echo \Yii::getAlias('@webroot');
    }
}