<?php
/* @var $model frontend\models\Subscribe */

//if (Yii::$app->session->hasFlash('subscribeStatus')) {
//    echo Yii::$app->session->getFlash('subscribeStatus');
//}

if ($model->hasErrors()) {
    echo "<pre>";
    print_r($model->getErrors());
    echo "</pre>";
}
?>

</ul>
<form method="post">
    <p>Email:</p>
    <input type="text" name="email">
    <br>
    <br>
    <input type="submit">
</form>
