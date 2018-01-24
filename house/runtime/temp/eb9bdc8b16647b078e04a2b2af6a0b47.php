<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\phpStudy\WWW\test\public/../application/index\view\user\entrust.html";i:1516756137;s:62:"D:\phpStudy\WWW\test\application\index\view\public\header.html";i:1516498860;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>车辆展示_这里是您的网站名称</title>
<meta name="keywords" content="这里是您的网站名称" />
<meta name="description" content="这里是您的网站名称"/>

<meta name="Author" content="024" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<LINK href="/test/public/static/index/style/style.css" rel=stylesheet>
<LINK href="/test/public/static/index/style/meGrass.css" rel=stylesheet>
<LINK href="/test/public/static/index/style/bootstrap.css" rel=stylesheet>
<script language="JavaScript" type="text/javascript" src="/test/public/static/index/style/jquery.js"></script>

    

<!--[if IE 6]><script type="text/javascript" src="js/DD_belatedPNG.js"></script><![endif]-->
<script>
$(function(){
	$('.h2').click(function(){
		$(this).addClass('active');
		$('.h1').removeClass('active');
		$('.rents').css('display','block');
		$('.seconds').css('display','none');
	});

	$('.h1').click(function(){
		$(this).addClass('active');
		$('.h2').removeClass('active');
		$('.rents').css('display','none');
		$('.seconds').css('display','block');
	});


})


</script>
</head>
<body>	





	<div class="nav">
    	<ul>
        	<li><a href="<?php echo url('index/index'); ?>" title="网站首页">网站首页</a></li>
                         <li><a href="<?php echo url('second_house/index'); ?>" title="二手房">二手房</a></li>
                        <li><a href="<?php echo url('rent_house/index'); ?>" title="租房">租房</a></li>
                        <li><a href="<?php echo url('broker/index'); ?>" title="经纪人">经纪人</a></li>
                        <li><a href="<?php echo url('house_entrust/index'); ?>" title="卖房委托">卖房委托</a></li>
      </ul>   
      <div class="login">
          <?php if($user): ?>
              欢迎您,<a href="<?php echo url('user/index'); ?>"><?php echo phone($user['phone']); ?></a>/ <a href="<?php echo url('login/logout'); ?>">退出</a>
          <?php else: ?>
           <a href="<?php echo url('login/index'); ?>">登陆</a> / <a href="<?php echo url('login/login'); ?>">注册</a>
          <?php endif; ?>
      </div>   
    </div>
    
</div>
<div class="clear"></div> 

<div class="me-main">
		<!-- 左边侧边栏 -->
		<div class="me-sidebar">
			<div class="me-img"><img src="/test/public/uploads/<?php echo $user['img']; ?>" alt="" /></div>
			<div class="me-name">欢迎您.<?php if($user['name'] == ''): ?> <?php echo phone($user['phone']); else: ?>  <?php echo $user['name']; endif; ?></div>
			<div class="me-nav">
				<ul>
					<li><a href="<?php echo url('user/index'); ?>">首页</a></li>
					<li  ><a href="<?php echo url('user/collect'); ?>">关注房源</a></li>
					<li  > <a href="<?php echo url('user/subscribe'); ?>">预约清单</a></li>
					<li><a href="<?php echo url('user/broker'); ?>">我关注的经纪人</a></li>
					<li class="active" ><a href="<?php echo url('user/entrust'); ?>">我的委托</a></li>
				</ul>
			</div>
					
		</div>
		<!-- 右边主题 -->
		<div class="me-content">
			<h2>共<span class="red"><?php echo $count; ?></span>次委托</h2>
			<div class="me-nav" style="margin-bottom:50px">
				<ul>
					<li class=" h1 active"><a href="#">二手房</a></li>
					<li class="h2"><a href="#">新房</a></li>
				</ul>
			</div>
			 <div class="widget-body seconds" >
	            <table class="table table-striped table-hover table-bordered" id="editabledatatable">
	                <thead>
	                    <tr role="row">
	                        <th>id</th>
	                        <th>预约房源</th>
	                        <th>评价</th>
	                        <th>带看经纪人</th>
	                        <th>评分</th>
	                        <th>状态</th>
	                    </tr>
	                </thead>

	                <tbody>
	                    <?php if(is_array($seconds) || $seconds instanceof \think\Collection || $seconds instanceof \think\Paginator): $i = 0; $__LIST__ = $seconds;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	                    <tr>
	                        <td><?php echo $vo['id']; ?></td>
	                        <td><?php echo title($vo['house_id'],$vo['house_type']); ?></td>
	                        <td><?php echo title_substr($vo['evaluate']); ?></td>
	                        <td><a href="<?php echo url('broker/user',['id'=>$vo['broker_id']]); ?>" target="_blank"><?php echo broker_name($vo['broker_id']); ?></a></td>
	                         <td><?php echo $vo['grade']; ?>分</td>
	                        <td><?php echo house_type($vo['status']); ?></td>
	                     </tr>
	                    <?php endforeach; endif; else: echo "" ;endif; ?>
	                </tbody>
	            </table>
	            <div><?php echo $rents->render(); ?></div>
	        </div>
	        <div class="widget-body rents" style="display:none;" >
	            <table class="table table-striped table-hover table-bordered" id="editabledatatable">
	                <thead>
	                    <tr role="row">
	                        <th>id</th>
	                        <th>预约房源</th>
	                        <th>描述</th>
	                        <th>预留姓名</th>
	                        <th>创建时间</th>
	                        <th>状态</th>
	                        <th>操作</th>
	                    </tr>
	                </thead>

	                <tbody>
	                    <?php if(is_array($rents) || $rents instanceof \think\Collection || $rents instanceof \think\Paginator): $i = 0; $__LIST__ = $rents;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	                    <tr>
	                        <td><?php echo $vo['id']; ?></td>
	                        <td><?php echo title($vo['house_id'],$vo['house_type']); ?></td>
	                        <td><?php echo $vo['desc']; ?></td>
	                        <td><?php echo $vo['name']; ?> <?php echo sex($vo['sex']); ?></td>
	                         <td><?php echo create_time($vo['create_time']); ?></td>
	                        <td><?php echo house_type($vo['status']); ?></td>
	                        <td>
	                            <a href="<?php echo url('rent_house/delete',['id'=>$vo['id']]); ?>"  class="btn btn-danger btn-xs delete" onclick="" ><i class="fa fa-trash-o"></i>取消预约</a>
	                        </td>
	                    </tr>
	                    <?php endforeach; endif; else: echo "" ;endif; ?>
	                </tbody>
	            </table>
	            <div><?php echo $rents->render(); ?></div>
	        </div>
		</div>
		<div class="clear"></div>
	</div>



  
 
<div class="foot">
  <div class="foot-map">
      <div class="foot-mleft">
          <div class="site">网站地图（<a href="sitemap.xml" target="_blank">xml</a> / <a href="sitemap.html" target="_blank">html</a>）</div>        
            <ul> 
            <li>  
            <a href="index.php" title="网站首页">网站首页</a> 
                                                 
             <a href="http://0001543.ks.panguweb.cn/about.php" title="关于我们">关于我们</a> 
                                                             
             <a href="http://0001543.ks.panguweb.cn/product.php" title="车辆展示">车辆展示</a> 
                                                             
             <a href="http://0001543.ks.panguweb.cn/news.php" title="新闻资讯">新闻资讯</a> 
                                                                                                                                                                                                  </li>
             <li>             
                                                                                                                               
             <a href="http://0001543.ks.panguweb.cn/case.php" title="主要车型">主要车型</a> 
                                                             
             <a href="http://0001543.ks.panguweb.cn/honor.php" title="资质荣誉">资质荣誉</a> 
                                                             
             <a href="http://0001543.ks.panguweb.cn/notice.php" title="租车须知">租车须知</a> 
                                                             
             <a href="http://0001543.ks.panguweb.cn/hr.php" title="人才招聘">人才招聘</a> 
                                                                                          </li>
            
             <li>  
                                                                                                                                                                                                                                       
             <a href="http://0001543.ks.panguweb.cn/book.php" title="在线留言">在线留言</a> 
                                                             
             <a href="http://0001543.ks.panguweb.cn/contact.php" title="联系我们">联系我们</a> 
                                      </li>
      
            </ul>
        </div>
        <div class="foot-tel"><p>热线电话<br /><label>+86-0000-96877</label></p><span>7x24小时全国客服热线，全年无休</span></div>
        <p class="foot-er"><img src="images/er.gif" alt="" width="123" height="121" /><br />扫一扫关注我们</p>
  </div>
  <div class="clear"></div>
  <div class="footlink">
    <b class="name">友情链接： </b>
    <div class="linka"> 
              <a href="http://www.baidu.com" target="_blank">百度</a>
         
    </div>
  </div>
    <div class="foot-con">
        <div class="foot-left">电话：+86-0000-96877     传真：+86-0000-96877     地址：     版权所有：这里是您的网站名称<br />
    技术支持：<a href="http://www.pangu.us" target="_blank" title="盘古网络－提供基于互联网的全套解决方案" >盘古网络</a><a href="http://ks.pangu.us" target="_blank" title="盘古建站－快速开展网络营销的利器">【盘古建站】</a>ICP备案编号：<a href="http://www.miitbeian.gov.cn/" title="备********号" target="_blank">备********号</a></div>
    <div class="newsshare"><div class="bdsharebuttonbox"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页" href="#"></a></div>
    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
</div>
</div>

    </body>
</html>


