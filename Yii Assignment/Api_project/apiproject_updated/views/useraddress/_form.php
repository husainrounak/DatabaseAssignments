<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\User1;

/* @var $this yii\web\View */
/* @var $model app\models\UserAddress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-address-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $data = User1::find()->select(['firstname','User_id'])->indexBy('User_id','firstname')->column();  //echo "<pre>";print_r($data);die; 
      if(!empty($data)){
        $datas=$data;
    }
    else {
        echo "<option>-</option>"; 
    }
?>

<?= $form->field($model, 'User_id')->dropDownList($datas)->label('Select User Name'); 
?>

    <?= $form->field($model, 'addressone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addresstwo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pincode')->textInput() ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
