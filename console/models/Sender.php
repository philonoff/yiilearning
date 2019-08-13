<?php


namespace console\models;

use Yii;

class Sender
{
    public static function run($subscribers, $news)
    {
        foreach ($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('news', ['news' => $news,])
                ->setFrom('philkrm@gmail.com')
                ->setTo($subscriber['email'])
                ->setSubject('Последние новости')
                ->send();
            var_dump($result);
        }
    }
}