<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;



?>
 <h1>Project Details</h1>
 <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'P_id',
            'P_title',
            'P_desc',
            'P_logo',
            
        ],
    ]) ?>
 
 
 <p>
        <?= Html::a('Update', ['project/edit', 'P_id' => $model->P_id], ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::a('Delete', ['project/delete', 'P_id' => $model->P_id], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
