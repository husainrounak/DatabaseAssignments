<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user1-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php  $form = ActiveForm::begin(); ?>
    <?= $form->field($searchModel, 'search_users');//->textInput(['maxlength' => true]) ?>

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

            'User_id',
            'firstname',
            'lastname',
            'gender',
            'email_id:email',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'headerOptions' => ['width:90'],
                'template' => '{update} {view} {delete}',
                'buttons' => [
                    'update' => function ($url, $model, $key) {
                        return Html::a('Update', ['update', 'User_id'=>$model->User_id],[
                            'class' => 'btn btn-outline-warning',
                        ]);
                        
                    },
                    'view' => function ($url, $model, $key) {
                        return Html::a('View', ['view', 'User_id'=>$model->User_id],[
                            'class' => 'btn btn-outline-success',
                        ]);
                        
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('Delete', ['delete', 'User_id' => $model->User_id], [
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
