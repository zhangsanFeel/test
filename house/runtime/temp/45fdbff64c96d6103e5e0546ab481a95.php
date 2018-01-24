<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"D:\phpStudy\WWW\test\house\public/../application/broker\view\index\index.htm";i:1513301877;s:68:"D:\phpStudy\WWW\test\house\application\broker\view\public\header.htm";i:1516764725;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>0539房产信息管理系统</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/test/house/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/test/house/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/test/house/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/animate.css" rel="stylesheet">
    
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
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li class="active">控制面板</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
                </div>
                

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="/test/house/public/static/admin/style/jquery_002.js"></script>
    <script src="/test/house/public/static/admin/style/bootstrap.js"></script>
    <script src="/test/house/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/test/house/public/static/admin/style/beyond.js"></script>
    


</body></html>