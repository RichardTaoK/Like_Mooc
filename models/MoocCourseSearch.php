<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MoocCourse;

/**
 * MoocCourseSearch represents the model behind the search form of `app\models\MoocCourse`.
 */
class MoocCourseSearch extends MoocCourse
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fid', 'tid', 'did', 'view_count'], 'integer'],
            [['title', 'description', 'pic', 'teacher_id', 'teacher_tip', 'create_time', 'url'], 'safe'],
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
        $query = MoocCourse::find();

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
            'fid' => $this->fid,
            'tid' => $this->tid,
            'did' => $this->did,
            'view_count' => $this->view_count,
            'create_time' => $this->create_time,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'pic', $this->pic])
            ->andFilterWhere(['like', 'teacher_id', $this->teacher_id])
            ->andFilterWhere(['like', 'teacher_tip', $this->teacher_tip])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
