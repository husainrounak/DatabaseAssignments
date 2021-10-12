<?php

namespace app\controllers;

use app\models\Api;
use app\models\ApiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ApiManager\ApiInterface;
use Yii;
/**
 * ApiController implements the CRUD actions for Api model.
 */
class ApiController extends Controller
{
    protected $finder;
    public function __construct($id, $module, ApiInterface $finder, $config = [])
    {
        $this->finder = $finder;
        parent::__construct($id,$module,$config);

    }

    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Api models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = $this->finder->index();
        return $this->render('index',$model);
    }

    /**
     * Displays a single Api model.
     * @param int $A_id A ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($A_id)
    {
        return $this->render('view', [
            'model' =>  $this->finder->view($A_id),
        ]);
    }

    /**
     * Creates a new Api model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model= $this->finder->create();
        
        if(isset($model->A_id)){
            return $this->redirect(['view','A_id' => $model->A_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Api model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $A_id A ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($A_id)
    {
        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            $is_update = $this->finder->edit($A_id);
            return $this->redirect(['view', 'A_id' => $A_id]);
        }
        $model= $this->finder->view($A_id);
        if(isset($model)){
            
            return $this->render('update', [
                'model' => $model,
            ]);
            
        }
    }

    /**
     * Deletes an existing Api model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $A_id A ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($A_id)
    {
        $this->finder->delete($A_id);

        return $this->redirect(['index']);
    }

    /**
     * Finds the Api model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $A_id A ID
     * @return Api the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
   
}
Yii::$container->set('app\models\ApiManager\ApiInterface', 'app\models\ApiManager\ApiManager');