<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_rate".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $amount_min
 * @property string $amount_max
 * @property integer $status
 * @property string $expected_rate
 * @property string $expected_rate_desc
 * @property string $rate
 * @property string $rate_desc
 * @property string $vip_rate
 * @property string $vip_rate_desc
 * @property string $company_rate
 * @property string $company_rate_desc
 * @property string $bank_rate
 * @property string $bank_rate_desc
 * @property string $investor_rate
 * @property string $investor_rate_desc
 * @property string $cfo_up_front_rate
 * @property string $cfo_up_back_rate
 * @property string $cfo_down_front_rate
 * @property string $cfo_down_back_rate
 */
class ProductRate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_rate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'amount_min', 'amount_max', 'status'], 'required'],
            [['id', 'product_id', 'status'], 'integer'],
            [['amount_min', 'amount_max', 'expected_rate', 'rate', 'vip_rate', 'company_rate', 'bank_rate', 'investor_rate', 'cfo_up_front_rate', 'cfo_up_back_rate', 'cfo_down_front_rate', 'cfo_down_back_rate'], 'number'],
            [['expected_rate_desc', 'rate_desc', 'vip_rate_desc', 'company_rate_desc', 'bank_rate_desc', 'investor_rate_desc'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'amount_min' => 'Amount Min',
            'amount_max' => 'Amount Max',
            'status' => 'Status',
            'expected_rate' => 'Expected Rate',
            'expected_rate_desc' => 'Expected Rate Desc',
            'rate' => 'Rate',
            'rate_desc' => 'Rate Desc',
            'vip_rate' => 'Vip Rate',
            'vip_rate_desc' => 'Vip Rate Desc',
            'company_rate' => 'Company Rate',
            'company_rate_desc' => 'Company Rate Desc',
            'bank_rate' => 'Bank Rate',
            'bank_rate_desc' => 'Bank Rate Desc',
            'investor_rate' => 'Investor Rate',
            'investor_rate_desc' => 'Investor Rate Desc',
            'cfo_up_front_rate' => 'Cfo Up Front Rate',
            'cfo_up_back_rate' => 'Cfo Up Back Rate',
            'cfo_down_front_rate' => 'Cfo Down Front Rate',
            'cfo_down_back_rate' => 'Cfo Down Back Rate',
        ];
    }
}
