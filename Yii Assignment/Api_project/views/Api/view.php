<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;

echo "This is View of User Address";

?>
 
 <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'A_id',
            'A_title',
            'A_desc',
            'A_url',
            'A_method',
            'A_request',
            'A_response',
            
        ],
    ]) ?>
 
 
 <p>
        <?= Html::a('Update', ['api/edit', 'A_id' => $model->A_id], ['class' => 'btn btn-outline-primary']) ?>
        <?= Html::a('Delete', ['api/delete', 'A_id' => $model->A_id], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
