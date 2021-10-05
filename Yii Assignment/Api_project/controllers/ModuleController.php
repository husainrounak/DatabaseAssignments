<?php
namespace app\controllers;
 
use Yii;
use app\models\Module;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
 

class ModuleController extends Controller
{  
    /*create*/
    public function actionCreate()
    {
        $model = new Module();
 
        // new record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
                 
        return $this->render('create', ['model' => $model]);
    }
    /*read*/
    public function actionIndex()
    {
        $user = Module::find()->all();
         
        return $this->render('index', ['model' => $user]);
    }

    /* Edit*/
    public function actionEdit($M_id)
    {
        $model = Module::find()->where(['M_id' => $M_id])->one();
 
        // $id not found in database
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
         
        // update record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
         
        return $this->render('edit', ['model' => $model]);
    }  

     /* Delete */
     public function actionDelete($M_id)
     {
         $model = Module::findOne($M_id);
         
        // $id not found in database
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
             
        // delete record
        $model->delete();
         
        return $this->redirect(['index']);
     } 
     public function actionView($M_id)
    {
        // return $this->render('view', [
        //     'model' => $this->findModel($id),
        // ]);

        $model = Module::findOne($M_id);//->one($id);
        
         
        return $this->render('view', ['model' => $model]);
    }

}