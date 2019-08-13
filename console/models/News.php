<?php

namespace console\models;

use Yii;
use yii\base\Model;

class News extends Model
{
    public function getList()
    {
        $sql = "SELECT * FROM news";
        $newsList = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->prepareList($newsList);
    }

    public function prepareList($newsList)
    {
        if (!empty($newsList) && is_array($newsList)) {
            foreach ($newsList as &$news) {
                $news['text'] = Yii::$app->stringHelper->getShortToFewWords($news['text'], 4);
            }
        }

        return $newsList;
    }
}