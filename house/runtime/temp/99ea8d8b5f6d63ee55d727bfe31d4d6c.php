<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"D:\phpStudy\WWW\test\house\public/../application/broker\view\share\look_add.htm";i:1516776053;s:68:"D:\phpStudy\WWW\test\house\application\broker\view\public\header.htm";i:1516764725;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>0539房产信息管理系统</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="/test/house/public/static/admin/assets/css/bootstrap.min.css">
    <!-- 
   <link rel="stylesheet" type="text/css" href="/test/house/public/static/admin/bootstrap/css/default.css"> -->
    <link rel="stylesheet" type="text/css" href="/test/house/public/static/admin/bootstrap/css/fileinput.min.css">
    <link href="/test/house/public/static/admin/bootstrap/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <!--Basic Styles-->
    <script type="text/javascript" src="/test/house/public/static/admin/library/jqury/jquery-3.1.1.js"></script>
    <link href="/test/house/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/weather-icons.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/test/house/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/test/house/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/animate.css" rel="stylesheet">
    <!-- select选择框 -->
    <link media="all" href="/test/house/public/static/admin/public/js/jquery.searchableSelect.css" type="text/css" rel="stylesheet">
    <!--Basic Scripts-->
    <script src="/test/house/public/static/admin/style/jquery_002.js"></script>
    <script src="/test/house/public/static/admin/style/bootstrap.js"></script>
    <script src="/test/house/public/static/admin/style/jquery.js"></script>

</head>

<body>
    	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="/test/house/public/static/admin/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/test/house/public/static/admin/images/7_5OJN}IP_O}FL7@SQY}8HN.gif">
                                </div>
                                <section>
                                    <h2><span class="profile"><span></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Sevensont</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('login/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('index/edit'); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications(其实没什么用,可以起到装饰作用..)</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-plus"></i>
                            <span class="menu-text">共享资源</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('second_house/lst'); ?>">
                                    <span class="menu-text">
                                        二手房列表                                 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('second_house/lst'); ?>">
                                    <span class="menu-text">
                                        租房列表                                 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('second_house/lst'); ?>">
                                    <span class="menu-text">
                                        经纪人列表                                 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-plus"></i>
                            <span class="menu-text">共享室</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('share/look_lst'); ?>">
                                    <span class="menu-text">
                                        委托房源列表                                 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('share/look_lst'); ?>">
                                    <span class="menu-text">
                                        预约带看列表                                 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text">二手房管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('second_house/lst'); ?>">
                                    <span class="menu-text">
                                        二手房列表                                 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text">租房管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('rent_house/lst'); ?>">
                                    <span class="menu-text">
                                        租房列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                     <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-user"></i>
                            <span class="menu-text">客户列表</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('rent_house/lst'); ?>">
                                    <span class="menu-text">
                                        客户列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('rent_house/lst'); ?>">
                                    <span class="menu-text">
                                        房产网客户列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>    
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-user"></i>
                            <span class="menu-text">个人信息</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('user/lst'); ?>">
                                    <span class="menu-text">
                                        查看个人信息                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('user/house_lst'); ?>">
                                    <span class="menu-text">
                                        查看收藏房源                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li> 
                            <li>
                                <a href="<?php echo url('user/broker_lst'); ?>">
                                    <span class="menu-text">
                                        查看收藏经纪人                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>  
                            <li>
                                <a href="<?php echo url('user/appoint_user_lst'); ?>">
                                    <span class="menu-text">
                                        查看接受的带看预约                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li> 
                            <li>
                                <a href="<?php echo url('user/appoint_house_lst'); ?>">
                                    <span class="menu-text">
                                        查看接受的委托房源                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>                      

                        </ul>    
                    </li>

                   
                                           
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
    <!-- /Page Sidebar -->
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <a href="#">系统</a>
                </li>
                <li>
                    <a href="<?php echo url('rent_house/lst'); ?>">租房信息表</a>
                </li>
                <li class="active">新增租房信息</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <!-- Page Body -->
        <div class="page-body">

            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-header bordered-bottom bordered-blue">
                            <span class="widget-caption">新增租房信息</span>
                        </div>
                        <div class="widget-body">
                            <div id="horizontal-form">
                                <form class="form-horizontal" role="form" action="<?php echo url('rent_house/save'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label no-padding-right">标题</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="title" placeholder="" name="title" required="" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>


                                    <div class="form-group">
                                        <label for="room" class="col-sm-2 control-label no-padding-right">房屋户型</label>
                                        <div class="col-sm-2 form-inline">
                                            <input type="number" name="room" id="room" class="form-control" required maxlength="1" style="width:70%"> 室
                                        </div>
                                        <div class="col-sm-2 form-inline">
                                            <input type="number" name="hall" id="hall" class="form-control" required maxlength="1" style="width:70%"> 厅
                                        </div>
                                        <div class="col-sm-2 form-inline">
                                            <input type="number" name="toilet" id="toilet" class="form-control" required maxlength="1" style="width:70%"> 卫
                                        </div>
                                        <p class="help-block col-sm-4  red"></p>
                                    </div>


                                    <div class="form-group">
                                        <label for="carseat" class="col-sm-2 control-label no-padding-right">标签</label>
                                        <div class="col-sm-6 form-inline">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price" class="col-sm-2 control-label no-padding-right">总价格</label>
                                        <div class="col-sm-2 form-inline">
                                            <input class="form-control" id="price" onblur="onmouseupget()" placeholder="" style="width:40%" name="price" required=""
                                                type="text">
                                            <span style="padding-left:10px;font-size:16px;color:red">元/月</span>
                                        </div>
                                        <div class="col-sm-4 form-inline">
                                            <select name="payment_type" id="" class="form-control" required>
                                                <option>付款方式</option>
                                                <option value="1">付1押1</option>
                                                <option value="2">付1押2</option>
                                                <option value="3">付2押1</option>
                                                <option value="4">付2押2</option>
                                                <option value="5">付3押1</option>
                                                <option value="6">付3押2</option>
                                                <option value="7">面议</option>
                                                <option value="8">半年付</option>
                                                <option value="9">年付</option>
                                                <option value="10">半年付押1</option>
                                                <option value="11">半年付不押</option>
                                                <option value="12">年付不押</option>
                                                <option value="13">年付押1</option>
                                            </select>
                                        </div>
                                        <p class="help-block col-sm-4 red"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="lightspot" class="col-sm-2 control-label no-padding-right">核心卖点</label>
                                        <div class="col-sm-6">
                                            <textarea name="lightspot" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <p class="help-block col-sm-4 red"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="house_type" class="col-sm-2 control-label no-padding-right">户型介绍</label>
                                        <div class="col-sm-6">
                                            <textarea name="house_type" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <p class="help-block col-sm-4 red"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="decorate_desc" class="col-sm-2 control-label no-padding-right">装修描述</label>
                                        <div class="col-sm-6">
                                            <textarea name="decorate_desc" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <p class="help-block col-sm-4 red"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="mating" class="col-sm-2 control-label no-padding-right">周边配套</label>
                                        <div class="col-sm-6">
                                            <textarea name="mating" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <p class="help-block col-sm-4 red"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="estate_desc" class="col-sm-2 control-label no-padding-right">小区介绍</label>
                                        <div class="col-sm-6">
                                            <textarea name="estate_desc" class="form-control" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <p class="help-block col-sm-4 red"></p>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">保存信息</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Page Body -->
    </div>
    <!-- /Page Content -->


    <!--Beyond Scripts-->
    <script src="/test/house/public/static/admin/style/beyond.js"></script>

    <script src="/test/house/public/static/admin/bootstrap/js/fileinput.js" type="text/javascript"></script>
    <script src="/test/house/public/static/admin/bootstrap/js/fileinput_locale_zh.js" type="text/javascript"></script>
    <script src="/test/house/public/static/admin/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- select选择筛选框 -->

</body>

</html>