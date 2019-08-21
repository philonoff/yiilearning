<?php


namespace frontend\models;

use yii\db\ActiveRecord;

class Publisher extends ActiveRecord
{
    public static function tableName()
    {
        return '{{publisher}}';
    }
}