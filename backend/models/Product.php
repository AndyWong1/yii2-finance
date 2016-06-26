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
            'id' => 'ID',
            'name' => 'Name',
            'full_name' => 'Full Name',
            'type' => 'Type',
            'sub_type' => 'Sub Type',
            'status' => 'Status',
            'reserve_start_time' => 'Reserve Start Time',
            'reserve_end_time' => 'Reserve End Time',
            'sales_approach' => 'Sales Approach',
            'with_invoice' => 'With Invoice',
            'pm' => 'Pm',
            'sort' => 'Sort',
            'is_recommend' => 'Is Recommend',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
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
