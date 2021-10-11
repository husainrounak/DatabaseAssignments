<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property int $Add_id
 * @property string $addressone
 * @property string $addresstwo
 * @property string $city
 * @property string $state
 * @property int $pincode
 * @property string $country
 */
class UserAddress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['addressone', 'city', 'state', 'pincode', 'country','User_id'], 'required'],
            [['pincode','User_id'], 'integer'],
            [['addressone', 'addresstwo', 'city', 'state', 'country'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Add_id' => 'Add ID',
            'addressone' => 'Addressone',
            'addresstwo' => 'Addresstwo',
            'city' => 'City',
            'state' => 'State',
            'pincode' => 'Pincode',
            'country' => 'Country',
            'User_id' => 'User_id',
            //'firstname' => 'firstname',
        ];

     
    }
    public function getUser()
    {
        return $this->hasOne(User1::className(), ['User_id' => 'User_id']);
    }
}
