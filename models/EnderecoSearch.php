<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Endereco;

/**
 * EnderecoSearch represents the model behind the search form of `app\models\Endereco`.
 */
class EnderecoSearch extends Endereco
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idendereco'], 'integer'],
            [['logradouro', 'bairro', 'numerocasa', 'Escoteiro_idescoteiro'], 'safe'],
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
        $query = Endereco::find();

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

        $query->joinWith('escoteiroIdescoteiro');

        // grid filtering conditions
        $query->andFilterWhere([
            'idendereco' => $this->idendereco,
            //'Escoteiro_idescoteiro' => $this->Escoteiro_idescoteiro,
        ]);

        $query->andFilterWhere(['like', 'logradouro', $this->logradouro])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'numerocasa', $this->numerocasa])
            ->andFilterWhere(['like', 'Escoteiro.nome', $this->Escoteiro_idescoteiro]);

        return $dataProvider;
    }
}
