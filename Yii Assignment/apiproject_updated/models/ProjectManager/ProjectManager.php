<?php
namespace app\models\ProjectManager;
use app\models\Project;
use app\models\ProjectManager\ProjectInterface;
use app\models\ProjectSearch;
use yii\web\NotFoundHttpException;
use Yii;
class ProjectManager implements ProjectInterface{

    public function index(){

        $request = Yii::$app->request;
        $searchModel = new ProjectSearch();
        $dataProvider = $searchModel->search($request->post());

        return $array = [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }

    public function create(){
        $model = new Project();

        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            if($model->load($params) && $model->save()){
                return $model;
            }
        }else {
            $model->loadDefaultValues();
        }
        return $model;
    }
    public function edit($P_id)
    {
        $model = $this->findModel($P_id);

        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            if($model->load($params) && $model->save()){
                return true;
            }
        }
        return false;
        
    }

    public function delete($P_id)
    {
        return $this->findModel($P_id)->delete();
    }

    public function view($P_id)
    {
        return $this->findModel($P_id);
    }

    private function findModel($P_id)
    {
        if (($model = Project::findOne($P_id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
?>