<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class PartnerSearch extends PartnerLocator
{

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'id',
                    'company',
                    'status',
                    'logo',
                    'address',
                    'website',
                    'phone',
                    'countries_covered',
                    'states_covered',
                ],
                'safe'
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            'id',
            'company',
            'status',
            'logo',
            'address',
            'website',
            'phone',
            'countries_covered',
            'states_covered',
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

    public function search($params)
    {
        $query = PartnerLocator::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => $this->sorts(),
            'pagination' => [
                'pageSize' => 5,
            ]
        ]);

        $this->load($params, '');

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'LIKE',
            'company',
            $this->company

        ]);
        $query->andFilterWhere([
            'LIKE',
            'address',
            $this->address
        ]);

        return $dataProvider;
    }

    public function sorts()
    {
        return [

        ];
    }
}