<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class MailerController extends Controller
{
    public function actionSend()
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