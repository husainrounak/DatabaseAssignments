<?php
namespace app\controllers;
 
use Yii;
use app\models\Project;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
 

class ProjectController extends Controller
{  
    /*create*/
    public function actionCreate()
    {
        $model = new Project();
 
        // new record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
                 
        return $this->render('create', ['model' => $model]);
    }
    /*read*/
    public function actionIndex()
    {
        $user = Project::find()->all();
         
        return $this->render('index', ['model' => $user]);
    }

    /* Edit*/
    public function actionEdit($P_id)
    {
        $model = Project::find()->where(['P_id' => $P_id])->one();
 
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
     public function actionDelete($P_id)
     {
         $model = Project::findOne($P_id);
         
        // $id not found in database
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
             
        // delete record
        $model->delete();
         
        return $this->redirect(['index']);
     } 
     public function actionView($P_id)
    {
        // return $this->render('view', [
        //     'model' => $this->findModel($id),
        // ]);

        $model = Project::findOne($P_id);//->one($id);
        //$users = Users::find()->where(['id' => $id])->one();
         
        return $this->render('view', ['model' => $model]);
    }
}