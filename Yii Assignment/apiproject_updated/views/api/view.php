<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Api */

$this->title = $model->A_id;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="api-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'A_id' => $model->A_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'A_id' => $model->A_id], [
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
            'A_id',
            'A_title',
            'A_desc:ntext',
            'A_url:url',
            'A_method',
            'A_request',
            'A_response',
            ['attribute'=>'Project Name',
            'value'=>function($data){
                return $data->project->P_title;
            }
            ],
            ['attribute'=>'Module Name',
            'value'=>function($data){
                return $data->module->M_title;
            }
            ],
        ],
    ]) ?>

</div>
