<?php
/* @var $model frontend\models\Comment */
/* @var $comments[] frontend\models\Comment */

use yii\helpers\Html;

if ($model->hasErrors()) {
    echo "<pre>";
    print_r($model->errors);
    echo "</pre>";
}
?>
<form method="post">
    Name:
    <p>
        <input type="text" name="name">
    </p>
    Email:
    <p>
        <input type="text" name="email">
    </p>
    Comment:
    <p>
        <textarea name="text" cols="30" rows="10"></textarea>
    </p>
    <input type="submit">
</form>

<?php foreach ($comments as $comment):?>
    <h4><?php echo Html::encode($comment['name']);?></h4>
    <p><?php echo Html::encode($comment['text']);?></p>
    <hr>
<?php endforeach;?>