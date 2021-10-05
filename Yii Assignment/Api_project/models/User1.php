<?php
namespace app\models;
 
use Yii;
 
class User1 extends \yii\db\ActiveRecord
{
    
    public static function tableName()
    {
        return 'user';
    }
     
    
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'gender','email_id'], 'required'],
            [['firstname', 'lastname','gender','email_id'], 'string', 'max' => 100],
            
        ];
    }   
}