<?php


namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Subscribe;

class NewsletterController extends Controller
{
    public function actionSubscribe()
    {
        $request = Yii::$app->request;
        $model = new Subscribe();
        if ($request->isPost) {
            $model->email = $request->post()['email'];
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Вы подписались на рассылку');
            }
        }
        return $this->render('subscribe', [
            'model' => $model,
        ]);
    }
}