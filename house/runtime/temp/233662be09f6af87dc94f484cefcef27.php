<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"D:\phpStudy\WWW\test\house\public/../application/location\view\broker\lst.htm";i:1515901882;s:70:"D:\phpStudy\WWW\test\house\application\location\view\public\header.htm";i:1515811526;}*/ ?>
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
                            <i class="menu-icon glyphicon glyphicon-user"></i>
                            <span class="menu-text">经纪人管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('broker/lst'); ?>">
                                    <span class="menu-text">
                                        经纪人列表                                 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon glyphicon-star"></i>
                            <span class="menu-text">评分管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('city/lst'); ?>">
                                    <span class="menu-text">
                                        评分列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-file"></i>
                            <span class="menu-text">信息管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('band_look/lst'); ?>">
                                    <span class="menu-text">
                                        带看列表                                </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('band_look/lst'); ?>">
                                    <span class="menu-text">
                                        成交列表                                </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>
                    
                     <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-thumbs-up"></i>
                            <span class="menu-text">成交管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('evaluate/lst'); ?>">
                                    <span class="menu-text">
                                        成交列表                                </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>

                     
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">
                                    <span class="menu-text">
                                        配置                                   </span>
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
                        <a href="#">地址管理</a>
                    </li>
                                        <li class="active">地址列表</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<a tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" href="<?php echo url('broker/add'); ?>"> <i class="fa fa-plus"></i> Add</a>
<div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header ">
                                    <span class="widget-caption">地址列表</span>
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
                                    <div class="table-toolbar">
                                    </div>
                                    <table class="table table-striped table-hover table-bordered" id="editabledatatable">
                                        <thead>
                                            <tr role="row">
                                                <th>id</th>
                                                <th>排序</th>
                                                <th>名称</th>
                                                <th>联系方式</th>
                                                <th>创建时间</th>
                                                <th>入职时间</th>
                                                <th>状态</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if(is_array($brokers) || $brokers instanceof \think\Collection || $brokers instanceof \think\Paginator): $i = 0; $__LIST__ = $brokers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <tr>
                                                <td><?php echo $vo['id']; ?></td>
                                                <td><input type="text" data-id="<?php echo $vo['id']; ?>" class="listorder" value="<?php echo $vo['listorder']; ?>" style="width:50px"></td>
                                                <td><?php echo $vo['username']; ?></td>
                                                <td><?php echo $vo['phone']; ?></td>
                                                <td><?php echo $vo['create_time']; ?></td>
                                                <td><?php echo date('Y-m-d',$vo['entry_time']); ?></td>
                                                <td><a href="<?php echo url('broker/status',['id'=>$vo['id'],'status'=>$vo['status']==1?0:1]); ?>"><?php echo status($vo['status']); ?></a></td>
                                                <td>
                                                    <a href="<?php echo url('broker/edit',['id'=>$vo['id']]); ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>更新</a>
                                                    <a href="<?php echo url('broker/delete',['id'=>$vo['id']]); ?>" class="btn btn-danger btn-xs delete" onclick="" ><i class="fa fa-trash-o"></i>删除</a>
                                                </td>

                                            </tr> 
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </tbody>
                                    </table>
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
        'listorder':"<?php echo url('broker/listorder'); ?>",
        }; 
               
    </script>


</body></html>