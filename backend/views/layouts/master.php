<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use backend\assets\FontAwesomeAsset;

FontAwesomeAsset::register($this);
AppAsset::register($this);

$image_path = Url::to('@web/img/');
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language ?>">
<head>
    <meta charset="<?=Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?=Html::csrfMetaTags() ?>
    <title><?=Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<section id="container" >
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="/home/index" class="logo">互联网<span>理财</span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-success">6</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 6 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Dashboard v1.3</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Database Update</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Iphone Development</div>
                                    <div class="percent">87%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                        <span class="sr-only">87% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Mobile App</div>
                                    <div class="percent">33%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                        <span class="sr-only">33% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Dashboard v1.3</div>
                                    <div class="percent">45%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-red"></div>
                        <li>
                            <p class="red">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="<?=$image_path?>avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="<?=$image_path?>avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jhon Doe</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="<?=$image_path?>avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="<?=$image_path?>avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is metrolab
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">You have 7 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                Server #3 overloaded.
                                <span class="small italic">34 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                Server #10 not respoding.
                                <span class="small italic">1 Hours</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                Database overloaded 24%.
                                <span class="small italic">4 hrs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="fa fa-plus"></i></span>
                                New user registered.
                                <span class="small italic">Just now</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                                Application error.
                                <span class="small italic">10 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="关键词">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="<?=$image_path?>avatar1_small.jpg">
                        <span class="username"><?=Yii::$app->user->identity->username ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="#"><i class=" fa fa-suitcase"></i>修改密码</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> 设置</a></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i> 通知</a></li>

                        <li onclick="$('#logoutForm').submit()">
                            <a href="#" ><i class="fa fa-key"></i>退出</a>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <div style="display:none;">
                <?= Html::beginForm(['site/logout'],'post',['id'=>'logoutForm']) ?>
                <?= Html::endForm() ?>
            </div>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="/home/index">
                        <i class="fa fa-dashboard"></i>
                        <span>仪表盘</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-laptop"></i>
                        <span>系统管理</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="#">话务平台</a></li>
                        <li><a  href="#">图片上传平台</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-cogs"></i>
                        <span>系统设置</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="#">角色管理</a></li>
                        <li><a  href="#">用户管理</a></li>
                        <li><a  href="#">菜单管理</a></li>
                        <li><a  href="#" target="_blank">系统日志</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-book"></i>
                        <span>产品管理</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="#">固定收益</a></li>
                        <li><a  href="#">浮动收益</a></li>
                        <li><a  href="#">保险</a></li>
                        <li><a  href="#">公司管理</a></li>
                        <li><a  href="#">基金经理管理</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-shopping-cart"></i>
                        <span>交易管理</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="#">预约单</a></li>
                        <li><a  href="#">订单</a></li>
                        <li><a  href="#">付款申请单</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="glyphicon glyphicon-yen"></i>
                        <span>财务管理</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="#">收付流水匹配</a></li>
                        <li><a  href="#">产品财务信息</a></li>
                        <li><a  href="#">来账流水</a></li>
                        <li><a  href="#">订单统计</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-tasks"></i>
                        <span>运营管理</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="#">名片列表</a></li>
                        <li><a  href="#">广告管理</a></li>
                        <li><a  href="#">活动管理</a></li>
                        <li><a  href="#">礼券列表</a></li>
                        <li><a  href="#">用户统计分析</a></li>
                        <li><a  href="#">友情链接管理</a></li>
                        <li><a  href="#">App启动广告列表</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>渠道销售</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="#">客户列表</a></li>
                        <li><a  href="#">我的客户</a></li>
                        <li><a  href="#">产品访问记录</a></li>
                        <li><a  href="#">下属统计数据</a></li>
                        <li><a  href="#">我的拓展详情</a></li>
                        <li><a  href="#">渠道拓展统计</a></li>
                        <li><a  href="#">销售业绩统计</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-th"></i>
                        <span>我的面板</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="#">我的资料</a></li>
                        <li><a  href="#">我的消息</a></li>
                    </ul>
                </li>

                <li>
                    <a href="google_maps.html" >
                        <i class="fa fa-map-marker"></i>
                        <span>我的地图</span>
                    </a>
                </li>


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <?=$content ?>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2016-2026 &copy; Finance by Sunshinearea.
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
