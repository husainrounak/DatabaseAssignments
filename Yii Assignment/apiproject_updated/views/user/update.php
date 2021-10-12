<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User1 */

$this->title = 'Update User: ' . $model->User_id;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->User_id, 'url' => ['view', 'User_id' => $model->User_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
