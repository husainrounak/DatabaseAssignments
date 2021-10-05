<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;



?>
<h1>Address Details</h1>
 
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
            
        ],
    ]) ?>
 
 
 <p>
        <?= Html::a('Update', ['address/edit', 'Add_id' => $model->Add_id], ['class' => 'btn btn-outline-primary']) ?>
        <?= Html::a('Delete', ['address/delete', 'Add_id' => $model->Add_id], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
