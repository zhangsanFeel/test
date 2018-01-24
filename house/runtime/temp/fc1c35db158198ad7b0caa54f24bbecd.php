<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"D:\phpStudy\WWW\test\house\public/../application/broker\view\share\look_lst.htm";i:1516784347;s:68:"D:\phpStudy\WWW\test\house\application\broker\view\public\header.htm";i:1516764725;}*/ ?>
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
    
     <!--Page Related styles-->
    <link href="/test/house/public/static/admin/assets/css/dataTables.bootstrap.css" rel="stylesheet" />
    <!--Beyond styles-->
    <link id="beyond-link" href="/test/house/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/test/house/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/animate.css" rel="stylesheet">
    <style>
        table,thead th{
        text-align:center;
        }
    </style>
    
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
                        <a href="<?php echo url('index/index'); ?>">返回首页</a>
                    </li>
                                        <li class="active">预约带看列表</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->

                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header  with-footer">
                                    <span class="widget-caption">预约带看列表</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    <div class="flip-scroll">
                                        <table class="table table-bordered table-striped table-condensed flip-content">
                                            <thead class="flip-content bordered-palegreen">
                                                <tr role="row">
                                                    <th>id</th>
                                                    <th>类型</th>
                                                    <th>预约房源</th>
                                                    <th>描述</th>
                                                    <th>预留姓名</th>
                                                    <th>创建时间</th>
                                                    <th>状态</th>
                                                    <th>操作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(is_array($look) || $look instanceof \think\Collection || $look instanceof \think\Paginator): $i = 0; $__LIST__ = $look;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <tr>
                                                    <td><?php echo $vo['id']; ?></td>
                                                    <td><?php echo type_name($vo['house_type']); ?></td>
                                                    <td><a <?php if($vo['house_type'] == 1): ?> href="<?php echo url('index/second_house/main',['id'=>$vo['house_id']]); ?>" <?php elseif($vo['house_type'] == 2): ?>  href="<?php echo url('index/rent_house/main',['id'=>$vo['house_id']]); ?>" <?php endif; ?>  style="color:red" target="_blank"><?php echo title($vo['house_id'],$vo['house_type']); ?></a></td>
                                                    <td><?php echo $vo['user_desc']; ?></td>
                                                    <td><?php echo $vo['name']; ?> <?php echo sex($vo['sex']); ?></td>
                                                     <td><?php echo create_time($vo['create_time']); ?></td>
                                                    <td><?php echo house_type($vo['status']); ?></td>
                                                    <td>

                                                        <a href="#" data-id="<?php echo $vo['id']; ?>"  class="btn btn-danger btn-xs receive" onclick="" >点击接受委托</a>

                                                    </td>
                                                </tr>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </tbody>
                                        </table>
                                        <div><?php echo $look->render(); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="/test/house/public/static/admin/public/js/common.js"></script>
    <script>

       var SCOPE={
        'listorder':"<?php echo url('second_house/listorder'); ?>",
        }; 

        
        $(function () {

            $(".receive").click(function () {
                var id = $(this).attr('data-id');
                var url="<?php echo url('share/look_status'); ?>";
                $.post(url,{id:id},function(result){
                    if(result==1){
                        window.alert('已接受委托,可在个人信息查看,请尽快完成委托');
                    }else if(result==2){
                         window.alert('委托接收失败');
                    }
                     location.reload(); 

                });

            });
        });
               
    </script>


</body></html>