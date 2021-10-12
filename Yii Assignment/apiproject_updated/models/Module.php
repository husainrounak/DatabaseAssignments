<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "module".
 *
 * @property int $M_id
 * @property string $M_title
 * @property string $M_desc
 */
class Module extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'module';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['M_title', 'M_desc','P_id'], 'required'],
            [['M_desc'], 'string'],
            [['M_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'M_id' => 'M ID',
            'M_title' => 'M Title',
            'M_desc' => 'M Desc',
            'P_id' => 'P_id'
        ];
    }
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['P_id' => 'P_id']);
    }
}
