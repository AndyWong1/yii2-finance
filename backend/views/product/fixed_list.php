<?php
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\ProductSearch;

?>
<section class="wrapper">
<div>
    <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'pager' => [
                'firstPageLabel' => '<span class="glyphicon glyphicon-step-backward"></span>',
                'lastPageLabel' => '<span class="glyphicon glyphicon-step-forward"></span>',
                'prevPageLabel' => '<span class="glyphicon glyphicon-triangle-right"></span>',
                'nextPageLabel' => '<span class="glyphicon glyphicon-triangle-left"></span>',
            ],
            'columns' => [
                [
                    'attribute' => 'id',
                    'label' => '产品编号'
                ],
                [
                    'attribute' => 'name',
                    'label' => '产品名称'
                ],
                [
                    'attribute' => 'with_invoice',
                    'label' => '总包开票',
                    'value' => function($model){
                        switch($model->with_invoice){
                            case 0:
                                return "总包不开票";
                            case 1:
                                return "总包开票";
                            default:
                                return "数据异常";
                        }
                    }
                ],
                [
                    'label' => '分类',
                    'value' => function($model){
                        return ProductSearch::$sub_type[$model->type];
                    }
                ],
                [
                    'label' => '状态',
                    'value' => function($model){
                        return ProductSearch::$status[$model->status];
                    }
                ],
                [
                    'label' => '完成度',
                    'value' => 'id'
                ],
                [
                    'label' => '收益率(%)',
                    'value' => 'id'
                ],

                [
                    'header' => '<div>投资比例</div><div><span style="color:#0000aa">投</span>|<span style="color:#CC0000">银</span>|<span>普</span></div>',
                    'format' => 'raw',
                    'value' => function($model){
                        $rate_str = '';
                        foreach($model->rateList as $rate){
                            $rate_str .= sprintf('<span style="color:#000099">%s</span>',$rate->investor_rate==0?$rate->investor_rate_desc:$rate->investor_rate);
                            $rate_str .= sprintf('|<span style="color:#CC0000">%s</span>',$rate->bank_rate==0?$rate->bank_rate_desc:$rate->bank_rate);
                            $rate_str .= sprintf('|<span style="color: #000000">%s</span>',$rate->rate==0?$rate->rate_desc:$rate->rate);
                            $rate_str .= sprintf('<span style="color:#a9a9a9;font-size: 6px;">(%s%s)</span>', ($rate->amount_min/10000).'万',$rate->amount_max>0?'-'.($rate->amount_max/10000).'万':"以上");
                            $rate_str .= "<br/>";
                        }
                        return Html::tag("div",$rate_str);
                    }
                ],
                [
                    'label' => 'vip费率',
                    'value' => function($model){
                        $rate_str = '';
                        foreach($model->rateList as $rate){
                            $rate_str .= sprintf('<span style="color:#000099">%s</span>',$rate->vip_rate==0?$rate->vip_rate_desc:$rate->vip_rate);
                            $rate_str .= sprintf('<span style="color:#a9a9a9;font-size: 6px;">(%s%s)</span>', ($rate->amount_min/10000).'万',$rate->amount_max>0?'-'.($rate->amount_max/10000).'万':"以上");
                            $rate_str .= "<br/>";
                        }
                        return Html::tag("div",$rate_str);
                    },
                    'format' => 'raw'
                ],
                [
                    'label' => '存续周期(月)',
                    'value' => function($model){
                        return $model->productExt->period;
                    }
                ],
                [
                    'value' => function($model){
                        return $model->is_recommend?"是":"否";
                    },
                    'label' => '推荐位'
                ],
                [
                    'label' => '是否有下期',
                    'value' => function($model){
                        return $model->productExt->has_next_period?"是":"否";
                    }
                ],
                [
                    'attribute' => 'reserve_start_time',
                    'label' => '预约开始时间',
                ],
                [
                    'attribute' => 'reserve_end_time',
                    'label' => '预约结束时间'
                ],
                [
                    'attribute' => 'sort',
                    'label' => '排序'
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => '操作',
                    'template' => '{reserve} {view} {update} {view-record} {download-all} {upload} {del}',
                    'buttons' => [
                        'view-record' => function($url,$model,$key){
                            return Html::a('','javascript:;',['title'=>Yii::t('app','浏览记录'),'class'=>'glyphicon glyphicon-th-list','onclick'=>'update_status(this,'.$model->id.');']);
                        },
                        'view' => function($url,$model,$key){
                            return Html::a('','javascript:;',['title'=>Yii::t('app','详情'),'class' => 'glyphicon glyphicon-eye-open']);
                        },
                        'update' => function($url,$model,$key){
                            return Html::a('','javascript:;',['title' => Yii::t('app','更新'),'class'=>'glyphicon glyphicon-pencil']);
                        },
                        'reserve' => function($url,$model,$key){
                            return Html::a('','javascript:;',['class'=>"glyphicon glyphicon-shopping-cart",'title' => Yii::t('app','预约')]);
                        },
                        'download-all' => function($url,$model,$key){
                            return Html::a('','javascript:;',['class' => 'glyphicon glyphicon-download-alt','title'=>Yii::t('app','下载所有资料')]);
                        },
                        'upload' => function($url,$model,$key){
                            return Html::a('','javascript:;',['class'=>'glyphicon glyphicon-cloud-upload','title'=>Yii::t('app','资料上传')]);
                        },
                        'del' => function($url,$model,$key){
                            return Html::a('','javascript:;',['class' => 'glyphicon glyphicon-trash','title' => Yii::t('app','删除')]);
                        }
                    ]

                ]
            ]
        ]);
    ?>
</div>
</section>
