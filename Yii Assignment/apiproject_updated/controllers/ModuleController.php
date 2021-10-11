<?php

namespace app\controllers;

use app\models\Module;
use app\models\ModuleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ModuleManager\ModuleInterface;
use Yii;

/**
 * ModuleController implements the CRUD actions for Module model.
 */
class ModuleController extends Controller
{
    protected $finder;
    public function __construct($id, $module, ModuleInterface $finder, $config = [])
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
     * Lists all Module models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ModuleSearch();
        $dataProvider = $searchModel->search($this->request->post());

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Module model.
     * @param int $M_id M ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($M_id)
    {
        return $this->render('view', [
            'model' => $this->finder->view($M_id),
        ]);
    }

    /**
     * Creates a new Module model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model= $this->finder->create();

        if(isset($model->M_id)){
            return $this->redirect(['view','M_id' => $model->M_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Module model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $M_id M ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($M_id)
    {
        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            $is_update = $this->finder->edit($M_id);
            return $this->redirect(['view', 'M_id' => $M_id]);
        }
        $model= $this->finder->view($M_id);
        if(isset($model)){
            
            return $this->render('update', [
                'model' => $model,
            ]);
            
        }
    }

    /**
     * Deletes an existing Module model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $M_id M ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($M_id)
    {
        $this->finder->delete($M_id);

        return $this->redirect(['index']);
    }

    /**
     * Finds the Module model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $M_id M ID
     * @return Module the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    
}
Yii::$container->set('app\models\ModuleManager\ModuleInterface', 'app\models\ModuleManager\ModuleManager');