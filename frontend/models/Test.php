<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Test extends Model
{
    public function getNewsList($maxNewsInList)
    {
        $maxNewsInList = intval($maxNewsInList);
        $sql = "SELECT * FROM news LIMIT " . $maxNewsInList;
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}