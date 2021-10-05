<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'addressone'); ?>
    <?= $form->field($model, 'addresstwo'); ?>
    <?= $form->field($model, 'city'); ?>
    <?= $form->field($model, 'state'); ?>
    <?= $form->field($model, 'pincode'); ?>
    <?= $form->field($model, 'country'); ?>
    
     
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>