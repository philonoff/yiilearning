<?php


namespace common\components;

use Yii;
use yii\base\Component;
use common\components\UserNotificationInterface;

class EmailService extends Component
{
    public function notifyUser(UserNotificationInterface $event)
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('philkrm@gmail.com')
            ->setTo($event->getEmail())
            ->setSubject($event->getSubject())
            ->send();
        var_dump($result);
    }

    public function notifyAdmin(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('philkrm@gmail.com')
            ->setTo('philkrm@gmail.com')
            ->setSubject($event->getSubject())
            ->send();
    }
}