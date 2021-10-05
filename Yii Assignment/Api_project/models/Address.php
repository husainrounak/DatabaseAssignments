<?php
namespace app\models;
 
use Yii;
 
class Address extends \yii\db\ActiveRecord
{
    
    public static function tableName()
    {
        return 'useraddress';
    }
     
    
    public function rules()
    {
        return [
            [['addressone', 'addresstwo', 'city','state','pincode','country'], 'required'],
            [['addressone', 'addresstwo', 'city','state','country'], 'string', 'max' => 100],
          
            
            
        ];
    }   
}