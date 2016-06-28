<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-lg-12">
        <?php $form = ActiveForm::begin(
            [
                'action'=>'/product/create',
                'options' => [
                    'class' => 'form-horizontal tasi-form'
                ]
            ]
        ); ?>
        <section class="panel">
            <header class="panel-heading">
                基本信息
            </header>
            <div class="panel-body">

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">产品编号</label>
                        <div class="col-sm-10">
                            <?= $form->field($model, 'id')->textInput(['maxlength' => true,'class'=>'form-control found-input'])->label(false) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">产品简称</label>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'name')->textInput(['maxlength' => true,'class'=>'form-control found-input'])->label(false) ?>
                        </div>

                        <label class="col-sm-2 col-sm-2 control-label">产品全称</label>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true,'class' => 'form-control found-input'])->label(false) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">产品类型</label>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'type')->textInput(['maxlength' => true,'class'=>'form-control found-input'])->label(false) ?>
                        </div>

                        <label class="col-sm-2 col-sm-2 control-label">二级分类</label>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'sub_type')->textInput(['maxlength' => true,'class' => 'form-control found-input'])->label(false) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">产品状态</label>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'status')->textInput(['maxlength' => true,'class'=>'form-control found-input'])->label(false) ?>
                        </div>

                        <label class="col-sm-2 col-sm-2 control-label">承销模式</label>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'sales_approach')->textInput(['maxlength' => true,'class' => 'form-control found-input'])->label(false) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">预约开始时间</label>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'reserve_start_time')->textInput(['maxlength' => true,'class'=>'form-control found-input'])->label(false) ?>
                        </div>

                        <label class="col-sm-2 col-sm-2 control-label">预约结束时间</label>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'reserve_end_time')->textInput(['maxlength' => true,'class' => 'form-control found-input'])->label(false) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">是否开票</label>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'with_invoice')->textInput(['maxlength' => true,'class'=>'form-control found-input'])->label(false) ?>
                        </div>

                        <label class="col-sm-2 col-sm-2 control-label">是否推荐</label>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'is_recommend')->textInput(['maxlength' => true,'class' => 'form-control found-input'])->label(false) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">排序</label>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'sort')->textInput(['maxlength' => true,'class'=>'form-control found-input'])->label(false) ?>
                        </div>

                        <label class="col-sm-2 col-sm-2 control-label">产品经理</label>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'is_recommend')->textInput(['maxlength' => true,'class' => 'form-control found-input'])->label(false) ?>
                        </div>
                    </div>
            </div>
        </section>


        <section class="panel">
            <header class="panel-heading">
                产品介绍
            </header>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">资金用途</label>
                    <div class="col-sm-4">
                        <?= $form->field($ext_model, 'use_of_funds')->textInput(['maxlength' => true,'class'=>'form-control found-input'])->label(false) ?>
                    </div>

                    <label class="col-sm-2 control-label">还款来源</label>
                    <div class="col-sm-4">
                        <?= $form->field($ext_model, 'source_of_repayment')->textInput(['maxlength' => true,'class'=>'form-control found-input'])->label(false) ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="panel">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-12">
                        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
        </section>
        <?php ActiveForm::end(); ?>
    </div>
</div>