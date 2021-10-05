<?php
namespace app\controllers;
 
use Yii;
use app\models\User1;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
 

class UserController extends Controller
{  
    /*create*/
    public function actionCreate()
    {
        $model = new User1();
 
        // new record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
                 
        return $this->render('create', ['model' => $model]);
    }
    /*read*/
    public function actionIndex()
    {
        $user = User1::find()->all();
         
        return $this->render('index', ['model' => $user]);
    }

    /* Edit*/
    public function actionEdit($User_id)
    {
        $model = User1::find()->where(['User_id' => $User_id])->one();
 
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
     public function actionDelete($User_id)
     {
         $model = User1::findOne($User_id);
         
        // $id not found in database
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
             
        // delete record
        $model->delete();
         
        return $this->redirect(['index']);
     } 

     public function actionView($User_id)
    {
        // return $this->render('view', [
        //     'model' => $this->findModel($id),
        // ]);

        $model = User1::findOne($User_id);//->one($id);
        //$users = Users::find()->where(['id' => $id])->one();
         
        return $this->render('view', ['model' => $model]);
    }

}