<?php
/* @var $newsList[] frontend\controllers\TestController */
?>

<?php foreach ($newsList as $news):?>
    <h3><?php echo $news['title'];?></h3>
    <p><?php echo $news['text'];?></p>
<?php endforeach;?>
