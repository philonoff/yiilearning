<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Author;
use frontend\controllers\behaviors\AccessBehavior;

class AuthorController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [
            AccessBehavior::class,
        ];
    }

    public function actionCreate()
    {
        $author = new Author();

        if ($author->load(Yii::$app->request->post()) && $author->save()) {
            Yii::$app->session->setFlash('success', 'Автор добавлен');
            return $this->redirect(['author/index']);
        }

        return $this->render('create', [
            'author' => $author,
        ]);
    }

    public function actionDelete($id)
    {
        $author = Author::findOne($id);
        $author->delete();
        Yii::$app->session->setFlash('success', 'Автор удален');
        return $this->redirect(['author/index']);
    }

    public function actionIndex()
    {
        $authors = Author::find()->all();
        return $this->render('index', [
            'authors' => $authors,
        ]);
    }

    public function actionUpdate($id)
    {
        $author = Author::findOne($id);

        if ($author->load(Yii::$app->request->post()) && $author->save()) {
            Yii::$app->session->setFlash('success', 'Изменения сохранены');
        }

        return $this->render('update', [
            'author' => $author,
        ]);
    }

}
