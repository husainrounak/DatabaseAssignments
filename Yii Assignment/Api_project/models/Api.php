<?php
namespace app\models;
 
use Yii;
 
class Api extends \yii\db\ActiveRecord
{
    
    public static function tableName()
    {
        return 'api';
    }
     
    
    public function rules()
    {
        return [
            [['A_title', 'A_desc', 'A_url','A_method','A_request','A_response'], 'required'],
            [['A_title', 'A_url','A_method','A_request','A_response'], 'string', 'max' => 100],
            
            
        ];
    }   
}