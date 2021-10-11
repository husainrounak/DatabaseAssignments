<?php
namespace app\models\UserAddressManager;
use app\models\UserAddress;
use app\models\UserAddressManager\UserAddressInterface;
use yii\web\NotFoundHttpException;
use Yii;


class UserAddressManager implements UserAddressInterface {

    public function create(){
        $model = new UserAddress();

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
    public function edit($Add_id)
    {
        $model = $this->findModel($Add_id);

        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            if($model->load($params) && $model->save()){
                return true;
            }
        }
        return false;
        
    }

    public function delete($Add_id)
    {
        return $this->findModel($Add_id)->delete();
    }

    public function view($Add_id)
    {
        return $this->findModel($Add_id);
    }

    private function findModel($Add_id)
    {
        if (($model = UserAddress::findOne($Add_id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
?>