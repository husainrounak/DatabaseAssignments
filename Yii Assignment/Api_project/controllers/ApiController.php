<?php
namespace app\controllers;
 
use Yii;
use app\models\Api;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
 

class ApiController extends Controller
{  
    /*create*/
    public function actionCreate()
    {
        $model = new Api();
 
        // new record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
                 
        return $this->render('create', ['model' => $model]);
    }
    /*read*/
    public function actionIndex()
    {
        $user = Api::find()->all();
         
        return $this->render('index', ['model' => $user]);
    }

    /* Edit*/
    public function actionEdit($A_id)
    {
        $model = Api::find()->where(['A_id' => $A_id])->one();
 
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
     public function actionDelete($A_id)
     {
         $model = Api::findOne($A_id);
         
        // $id not found in database
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
             
        // delete record
        $model->delete();
         
        return $this->redirect(['index']);
     }
     public function actionView($A_id)
    {
        // return $this->render('view', [
        //     'model' => $this->findModel($id),
        // ]);

        $model = Api::findOne($A_id);//->one($id);
        //$users = Users::find()->where(['id' => $id])->one();
         
        return $this->render('view', ['model' => $model]);
    } 

}