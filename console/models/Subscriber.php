<?php


namespace console\models;

use Yii;

class Subscriber
{
    public function getList()
    {
        $sql = "SELECT * FROM subscriber";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}