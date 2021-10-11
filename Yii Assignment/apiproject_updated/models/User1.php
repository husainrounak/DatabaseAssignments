<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user1".
 *
 * @property int $User_id
 * @property string $firstname
 * @property string $lastname
 * @property string $gender
 * @property string $email_id
 */
class User1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'gender', 'email_id'], 'required'],
            [['firstname', 'lastname', 'email_id'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'User_id' => 'User ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'gender' => 'Gender',
            'email_id' => 'Email ID',
        ];
    }
}
