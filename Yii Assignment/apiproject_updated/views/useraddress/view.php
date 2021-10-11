<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserAddress */

$this->title = $model->Add_id;
$this->params['breadcrumbs'][] = ['label' => 'User Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-address-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Add_id' => $model->Add_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Add_id' => $model->Add_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Add_id',
            'addressone',
            'addresstwo',
            'city',
            'state',
            'pincode',
            'country',
            ['attribute'=>'User Name',
            'value'=>function($data){
                return $data->user->firstname;
            }
            ],
        ],
    ]) ?>

</div>
