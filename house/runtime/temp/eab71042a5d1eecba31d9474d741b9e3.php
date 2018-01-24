<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"D:\phpStudy\WWW\test\house\public/../application/index\view\index\subscribe.html";i:1516504311;s:68:"D:\phpStudy\WWW\test\house\application\index\view\public\header.html";i:1516498860;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>车辆展示_这里是您的网站名称</title>
<meta name="keywords" content="这里是您的网站名称" />
<meta name="description" content="这里是您的网站名称"/>

<meta name="Author" content="024" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<script type="text/javascript" src="/test/house/public/static/index/style/urlredirect.js"></script>
<LINK href="/test/house/public/static/index/style/style.css" rel=stylesheet>
<LINK href="/test/house/public/static/index/style/jbox.css" rel=stylesheet>
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/functions.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/validForm/FormValid.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/jbox/jquery.jBox-2.3.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/search.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/menu.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/jQselect.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/slides.min.jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/jquery.touchSlider.js"></script>
<script type="text/javascript"><!--ibanner-->

$(document).ready(function () {
	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn()
		},function(){
		$("#btn_prev,#btn_next").fadeOut()
		})
	$dragBln = false;
	$(".main_image").touchSlider({
		flexible : true,
		speed : 200,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e) {
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	})
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	})
	$(".main_image a").click(function() {
		if($dragBln) {
			return false;
		}
	})
	timer = setInterval(function() { $("#btn_next").click();}, 5000);
	$(".main_visual").hover(function() {
		clearInterval(timer);
	}, function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
	$(".main_image").bind("touchstart", function() {
		clearInterval(timer);
	}).bind("touchend", function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
});
</script>
<script><!--pro-->
		$(function(){
			// Set starting slide to 1
			var startSlide = 1;
			// Get slide number if it exists
			if (window.location.hash) {
				startSlide = window.location.hash.replace('#','');
			}
			// Initialize Slides
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				generatePagination: true,
				play: 0,
				pause: 2500,
				hoverPause: true,
				// Get the starting slide
				start: startSlide,
				animationComplete: function(current){
					// Set the slide number as a hash
					//window.location.hash = '#' + current;
				}
			});
		});
</script>
<!--[if IE 6]><script type="text/javascript" src="js/DD_belatedPNG.js"></script><![endif]-->
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
<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.dropdown-content a').click(function(){
            var text=$(this).text();
            var val=$(this).attr('data-value');
            $(this).parent().prev().prev().text(text);
            $(this).parent().prev().val(val);
        })
        
    });


</script>
<!-- 主要信息 -->
<div class="main">
    <!-- 查询标题 -->
    <div class="main_nav">
       <span class="float_left">房源展示</span> 
       <span class="float_right">当前位置 <a href="#" title="首页">首页</a> > 预约房源   </span> 
       <div class="clear"></div>
    </div>
    <div class="main_content">
        <div class="main_left">
            <form action="index/subscribe" method="post">
            <ul>
                <li>
                    <span class="main_content_title">预约房源</span>
                    <span class="main_content_value">
                    <?php echo estate_name($house['estate_id']); ?> <?php echo $house['room']; ?>室<?php echo $house['hall']; ?>厅 <?php echo floatval($house['proportion']); ?>㎡   
                      <?php if($type==2): ?>
                      <?php echo floatval($house['price']); ?>元/月
                      <?php echo rent_type($house['rent_type']); elseif($type==1): ?>
                       <?php echo floatval($house['price']); ?>万元
                      <?php endif; ?>
                      <input type="hidden" name="house_type" value="<?php echo $type; ?>" />
                      <input type="hidden" name="house_id" value="<?php echo $house['id']; ?>" />
                      </span>
                </li>
                <li>
                    <span class="main_content_title">称呼</span>
                    <span class="main_content_value"><input type="text" name="name" id="" placeholder="名称" />
                    <select name="sex" >
                        <option value="1">先生</option>
                        <option value="2">女士</option>
                    </select>
                    </span>
                </li>
                <li>
                    <span class="main_content_title">带看时间说明</span>
                   <span class="main_content_value"><input type="text" name="desc"  placeholder="请备注带看时间" style="width:70%"/></span>
                </li>
                <li class="form-button"><button type="submit" >提交信息</button></li>
            </ul>
            </form>

        </div>
        <div class="main_right">
            <div class="main_right_nav">
                <p>预约带看的三种方式</p>
                <p></p>
            </div>
            <div class="main_right_content">
                <ul>
                    <li>1.预约带看,请把信息填写完整,会有经纪人跟您联系。</li>
                    <li>2.拨打经纪人电话。</li>
                    <li>3.用户可以直接搜索零五三九房地产门店,前往门店。</li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>
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


