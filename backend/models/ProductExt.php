<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_ext".
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $risk_level
 * @property string $issuers
 * @property string $desc
 * @property string $pay_interest_allcation
 * @property string $use_of_funds
 * @property string $source_of_repayment
 * @property string $project_location
 * @property string $customer_manager_comment
 * @property string $official_comment
 * @property integer $period
 * @property integer $total_amount
 * @property integer $min_subscribe_amount
 * @property integer $progress_rate
 * @property string $progress_desc
 * @property string $earnings_ratio
 * @property string $commission_rate
 * @property string $bank
 * @property string $pay_desc
 * @property integer $pay_type
 * @property string $invest_category
 * @property string $bank_account
 * @property integer $recommend_sort
 * @property integer $company_id
 * @property string $contact
 * @property string $general_contractor_price
 * @property string $vip_commission_rate
 * @property string $collateral_desc
 * @property string $mortgage_rates
 * @property string $bank_desc
 * @property string $risk_control
 * @property string $secured_party
 * @property string $financiers_desc
 * @property string $issue_date
 * @property integer $region
 * @property integer $region_id
 * @property integer $city_id
 * @property string $summary
 * @property string $upstream_unit
 * @property string $upstream_contacts
 * @property string $upstream_contact_info
 * @property string $end_date
 * @property string $seo_title
 * @property string $seo_desc
 * @property string $seo_keywords
 * @property integer $increased_base
 * @property integer $collect_count
 * @property integer $download_count
 * @property integer $ratings
 * @property integer $is_preferably
 * @property integer $has_next_period
 * @property integer $email_share_count
 *
 * @property Product $product
 */
class ProductExt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_ext';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'progress_desc', 'earnings_ratio', 'pay_type', 'collateral_desc', 'risk_control', 'issue_date', 'region', 'region_id', 'city_id', 'summary', 'end_date', 'seo_title', 'increased_base'], 'required'],
            [['product_id', 'risk_level', 'period', 'total_amount', 'min_subscribe_amount', 'progress_rate', 'pay_type', 'recommend_sort', 'company_id', 'region', 'region_id', 'city_id', 'increased_base', 'collect_count', 'download_count', 'ratings', 'is_preferably', 'has_next_period', 'email_share_count'], 'integer'],
            [['earnings_ratio', 'commission_rate', 'general_contractor_price', 'vip_commission_rate', 'mortgage_rates'], 'number'],
            [['risk_control', 'summary'], 'string'],
            [['issue_date', 'end_date'], 'safe'],
            [['issuers', 'pay_interest_allcation', 'project_location', 'customer_manager_comment', 'official_comment', 'bank', 'pay_desc', 'invest_category', 'bank_account', 'contact', 'upstream_unit', 'upstream_contact_info'], 'string', 'max' => 50],
            [['desc', 'use_of_funds'], 'string', 'max' => 150],
            [['source_of_repayment', 'progress_desc', 'secured_party', 'financiers_desc', 'seo_desc'], 'string', 'max' => 500],
            [['collateral_desc', 'bank_desc'], 'string', 'max' => 200],
            [['upstream_contacts'], 'string', 'max' => 20],
            [['seo_title'], 'string', 'max' => 100],
            [['seo_keywords'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
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
            'risk_level' => 'Risk Level',
            'issuers' => 'Issuers',
            'desc' => 'Desc',
            'pay_interest_allcation' => 'Pay Interest Allcation',
            'use_of_funds' => 'Use Of Funds',
            'source_of_repayment' => 'Source Of Repayment',
            'project_location' => 'Project Location',
            'customer_manager_comment' => 'Customer Manager Comment',
            'official_comment' => 'Official Comment',
            'period' => 'Period',
            'total_amount' => 'Total Amount',
            'min_subscribe_amount' => 'Min Subscribe Amount',
            'progress_rate' => 'Progress Rate',
            'progress_desc' => 'Progress Desc',
            'earnings_ratio' => 'Earnings Ratio',
            'commission_rate' => 'Commission Rate',
            'bank' => 'Bank',
            'pay_desc' => 'Pay Desc',
            'pay_type' => 'Pay Type',
            'invest_category' => 'Invest Category',
            'bank_account' => 'Bank Account',
            'recommend_sort' => 'Recommend Sort',
            'company_id' => 'Company ID',
            'contact' => 'Contact',
            'general_contractor_price' => 'General Contractor Price',
            'vip_commission_rate' => 'Vip Commission Rate',
            'collateral_desc' => 'Collateral Desc',
            'mortgage_rates' => 'Mortgage Rates',
            'bank_desc' => 'Bank Desc',
            'risk_control' => 'Risk Control',
            'secured_party' => 'Secured Party',
            'financiers_desc' => 'Financiers Desc',
            'issue_date' => 'Issue Date',
            'region' => 'Region',
            'region_id' => 'Region ID',
            'city_id' => 'City ID',
            'summary' => 'Summary',
            'upstream_unit' => 'Upstream Unit',
            'upstream_contacts' => 'Upstream Contacts',
            'upstream_contact_info' => 'Upstream Contact Info',
            'end_date' => 'End Date',
            'seo_title' => 'Seo Title',
            'seo_desc' => 'Seo Desc',
            'seo_keywords' => 'Seo Keywords',
            'increased_base' => 'Increased Base',
            'collect_count' => 'Collect Count',
            'download_count' => 'Download Count',
            'ratings' => 'Ratings',
            'is_preferably' => 'Is Preferably',
            'has_next_period' => 'Has Next Period',
            'email_share_count' => 'Email Share Count',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
