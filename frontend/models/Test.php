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
        $newsList = Yii::$app->db->createCommand($sql)->queryAll();

        if (!empty($newsList) && is_array($newsList)) {
            foreach ($newsList as &$news) {
                $news['text'] = Yii::$app->stringHelper->getShort($news['text']);
            }
        }

        return $newsList;
    }

    public function getNewsItemById($newsId)
    {
        $newsId = intval($newsId);
        $sql = "SELECT * FROM news WHERE id = " . $newsId;
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
}