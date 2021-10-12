<?php
namespace app\models\ModuleManager;
use app\models\Module;
use app\models\ModuleManager\ModuleInterface;
use app\models\ModuleSearch;
use yii\web\NotFoundHttpException;
use Yii;
class ModuleManager implements ModuleInterface {

    public function index(){

        $request = Yii::$app->request;
        $searchModel = new ModuleSearch();
        $dataProvider = $searchModel->search($request->post());

        return $array = [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }

    public function create(){
        $model = new Module();

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
    public function edit($M_id)
    {
        $model = $this->findModel($M_id);

        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            if($model->load($params) && $model->save()){
                return true;
            }
        }
        return false;
        
    }

    public function delete($M_id)
    {
        return $this->findModel($M_id)->delete();
    }

    public function view($M_id)
    {
        return $this->findModel($M_id);
    }

    private function findModel($M_id)
    {
        if (($model = Module::findOne($M_id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
?>