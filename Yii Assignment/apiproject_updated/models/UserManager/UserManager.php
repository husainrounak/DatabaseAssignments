<?php
namespace app\models\UserManager;
use app\models\User1;
use app\models\UserManager\UserInterface;
use yii\web\NotFoundHttpException;
use Yii;
class UserManager implements UserInterface{

    public function create(){
        $model = new User1();
        

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
    public function edit($User_id)
    {
        $model = $this->findModel($User_id);
        
        $params = Yii::$app->getRequest()->getBodyParams();
        if(isset($params) && !empty($params)){
            if($model->load($params) && $model->save()){
                return true;
            }
         }
        return false;
        
        
    }

    public function delete($User_id)
    {
        return $this->findModel($User_id)->delete();
    }

    public function view($User_id)
    {
        return $this->findModel($User_id);
    }

    public function findModel($User_id)
    {
        if (($model = User1::findOne($User_id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
?>