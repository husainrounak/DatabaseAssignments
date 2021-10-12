<?php

namespace app\controllers;

use app\models\User1;
use app\models\UserSearch;
//use Codeception\Specify\Config;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\UserManager\UserInterface;
use Yii;
use yii\filters\VerbFilter;
//use yii\di\Container;

/**
 * UserController implements the CRUD actions for User1 model.
 */
class UserController extends Controller
{
    protected $finder;
    public function __construct($id, $module, UserInterface $finder, $config = [])
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
     * Lists all User1 models.
     * @return mixed
     */
    public function actionIndex()
    {

        $model = $this->finder->index();
        return $this->render('index',$model);
        // $searchModel = new UserSearch();
        // $dataProvider = $searchModel->search($this->request->post());

        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);
    }

    /**
     * Displays a single User1 model.
     * @param int $User_id User ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($User_id)
    {
        return $this->render('view', [
            'model' => $this->finder->view($User_id),
        ]);
    }

    /**
     * Creates a new User1 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    
    {
       
        $model= $this->finder->create();
        
        if(isset($model->User_id)){
            return $this->redirect(['view','User_id' => $model->User_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
        // $model = new User1();

        // if ($this->request->isPost) {
        //     if ($model->load($this->request->post()) && $model->save()) {
        //         return $this->redirect(['view', 'User_id' => $model->User_id]);
        //     }
        // } else {
        //     $model->loadDefaultValues();
        // }

       
    }

    /**
     * Updates an existing User1 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $User_id User ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($User_id)
    {
        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            $is_update = $this->finder->edit($User_id);
            return $this->redirect(['view', 'User_id' => $User_id]);
        }
        $model= $this->finder->view($User_id);
        if(isset($model)){
            
            return $this->render('update', [
                'model' => $model,
            ]);
            
        }
       
        
        
    }

    /**
     * Deletes an existing User1 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $User_id User ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($User_id)
    {
        $this->finder->delete($User_id);

        return $this->redirect(['index']);
    }

    /**
     * Finds the User1 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $User_id User ID
     * @return User1 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    
}
Yii::$container->set('app\models\UserManager\UserInterface', 'app\models\UserManager\UserManager');