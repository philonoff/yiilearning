<?php
/* @var $newsList[] frontend\controllers\TestController */
use yii\helpers\Url;
?>

<?php foreach ($newsList as $news):?>
    <h3>
        <a href="<?php echo Url::to(['test/view', 'newsId' => $news['id']]);?>">
            <?php echo $news['title'];?>
        </a>
    </h3>
    <p><?php echo $news['text'];?></p>
<?php endforeach;?>
