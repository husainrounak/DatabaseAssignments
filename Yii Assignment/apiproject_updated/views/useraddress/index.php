<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserAddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Addresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-address-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Address', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  $form = ActiveForm::begin(); ?>
    <?= $form->field($searchModel, 'search_address');//->textInput(['maxlength' => true]) ?>

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

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'headerOptions' => ['width:90'],
                'template' => '{update} {view} {delete}',
                'buttons' => [
                    'update' => function ($url, $model, $key) {
                        return Html::a('Update', ['update', 'Add_id'=>$model->Add_id],[
                            'class' => 'btn btn-outline-warning',
                        ]);
                        
                    },
                    'view' => function ($url, $model, $key) {
                        return Html::a('View', ['view', 'Add_id'=>$model->Add_id],[
                            'class' => 'btn btn-outline-success',
                        ]);
                        
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('Delete', ['delete', 'Add_id' => $model->Add_id], [
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
