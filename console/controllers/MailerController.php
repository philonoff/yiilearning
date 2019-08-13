<?php
namespace console\controllers;

use console\models\Sender;
use console\models\Subscriber;
use console\models\News;
use yii\console\Controller;

class MailerController extends Controller
{
    public function actionSend()
    {
        $newsModel = new News();
        $news = $newsModel->getList();

        $subscriberModel = new Subscriber();
        $subscribers = $subscriberModel->getList();

        Sender::run($subscribers, $news);
    }
}