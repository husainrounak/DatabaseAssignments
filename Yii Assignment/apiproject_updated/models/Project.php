<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $P_id
 * @property string $P_title
 * @property string $P_desc
 * @property string $P_logo
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['P_title', 'P_desc', 'P_logo'], 'required'],
            [['P_desc'], 'string'],
            [['P_title', 'P_logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'P_id' => 'P ID',
            'P_title' => 'P Title',
            'P_desc' => 'P Desc',
            'P_logo' => 'P Logo',
        ];
    }
}
