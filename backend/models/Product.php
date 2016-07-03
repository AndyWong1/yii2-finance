<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $full_name
 * @property integer $type
 * @property integer $sub_type
 * @property integer $status
 * @property string $reserve_start_time
 * @property string $reserve_end_time
 * @property integer $sales_approach
 * @property integer $with_invoice
 * @property integer $pm
 * @property integer $sort
 * @property integer $is_recommend
 * @property integer $is_deleted
 * @property string $created_at
 * @property string $updated_at
 *
 * @property ProductExt[] $productExts
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * 产品分类
     * @return array
     */
    const types = [
            '1' => '固定收益产品',
            '2' => '浮动收益产品',
            '3' => '保险产品'
        ];

    /**
     * 产品二级分类
     * @return array
     */
    const sub_types = [
            1=>'信托',
            2=>'资管',
            3=>'私募基金',
            4=>'阳光私募'
        ];

    const sales_approachs = [
        0=>'分销',
        1=>'总包',
    ];

    /**
     * 产品状态
     */
    const status = [
        0=>'下架',
        1=>'上级',
        2=>'预热',
        3=>'售罄'
    ];

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'sub_type', 'status', 'sales_approach', 'with_invoice', 'pm', 'sort', 'is_recommend', 'is_deleted'], 'integer'],
            [['reserve_start_time', 'reserve_end_time', 'pm'], 'required'],
            [['reserve_start_time', 'reserve_end_time', 'created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 30],
            [['full_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'name' => '产品名称',
            'full_name' => '产品全称',
            'type' => '产品类型',
            'sub_type' => '二级分类',
            'status' => '产品状态',
            'reserve_start_time' => '预约开始时间',
            'reserve_end_time' => '预约结束时间',
            'sales_approach' => '承销方式',
            'with_invoice' => '是否开票',
            'pm' => '产品经理',
            'sort' => '排序',
            'is_recommend' => '是否推荐',
            'is_deleted' => '是否删除',
            'created_at' => '创建时间',
            'updated_at' => '结束时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductExt()
    {
        return $this->hasOne(ProductExt::className(), ['product_id' => 'id']);
    }
    
    public function getRateList(){
        return $this->hasMany(ProductRate::className(),['product_id' => 'id']);
    }
}
