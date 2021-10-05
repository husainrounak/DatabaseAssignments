<?php
namespace app\models;
 
use Yii;
 
class Module extends \yii\db\ActiveRecord
{
    
    public static function tableName()
    {
        return 'module';
    }
     
    
    public function rules()
    {
        return [
            [['M_title', 'M_desc'], 'required'],
            [['M_title'], 'string', 'max' => 100],
            
        ];
    }   
}