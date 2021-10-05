<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;

?>
 <h1>Module Details</h1>
 <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'M_id',
            'M_title',
            'M_desc',
            
        ],
    ]) ?>
 
 
 <p>
        <?= Html::a('Update', ['module/edit', 'M_id' => $model->M_id], ['class' => 'btn btn-outline-primary']) ?>
        <?= Html::a('Delete', ['module/delete', 'M_id' => $model->M_id], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
