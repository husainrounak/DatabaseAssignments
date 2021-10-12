<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "api".
 *
 * @property int $A_id
 * @property string $A_title
 * @property string $A_desc
 * @property string $A_url
 * @property string $A_method
 * @property string $A_request
 * @property string $A_response
 */
class Api extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'api';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['A_title', 'A_desc', 'A_url', 'A_method', 'A_request', 'A_response','P_id','M_id'], 'required'],
            [['A_desc'], 'string'],
            [['A_title', 'A_url', 'A_method', 'A_request', 'A_response'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'A_id' => 'A ID',
            'A_title' => 'A Title',
            'A_desc' => 'A Desc',
            'A_url' => 'A Url',
            'A_method' => 'A Method',
            'A_request' => 'A Request',
            'A_response' => 'A Response',
            'P_id' => 'P_id',
            'M_id' => 'M_id'
        ];
    }
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['P_id' => 'P_id']);
    }
    public function getModule()
    {
        return $this->hasOne(Module::className(), ['M_id' => 'M_id']);
    }
}
