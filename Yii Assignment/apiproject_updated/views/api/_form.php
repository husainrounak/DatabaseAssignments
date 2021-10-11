<?php

use app\models\Module;
use app\models\Project;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Api */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="api-form">

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
<?php $data = Module::find()->select(['M_title','M_id'])->indexBy('M_id','M_title')->column();  //echo "<pre>";print_r($data);die; 
      if(!empty($data)){
        $datas=$data;
    }
    else {
        echo "<option>-</option>"; 
    }
?>

<?= $form->field($model, 'M_id')->dropDownList($datas)->label('Select Module Name'); 
?>

    <?= $form->field($model, 'A_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'A_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'A_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'A_method')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'A_request')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'A_response')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
