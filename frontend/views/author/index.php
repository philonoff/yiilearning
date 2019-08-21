<?php
/* @var $this yii\web\View */
/* @var $authors[] \frontend\models\Author */

use yii\helpers\Url;
?>

<a class="btn btn-primary" href="<?= Url::to(['author/create']);?>">Добавить автора</a>

<table class="table table-condensed">
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($authors as $author):?>
    <tr>
        <td><?= $author->id;?></td>
        <td><?= $author->first_name;?></td>
        <td><?= $author->last_name;?></td>
        <td><a href="<?= Url::to(['author/update', 'id' => $author->id]);?>">Edit</a></td>
        <td><a href="<?= Url::to(['author/delete', 'id' => $author->id]);?>">Delete</a></td>
    </tr>
    <?php endforeach;?>
</table>
