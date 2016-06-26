<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * 产品分类的子类型
     * @var array
     */
    public static $sub_type = [
        0=>"无",
        1=>"信托",
        2=>"资管",
        3=>"私募基金",
        4=>"阳光私募",
    ];

    /**
     * 产品状态
     * @var array
     */
    public static $status = [
        0=>"下架",
        1=>"在售",
        2=>"预热",
        3=>"售罄"
    ];

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type', 'sub_type', 'status', 'sales_approach', 'with_invoice', 'pm', 'sort', 'is_recommend', 'is_deleted'], 'integer'],
            [['name', 'full_name', 'reserve_start_time', 'reserve_end_time', 'created_at', 'updated_at'], 'safe'],
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
        $query = Product::find();

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
            'type' => $this->type,
            'sub_type' => $this->sub_type,
            'status' => $this->status,
            'reserve_start_time' => $this->reserve_start_time,
            'reserve_end_time' => $this->reserve_end_time,
            'sales_approach' => $this->sales_approach,
            'with_invoice' => $this->with_invoice,
            'pm' => $this->pm,
            'sort' => $this->sort,
            'is_recommend' => $this->is_recommend,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'full_name', $this->full_name]);

        return $dataProvider;
    }
}
