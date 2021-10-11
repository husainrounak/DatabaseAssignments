<?php

use app\models\Project;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Module */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="module-form">


    <?php $form = ActiveForm::begin(); ?>

    <?php $data = Project::find()->select(['P_title','P_id'])->indexBy('P_id','P_title')->column();  //echo "<pre>";print_r($data);die; 
      if(!empty($data)){
        $datas=$data;
    }
    else {
        echo "<option>-</option>"; 
    }
?>

<?= $form->field($model, 'P_id')->dropDownList($datas)->label('Select Project Name'); 
?>

    <?= $form->field($model, 'M_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'M_desc')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
