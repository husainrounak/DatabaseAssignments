<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'firstname'); ?>
    <?= $form->field($model, 'lastname'); ?>
    <?= $form->field($model, 'gender'); ?>
    <?= $form->field($model, 'email_id'); ?>
     
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>