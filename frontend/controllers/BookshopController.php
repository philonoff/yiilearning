<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Book;
use frontend\models\Publisher;

class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $books = Book::find()->all();
        return $this->render('index', [
            'books' => $books,
        ]);
    }

    public function actionCreate()
    {
        $book = new Book;
        $publishers = Publisher::find()->all();

        if ($book->load(Yii::$app->request->post()) && $book->save()) {
            Yii::$app->session->setFlash("success", 'Книга добавлена');
            return $this->redirect(["bookshop/index"]);
        }

        return $this->render('create', [
            'book' => $book,
            'publishers' => $publishers,
        ]);
    }

}
