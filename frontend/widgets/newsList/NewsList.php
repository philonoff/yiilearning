<?php

namespace frontend\widgets\newsList;

use frontend\models\Test;
use Yii;
use yii\base\Widget;

class NewsList extends Widget
{
    public $maxNewsInList = null;

    public function run()
    {
        $model = new Test();
        $maxNewsInList = Yii::$app->params['maxNewsInList'];
        if ($this->maxNewsInList) {
            $maxNewsInList = $this->maxNewsInList;
        }
        $newsList = $model->getNewsList($maxNewsInList);

        return $this->render('index', [
            'newsList' => $newsList,
        ]);
    }
}