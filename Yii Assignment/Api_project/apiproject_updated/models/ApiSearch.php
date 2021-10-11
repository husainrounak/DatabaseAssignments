<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Api;

/**
 * ApiSearch represents the model behind the search form of `app\models\Api`.
 */
class ApiSearch extends Api
{
    /**
     * {@inheritdoc}
     */
    public $search_api;
    public function rules()
    {
        return [
            [['A_id'], 'integer'],
            [['A_title', 'A_desc', 'A_url', 'A_method', 'A_request', 'A_response','search_api'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Api::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            
            'pagination'=>[
                'pageSize'=>3,
            ],
            'sort'=>false,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->orFilterWhere([
            'A_id' => $this->search_api,
        ]);

        $query->orFilterWhere(['like', 'A_title', $this->search_api])
            ->orFilterWhere(['like', 'A_desc', $this->search_api])
            ->orFilterWhere(['like', 'A_url', $this->search_api])
            ->orFilterWhere(['like', 'A_method', $this->search_api])
            ->orFilterWhere(['like', 'A_request', $this->search_api])
            ->orFilterWhere(['like', 'A_response', $this->search_api]);

        return $dataProvider;
    }
}
