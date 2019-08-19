<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller
{
    public $layout = 'test';

    public function actionIndex()
    {
        $model = new Test();
        $maxNewsInList = Yii::$app->params['maxNewsInList'];
        $newsList = $model->getNewsList($maxNewsInList);

        return $this->render('index', [
            'newsList' => $newsList,
        ]);
    }

    public function actionView($newsId)
    {
        $newsItem = Test::getNewsItemById($newsId);
        return $this->render('view', [
            'newsItem' => $newsItem,
        ]);
    }

    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('philkrm@gmail.com')
            ->setTo('philkrm@gmail.com')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();
        var_dump($result);
    }
}