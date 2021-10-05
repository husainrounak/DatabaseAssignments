<?php
namespace app\models;
 
use Yii;
 
class Project extends \yii\db\ActiveRecord
{
    
    public static function tableName()
    {
        return 'project';
    }
     
    
    public function rules()
    {
        return [
            [['P_title', 'P_desc', 'P_logo'], 'required'],
            [['P_title', 'P_logo'], 'string', 'max' => 100],
            
            
        ];
    }   
}