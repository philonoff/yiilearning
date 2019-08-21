<?php
/* @var $this yii\web\View */
/* @var $author \frontend\models\Author */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin();?>
    <?= $form->field($author, 'first_name');?>
    <?= $form->field($author, 'last_name');?>
    <?= $form->field($author, 'birthdate');?>
    <?= $form->field($author, 'rating');?>
    <?= Html::submitButton('Сохранить');?>
<?php ActiveForm::end();?>

