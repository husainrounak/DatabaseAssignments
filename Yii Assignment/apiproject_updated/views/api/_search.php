<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="api-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'A_id') ?>

    <?= $form->field($model, 'A_title') ?>

    <?= $form->field($model, 'A_desc') ?>

    <?= $form->field($model, 'A_url') ?>

    <?= $form->field($model, 'A_method') ?>

    <?php // echo $form->field($model, 'A_request') ?>

    <?php // echo $form->field($model, 'A_response') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
