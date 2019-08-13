<?php

namespace common\components;

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

    public function getShortToFewWords($string, $numberOfWords)
    {
        $words = array_slice(explode(" ", $string), 0, $numberOfWords);
        return implode(" ", $words) . "...";
    }
}