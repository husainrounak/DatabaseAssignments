<?php
namespace app\controllers;
 
use Yii;
use app\models\Address;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
 

class AddressController extends Controller
{  
    /*create*/
    public function actionCreate()
    {
        $model = new Address();
 
        // new record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
                 
        return $this->render('create', ['model' => $model]);
    }
    /*read*/
    public function actionIndex()
    {
        $user = Address::find()->all();
         
        return $this->render('index', ['model' => $user]);
    }

    /* Edit*/
    public function actionEdit($Add_id)
    {
        $model = Address::find()->where(['Add_id' => $Add_id])->one();
 
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
     public function actionDelete($Add_id)
     {
         $model = Address::findOne($Add_id);
         
        // $id not found in database
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
             
        // delete record
        $model->delete();
         
        return $this->redirect(['index']);
     } 
     public function actionView($Add_id)
    {
        // return $this->render('view', [
        //     'model' => $this->findModel($Add_id),
        // ]);

        $model = Address::findOne($Add_id);//->one($id);
        
         
        return $this->render('view', ['model' => $model]);
    }

}