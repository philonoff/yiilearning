<?php

namespace frontend\components;

use Yii;

class StringHelper
{
    public $length;

    public function __construct()
    {
        $this->length = Yii::$app->params['shortTextLength'];
    }

    public function getShort(string $string, $length = null):string
    {
        if ($length === null) {
            $length = $this->length;
        }
        return mb_substr($string, 0, $length);
    }
}