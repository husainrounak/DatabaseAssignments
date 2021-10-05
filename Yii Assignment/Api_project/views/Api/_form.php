<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 
<?php $form = ActiveForm::begin(); ?>
 
    <?= $form->field($model, 'A_title'); ?>
    <?= $form->field($model, 'A_desc'); ?>
    <?= $form->field($model, 'A_url'); ?>
    <?= $form->field($model, 'A_method'); ?>
    <?= $form->field($model, 'A_request'); ?>
    <?= $form->field($model, 'A_response'); ?>
    
     
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
 
<?php ActiveForm::end(); ?>