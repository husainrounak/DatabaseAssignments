<?php

namespace app\controllers;

use app\models\Project;
use app\models\ProjectSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ProjectManager\ProjectInterface;
use Yii;

/**
 * ProjectController implements the CRUD actions for Project model.
 */
class ProjectController extends Controller
{
    protected $finder;
    public function __construct($id, $module, ProjectInterface $finder, $config = [])
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
     * Lists all Project models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = $this->finder->index();
        return $this->render('index',$model);
    }

    /**
     * Displays a single Project model.
     * @param int $P_id P ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($P_id)
    {
        return $this->render('view', [
            'model' => $this->finder->view($P_id),
        ]);
    }

    /**
     * Creates a new Project model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
       

        $model= $this->finder->create();
        if(isset($model->P_id)){
            return $this->redirect(['view','P_id' => $model->P_id]);
        }


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Project model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $P_id P ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($P_id)
    {
        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            $is_update = $this->finder->edit($P_id);
            return $this->redirect(['view', 'P_id' => $P_id]);
        }
        $model= $this->finder->view($P_id);
        if(isset($model)){
            
            return $this->render('update', [
                'model' => $model,
            ]);
            
        }
    }

    /**
     * Deletes an existing Project model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $P_id P ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($P_id)
    {
        $this->finder->delete($P_id);

        return $this->redirect(['index']);
    }

    /**
     * Finds the Project model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $P_id P ID
     * @return Project the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
}
Yii::$container->set('app\models\ProjectManager\ProjectInterface', 'app\models\ProjectManager\ProjectManager');

