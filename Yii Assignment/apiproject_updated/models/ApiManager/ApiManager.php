<?php
namespace app\models\ApiManager;
use app\models\Api;
use app\models\ApiManager\ApiInterface;
use app\models\ApiSearch;
use yii\web\NotFoundHttpException;
use Yii;
class ApiManager implements ApiInterface{

    public function index(){

        $request = Yii::$app->request;
        $searchModel = new ApiSearch();
        $dataProvider = $searchModel->search($request->post());

        return $array = [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }

    public function create(){
        $model = new Api();

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
    public function edit($A_id)
    {
        $model = $this->findModel($A_id);

        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            if($model->load($params) && $model->save()){
                return true;
            }
        }else {
            $model->loadDefaultValues();
        }
        return false;
        
    }

    public function delete($A_id)
    {
        return $this->findModel($A_id)->delete();
    }

    public function view($A_id)
    {
        return $this->findModel($A_id);
    }

    private function findModel($A_id)
    {
        if (($model = Api::findOne($A_id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
?>