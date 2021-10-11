<?php

namespace app\controllers;

use app\models\UserAddress;
use app\models\UserAddressSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UserAddressManager\UserAddressInterface;
use Yii;

/**
 * UserAddressController implements the CRUD actions for UserAddress model.
 */
class UseraddressController extends Controller
{

    protected $finder;
    public function __construct($id, $module, UserAddressInterface $finder, $config = [])
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
     * Lists all UserAddress models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserAddressSearch();
        $dataProvider = $searchModel->search($this->request->post());

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserAddress model.
     * @param int $Add_id Add ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Add_id)
    {
        return $this->render('view', [
            'model' => $this->finder->view($Add_id),
        ]);
    }

    /**
     * Creates a new UserAddress model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserAddress();

        $model= $this->finder->create();
        if(isset($model->Add_id)){
            return $this->redirect(['view','Add_id' => $model->Add_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UserAddress model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Add_id Add ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Add_id)
    {
        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            $is_update = $this->finder->edit($Add_id);
            return $this->redirect(['view', 'Add_id' => $Add_id]);
        }
        $model= $this->finder->view($Add_id);
        if(isset($model)){
            
            return $this->render('update', [
                'model' => $model,
            ]);
            
        }
    }

    /**
     * Deletes an existing UserAddress model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Add_id Add ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Add_id)
    {
        $this->finder->delete($Add_id);

        return $this->redirect(['index']);
    }

    /**
     * Finds the UserAddress model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Add_id Add ID
     * @return UserAddress the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    
}Yii::$container->set('app\models\UserAddressManager\UserAddressInterface', 'app\models\UserAddressManager\UserAddressManager');
