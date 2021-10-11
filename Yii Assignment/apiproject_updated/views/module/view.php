<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Module */

$this->title = $model->M_id;
$this->params['breadcrumbs'][] = ['label' => 'Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="module-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'M_id' => $model->M_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'M_id' => $model->M_id], [
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
            'M_id',
            'M_title',
            'M_desc:ntext',
            ['attribute'=>'Project Name',
            'value'=>function($data){
                return $data->project->P_title;
            }
            ],
        ],
    ]) ?>

</div>
