<?php

use yii\helpers\Url;

$this->title = '互联网理财平台后台';
$image_path = Url::to('@web/img/');
?>

<section class="wrapper">
    <!--state overview start-->
    <div class="row state-overview">
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol terques">
                    <i class="fa fa-user"></i>
                </div>
                <div class="value">
                    <h1 class="count">
                        0
                    </h1>
                    <p>用户</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol red">
                    <i class="fa fa-tags"></i>
                </div>
                <div class="value">
                    <h1 class=" count2">
                        0
                    </h1>
                    <p>产品</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol yellow">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="value">
                    <h1 class=" count3">
                        0
                    </h1>
                    <p>订单</p>
                </div>
            </section>
        </div>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <div class="symbol blue">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="value">
                    <h1 class=" count4">
                        0
                    </h1>
                    <p>总利润</p>
                </div>
            </section>
        </div>
    </div>
    <!--state overview end-->

    <div class="row">
        <div class="col-lg-8">
            <!--custom chart start-->
            <div class="border-head">
                <h3>成单额</h3>
            </div>
            <div class="custom-bar-chart">
                <ul class="y-axis">
                    <li><span>100</span></li>
                    <li><span>80</span></li>
                    <li><span>60</span></li>
                    <li><span>40</span></li>
                    <li><span>20</span></li>
                    <li><span>0</span></li>
                </ul>
                <div class="bar">
                    <div class="title">一月</div>
                    <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                </div>
                <div class="bar ">
                    <div class="title">二月</div>
                    <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                </div>
                <div class="bar ">
                    <div class="title">三月</div>
                    <div class="value tooltips" data-original-title="40%" data-toggle="tooltip" data-placement="top">40%</div>
                </div>
                <div class="bar ">
                    <div class="title">四月</div>
                    <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
                </div>
                <div class="bar">
                    <div class="title">五月</div>
                    <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
                </div>
                <div class="bar ">
                    <div class="title">六月</div>
                    <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
                </div>
                <div class="bar">
                    <div class="title">七月</div>
                    <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
                </div>
                <div class="bar ">
                    <div class="title">八月</div>
                    <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
                </div>
                <div class="bar ">
                    <div class="title">九月</div>
                    <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                </div>
                <div class="bar ">
                    <div class="title">十月</div>
                    <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
                </div>
                <div class="bar ">
                    <div class="title">十一月</div>
                    <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
                </div>
                <div class="bar ">
                    <div class="title">十二月</div>
                    <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
                </div>
            </div>
            <!--custom chart end-->
        </div>
        <div class="col-lg-4">
            <!--new earning start-->
            <div class="panel terques-chart">
                <div class="panel-body chart-texture">
                    <div class="chart">
                        <div class="heading">
                            <span>星期五</span>
                            <strong>¥ 57,00 | 15%</strong>
                        </div>
                        <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                    </div>
                </div>
                <div class="chart-tittle">
                    <span class="title">本月利润</span>
                              <span class="value">
                                  <a href="#" class="active">市场</a>
                                  |
                                  <a href="#">推荐</a>
                                  |
                                  <a href="#">在线</a>
                              </span>
                </div>
            </div>
            <!--new earning end-->

            <!--total earning start-->
            <div class="panel green-chart">
                <div class="panel-body">
                    <div class="chart">
                        <div class="heading">
                            <span>七月</span>
                            <strong>23 天 | 65%</strong>
                        </div>
                        <div id="barchart"></div>
                    </div>
                </div>
                <div class="chart-tittle">
                    <span class="title">总利润</span>
                    <span class="value">¥, 76,54,678</span>
                </div>
            </div>
            <!--total earning end-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <!--user info table start-->
            <section class="panel">
                <div class="panel-body">
                    <a href="#" class="task-thumb">
                        <img src="<?=$image_path?>avatar1.jpg" alt="">
                    </a>
                    <div class="task-thumb-details">
                        <h1>
                            <a href="#">
                                <?php
                                if(!empty(Yii::$app->user->identity->username)){
                                    echo Yii::$app->user->identity->username;
                                }
                                else{
                                    echo "未登录";
                                }
                                ?>
                            </a>
                        </h1>
                        <p>管理员 超级用户</p>
                    </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                    <tr>
                        <td>
                            <i class=" fa fa-tasks"></i>
                        </td>
                        <td>新任务</td>
                        <td> 02</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-exclamation-triangle"></i>
                        </td>
                        <td>待处理</td>
                        <td> 14</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-envelope"></i>
                        </td>
                        <td>私信</td>
                        <td> 45</td>
                    </tr>
                    <tr>
                        <td>
                            <i class=" fa fa-bell-o"></i>
                        </td>
                        <td>通知</td>
                        <td> 09</td>
                    </tr>
                    </tbody>
                </table>
            </section>
            <!--user info table end-->
        </div>
        <div class="col-lg-8">
            <!--work progress start-->
            <section class="panel">
                <div class="panel-body progress-panel">
                    <div class="task-progress">
                        <h1>工作流 进度</h1>
                        <p>王 馨荃</p>
                    </div>
                    <div class="task-option">
                        <select class="styled">
                            <option>李 凯</option>
                            <option>古 拉</option>
                            <option>吴 大维</option>
                        </select>
                    </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            上海中心地产项目
                        </td>
                        <td>
                            <span class="badge bg-important">75%</span>
                        </td>
                        <td>
                            <div id="work-progress1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            魔术飞跃一期
                        </td>
                        <td>
                            <span class="badge bg-success">43%</span>
                        </td>
                        <td>
                            <div id="work-progress2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            金葵花增利
                        </td>
                        <td>
                            <span class="badge bg-info">67%</span>
                        </td>
                        <td>
                            <div id="work-progress3"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            新城商业
                        </td>
                        <td>
                            <span class="badge bg-warning">30%</span>
                        </td>
                        <td>
                            <div id="work-progress4"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            岁月流金
                        </td>
                        <td>
                            <span class="badge bg-primary">15%</span>
                        </td>
                        <td>
                            <div id="work-progress5"></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </section>
            <!--work progress end-->
        </div>
    </div>


</section>
