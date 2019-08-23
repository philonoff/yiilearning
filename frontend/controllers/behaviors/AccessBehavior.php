<?php

namespace frontend\controllers\behaviors;

use yii\base\Controller;
use Yii;
use yii\base\Behavior;

class AccessBehavior extends Behavior
{
    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'checkAccess'
        ];
    }

    public function checkAccess()
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->controller->redirect(['site/index']);
        }
    }
}