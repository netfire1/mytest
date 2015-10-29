<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comments;

/**
 * CommentsSearch represents the model behind the search form about `app\models\Comments`.
 */
class CommentsSearch extends Comments
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rating', 'id_item'], 'integer'],
            [['comment', 'post_date', 'username'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Comments::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate())
        {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'rating' => $this->rating,
            'username' => $this->username,
            'id_item' => $this->id_item,
            'post_date' => $this->post_date,
        ]);

        $query->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }

    public function searchItemComments($itemId)
    {
        $query = Comments::find();
        $query->andFilterWhere([
            'id_item' => $itemId,
        ]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $dataProvider;
    }

}
