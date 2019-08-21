<?php
/* @var $this yii\web\View */
/* @var $books[] \frontend\models\Book*/
?>
<h1>Books</h1>
<?php foreach ($books as $book): ?>
    <h4>Название книги: <?= $book->name;?></h4>
    <p>Дата публикпции книги: <?= $book->getDatePublished();?></p>
    <p>Издатель: <?= $book->getPublisherName();?></p>
    <p>Автор(ы):
        <?php foreach ($book->authors as $author): ?>
            <p>
                <?= $author->first_name;?>
                <?= $author->last_name;?>
            </p>
        <?php endforeach;?>
    </p>
    <hr>
<?php endforeach;?>
