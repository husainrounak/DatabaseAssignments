<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ApiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="api-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Api', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  $form = ActiveForm::begin(); ?>
    <?= $form->field($searchModel, 'search_api');//->textInput(['maxlength' => true]) ?>

<div class="form-group">
    <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
</div>
<?php  ActiveForm::end(); ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
            ['attribute'=>'Project Name',
            'value'=>function($data){
                return $data->module->M_title;
            }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'headerOptions' => ['width:90'],
                'template' => '{update} {view} {delete}',
                'buttons' => [
                    'update' => function ($url, $model, $key) {
                        return Html::a('Update', ['update', 'A_id'=>$model->A_id],[
                            'class' => 'btn btn-outline-warning',
                        ]);
                        
                    },
                    'view' => function ($url, $model, $key) {
                        return Html::a('View', ['view', 'A_id'=>$model->A_id],[
                            'class' => 'btn btn-outline-success',
                        ]);
                        
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('Delete', ['delete', 'A_id' => $model->A_id], [
                            'class' => 'btn btn-outline-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ]
                            ]);
                    },
                ]
            ],
        ],
    ]); ?>


</div>
