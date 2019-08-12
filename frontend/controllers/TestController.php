<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller
{
    public function actionIndex()
    {
        $model = new Test();
        $maxNewsInList = Yii::$app->params['maxNewsInList'];
        $newsList = $model->getNewsList($maxNewsInList);
        return $this->render('index', [
            'newsList' => $newsList,
        ]);
    }
}