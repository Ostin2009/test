<?php

namespace app\models\forms;

use app\models\Shoes;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Remnant as RemnantModel;

/**
 * Remnant represents the model behind the search form of `app\models\Remnant`.
 */
class Remnant extends RemnantModel
{
    public $model;
    public $color;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'shoes_id', 'size', 'count'], 'integer'],
            [['model', 'color'], 'string'],
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
        $query = RemnantModel::find()
            ->joinWith(Shoes::tableName())
            ->with(Shoes::tableName());

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'size' => $this->size,
            'count' => $this->count,
        ]);

        $query->andFilterWhere(['like', 'shoes.model', $this->model])
            ->andFilterWhere(['like', 'shoes.color', $this->color]);

        return $dataProvider;
    }

    public function getSizes()
    {

    }

    public function getColors()
    {

    }
}
