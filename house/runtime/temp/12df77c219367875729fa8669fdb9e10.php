<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"D:\phpStudy\WWW\test\house\public/../application/index\view\user\collect.html";i:1516503760;s:68:"D:\phpStudy\WWW\test\house\application\index\view\public\header.html";i:1516498860;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>车辆展示_这里是您的网站名称</title>
<meta name="keywords" content="这里是您的网站名称" />
<meta name="description" content="这里是您的网站名称"/>

<meta name="Author" content="024" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<LINK href="/test/house/public/static/index/style/style.css" rel=stylesheet>
<LINK href="/test/house/public/static/index/style/meGrass.css" rel=stylesheet>
<LINK href="/test/house/public/static/index/style/bootstrap.css" rel=stylesheet>
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/jquery.js"></script>

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
			<div class="me-img"><img src="/test/house/public/uploads/<?php echo $user['img']; ?>" alt="" /></div>
			<div class="me-name">欢迎您.<?php if($user['name'] == ''): ?> <?php echo phone($user['phone']); else: ?>  <?php echo $user['name']; endif; ?></div>
			<div class="me-nav">
				<ul>
					<li><a href="<?php echo url('user/index'); ?>">首页</a></li>
					<li  class="active" ><a href="<?php echo url('user/collect'); ?>">关注房源</a></li>
					<li><a href="<?php echo url('user/subscribe'); ?>">预约清单</a></li>
					<li><a href="<?php echo url('user/broker'); ?>">我关注的经纪人</a></li>
					<li><a href="<?php echo url('user/entrust'); ?>">我的委托</a></li>
				</ul>
			</div>
					
		</div>
		<!-- 右边主题 -->
		<div class="me-content">
			<h2>共<span class="red"><?php echo $count; ?></span>套关注房源</h2>
			<div class="me-nav">
				<ul>
					<li class=" h1 active"><a href="#">二手房</a></li>
					<li class="h2"><a href="#">新房</a></li>
				</ul>
			</div>
			<div class="me-house seconds">
				<ul>
					<?php if(is_array($seconds) || $seconds instanceof \think\Collection || $seconds instanceof \think\Paginator): $i = 0; $__LIST__ = $seconds;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li>
						<a class="button_quxiaoguanzhu" href="<?php echo url('index/collect',['id'=>$vo['id'],'type'=>1]); ?>">取消关注</a >
						<div class="me-img"><a href="<?php echo url('second_house/main',['id'=>$vo['id']]); ?>"><img src="/test/house/public/uploads/<?php echo img($vo['id']); ?>" alt="" /></a></div>
						<div class="me-info">
							<h3><a href="<?php echo url('second_house/main',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a></h3>
							<p><?php echo estate_name($vo['estate_id']); ?> | <?php echo $vo['room']; ?>室<?php echo $vo['hall']; ?>厅<?php echo $vo['toilet']; ?>卫 | <?php echo floatval($vo['proportion']); ?>平米 | <?php echo orientation($vo['orientation']); ?> | <?php echo decorate($vo['decorate']); ?></p>
							 <p><?php echo floors($vo['floor'],$vo['all_floor']); ?> <?php echo $vo['activate_time']; ?>年建</p>
						</div>
						<div class="me-price">
							<p class="red"><span>308</span>万</p>
							<p class="smail">41073 元/m²</p>
						</div>
						<div class="clear"></div>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<?php echo $seconds->render(); ?>
				</ul>
			</div>
			<div class="me-house rents" style="display:none">
				<ul>
					<?php if(is_array($rents) || $rents instanceof \think\Collection || $rents instanceof \think\Paginator): $i = 0; $__LIST__ = $rents;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li>
						<a class="button_quxiaoguanzhu" href="<?php echo url('index/collect',['id'=>$vo['id'],'type'=>1]); ?>">取消关注</a >
						<div class="me-img"><a href="<?php echo url('second_house/main',['id'=>$vo['id']]); ?>"><img src="/test/house/public/uploads/<?php echo img($vo['id'],2); ?>" alt="" /></a></div>
						<div class="me-info">
							<h3><a href="<?php echo url('second_house/main',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a></h3>
							<p><?php echo estate_name($vo['estate_id']); ?> | <?php echo $vo['room']; ?>室<?php echo $vo['hall']; ?>厅<?php echo $vo['toilet']; ?>卫 | <?php echo floatval($vo['proportion']); ?>平米 | <?php echo orientation($vo['orientation']); ?> | <?php echo decorate($vo['decorate']); ?></p>
							 <p><?php echo floors($vo['floor'],$vo['all_floor']); ?></p>
						</div>
						<div class="me-price">
							<p class="red"><span>308</span>万</p>
							<p class="smail">41073 元/m²</p>
						</div>
						<div class="clear"></div>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<?php echo $rents->render(); ?>
				</ul>
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

