<?php


namespace frontend\controllers;

use Yii;
use frontend\models\Comment;
use yii\web\Controller;

class CommentController extends Controller
{
    public function actionIndex()
    {
        $model = new Comment();

        if (Yii::$app->request->isPost) {
            $model->attributes = Yii::$app->request->post();
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'OK');
            }
        }

        $comments = $model->getCommentsList();

        return $this->render('index', [
            'model' => $model,
            'comments' => $comments,
        ]);
    }
}