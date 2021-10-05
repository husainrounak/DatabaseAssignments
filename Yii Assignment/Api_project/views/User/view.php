<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;



?>
<h1>User Details</h1>
 
 <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'User_id',
            'firstname',
            'lastname',
            'email_id',
            
        ],
    ]) ?>
 
 
 <p>
        <?= Html::a('Update', ['user/edit', 'User_id' => $model->User_id], ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::a('Delete', ['user/delete', 'User_id' => $model->User_id], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>




<br>