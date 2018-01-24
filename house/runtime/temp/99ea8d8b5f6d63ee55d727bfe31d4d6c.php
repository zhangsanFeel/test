<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"D:\phpStudy\WWW\test\house\public/../application/broker\view\share\look_add.htm";i:1516785819;s:68:"D:\phpStudy\WWW\test\house\application\broker\view\public\header.htm";i:1516764725;}*/ ?>
<!DOCTYPE html>
<html><head>
        <meta charset="utf-8">
    <title>0539房产信息管理系统</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <!-- bootstrap -->
   <link rel="stylesheet" type="text/css" href="/test/house/public/static/admin/assets/css/bootstrap.min.css"><!-- 
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
  <link media="all" href="/test/house/public/static/admin/public/js/jquery.searchableSelect.css" type="text/css"   
 rel="stylesheet">
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
                        <a href="<?php echo url('user/appoint_user_lst'); ?>">我的带看房源列表</a>
                    </li>
                                        <li class="active">新增带看信息</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增带看信息</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="<?php echo url('share/look_save'); ?>"  method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label no-padding-right">主要带看房源编号</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" placeholder="" value="<?php echo house_code($look['house_id'],$look['house_type']); ?>" name="title" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label no-padding-right">客户电话</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" placeholder="" value="<?php echo $look['phone']; ?>" name="title" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="room" class="col-sm-2 control-label no-padding-right">本次带看</label>
                            <div class="col-sm-2 form-inline" >
                                   <input type="number" name="room" id="room" class="form-control" required maxlength="1" style="width:70%"> 套房源
                            </div>
                            <p class="help-block col-sm-4  red"></p>
                        </div> 
                        
                        <div class="form-group">
                            <label for="lightspot" class="col-sm-2 control-label no-padding-right">经纪人带看描述</label>
                            <div class="col-sm-6">
                               <textarea name="lightspot" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            <p class="help-block col-sm-4 red"></p>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">发布信息</button>
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
    
<script type="text/javascript">
//初始化fileinput控件（第一次初始化）
initFileInput("file-5","<?php echo url('lists/product_file'); ?>");
initFileInput("file-4","<?php echo url('lists/product_file'); ?>");
function initFileInput(ctrlName, uploadUrl) {    
    var control = $('#' + ctrlName); 
    control.fileinput({
           language: 'zh', //设置语言
                uploadUrl:uploadUrl, //上传的地址
               allowedFileExtensions: ['jpg', 'gif', 'png','jpeg'],//接收的文件后缀
               //uploadExtraData:{"id": 1, "fileName":'123.mp3'},
                uploadAsync: false, //默认异步上传
                showUpload:false, //是否显示上传按钮
                showRemove :false, //显示移除按钮
                showPreview :true, //是否显示预览
                showCaption:false,//是否显示标题
                browseClass:"btn btn-primary", //按钮样式    
               dropZoneEnabled: false,//是否显示拖拽区域
               //minImageWidth: 50, //图片的最小宽度
               //minImageHeight: 50,//图片的最小高度
               //maxImageWidth: 1000,//图片的最大宽度
               //maxImageHeight: 1000,//图片的最大高度
                //maxFileSize:0,//单位为kb，如果为0表示不限制文件大小
               //minFileCount: 0,
                maxFileCount:24, //表示允许同时上传的最大文件个数
                enctype:'multipart/form-data',
               validateInitialCount:true,
                previewFileIcon: "<iclass='glyphicon glyphicon-king'></i>",
               msgFilesTooMany: "选择上传的文件数量({n}) 超过允许的最大数值{m}！",
           }).on("fileuploaded", function (event, data, previewId, index){
                 
});
}

function rentingClick(){
    $("#joint").addClass("btn-warning").removeClass("btn-defalut");
    $("#entire").addClass("btn-defalut").removeClass("btn-warning");
    $("#renting").val(1);
     $("#property").css("display","block");
}
function entireClick(){
     $("#entire").addClass("btn-warning").removeClass("btn-defalut");
    $("#joint").addClass("btn-defalut").removeClass("btn-warning");
    $("#renting").val(2);
    $("#property").css("display","none");
}



</script>
</body></html>