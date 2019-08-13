<?php
/* @var $news \console\models\Sender */
?>
<?php foreach ($news as $newsItem): ?>
    <h3>
        <a href="http://yii2frontend.com/news/<?php echo $newsItem['id'];?>">
            <?php echo $newsItem['title'];?>
        </a>
    </h3>
    <p><?php echo $newsItem['text'];?></p>
    <hr>
<?php endforeach;?>
