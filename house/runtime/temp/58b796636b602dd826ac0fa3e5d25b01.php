<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"D:\phpStudy\WWW\test\house\public/../application/index\view\index\index.html";i:1516755973;s:68:"D:\phpStudy\WWW\test\house\application\index\view\public\header.html";i:1516498860;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>这里是您的网站名称_这里是您的网站名称</title>
<meta name="keywords" content="这里是您的网站名称" />
<meta name="description" content="这里是您的网站名称"/>

<meta name="Author" content="024" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />


<LINK href="/test/house/public/static/index/style/style.css" rel=stylesheet>
<LINK href="/test/house/public/static/index/style/jbox.css" rel=stylesheet>
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/functions.js"></script>
<script type="text/javascript" src="/test/house/public/static/index/style/urlredirect.js"></script>
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
<div class="fixed"> <a href="book.php" title="留言" class="barbook"></a> <a href="javascript:;" title="二维码" class="codepic"></a> <a href="javascript:;" title="返回顶部" class="backup"></a>
  <div> <img src="http://0001543.ks.panguweb.cn/upfile/qr/qrcode.png" alt="这里是您的网站名称" class="code" /> </div>
</div>
<div class="head">
  <div class="headtop">
      <div class="fra1">
          <a href="index.php" title="这里是您的网站名称"><img src="images/logo.png" alt="这里是您的网站名称" /></a>
            <div class="head-right">
            <span><font>租车<br />热线 </font><label>+86-0000-96877</label></span>
            <div class="search">
               <form id="search" name="search" method="get" action="http://0001543.ks.panguweb.cn/search.php">
               
                <input type="text" class="text pngFix" name="kws" id="kws" value="请输入搜索关键词"/>
                <div class="select pngFix">
                 <select id="rid" style="display: none" name="rid">
                                         <option value="1" selected="selected">二手房</option>
                                         <option value="2" >新房</option>
                                         <option value="4" >租房</option>
                                     </select>
                </div>
                <input type="submit" title="搜索" class="button" value=""/>
            </form>
            <script type=text/javascript>
                jQuery(document).ready(function() {
                    jQuery("#rid").selectbox();
                });
            </script> 
            </div>
            </div>
        </div>
    </div>
  




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
<div class="banner">
  <div class="main_visual">
    

    <div class="main_image">
    
       <ul>

            <li><span class="img_3" style="background:url(/test/house/public/static/index/images/247fb56705ebd2b956a87328e14825a4.jpg) no-repeat top;"></span></li>  
        </ul>

      </div>
  </div>
</div>
<div class="clear"></div>

<div class="case">
	<div class="fra1">
   	  <div class="caseleft">
       	<p class="name"><b>精品房源</b><span>main models</span></p>
            <div class="casel-in">0539房产网,专业经理人,经过严格筛选精选房源</div>
          <a class="case-more" title="查看更多" href="case.php">查看更多</a>
      </div>
      <div class="caseright">
      		<div class="noticecon"><b>最新公告：</b>
              <marquee scrollamount="2" scrolldelay="5" onMouseOut="this.start()" onMouseOver="this.stop()">
              诚信为本：市场在变，诚信永远不变...              </marquee>
            </div>
                        <ul class="caseul">
                        	<li>
                	<a href="http://0001543.ks.panguweb.cn/case_view.php?id=49" title="青年湖公园 东南两居室 带正规客厅">
                	<img src="/test/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="青年湖公园 东南两居室 带正规客厅" width="215" height="161" />
                    <span>青年湖公园 东南两居室 带正规客厅</span>
                    <p>价格：530万</p>
                	</a>
                </li>
                            	<li>
                	<a href="http://0001543.ks.panguweb.cn/case_view.php?id=48" title="武圣西里 2室1厅 335万">
                	<img src="/test/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="武圣西里 2室1厅 335万" width="215" height="161" />
                    <span>武圣西里 2室1厅 335万</span>
                    <p>价格：150万</p>
                	</a>
                </li>
                            	<li>
                	<a href="http://0001543.ks.panguweb.cn/case_view.php?id=47" title="正规三居室 对小区花园 交通便利">
                	<img src="/test/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="正规三居室 对小区花园 交通便利" width="215" height="161" />
                    <span>正规三居室 对小区花园 交通便利</span>
                    <p>价格：130万</p>
                	</a>
                </li>
                            </ul>
                  </div>
    </div>
</div>
<div class="clear"></div>
<div class="product">
	<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.zoombut').lightBox();
    });
</script>
	<div class="fra1">
    	<p class="pro-name"><b>房源展示</b><span>House Show</span></p>
        <div id="container">
      <div id="example">
        <div id="slides">
          <div class="slides_container" >


                <div class="slide">            
               	<ul class="product-ul">
            	                     <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=13" title="万成花开3室2厅1卫">
                        	<p class="casetitle" ><span title="万成花开3室2厅1卫" href="/test/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" class="zoombut"></span><span class="jianjie">万成花开3室2厅1卫</span> </p> 
                            <img src="/test/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" width="245" height="184" alt="万成花开3室2厅1卫" />
                            <p class="wor"><span>万成花开3室2厅1卫</span><label>价格：130万</label></p>
                        </a>
                     </li> 
                                          <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=10" title="展示标题">
                        	<p class="casetitle" ><span title="展示标题" href="/test/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" class="zoombut"></span><span class="jianjie">展示标题</span> </p> 
                            <img src="/test/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" width="245" height="184" alt="展示标题" />
                            <p class="wor"><span>展示标题</span><label>售价: 价格</label></p>
                        </a>
                     </li> 
                                          <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=9" title="展示标题">
                        	<p class="casetitle" ><span title="展示标题" href="/test/house/public/static/index/images/20150810101641-64434476010501384.jpg" class="zoombut"></span><span class="jianjie">展示标题</span> </p> 
                            <img src="/test/house/public/static/index/images/20150810101641-64434476010501384.jpg" width="245" height="184" alt="展示标题" />
                            <p class="wor"><span>展示标题</span><label>售价: 价格</label></p>
                        </a>
                     </li> 
                                          <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=8" title="展示标题">
                        	<p class="casetitle" ><span title="展示标题" href="/test/house/public/static/index/images/20150810101649-98561866441741584.jpg" class="zoombut"></span><span class="jianjie">展示标题</span> </p> 
                            <img src="/test/house/public/static/index/images/20150810101649-98561866441741584.jpg" width="245" height="184" alt="展示标题" />
                            <p class="wor"><span>展示标题</span><label>售价: 价格</label></p>
                        </a>
                     </li> 
                               
            	</ul>
              
            </div>



               <div class="slide">            
               	<ul class="product-ul">
            	                     <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=7" title="展示标题">
                        	<p class="casetitle" ><span title="展示标题" href="/test/house/public/static/index/images/20150804142600-629205096.jpg" class="zoombut"></span><span class="jianjie">展示标题</span> </p> 
                            <img src="/test/house/public/static/index/images/20150804142600-629205096.jpg" width="245" height="184" alt="展示标题" />
                            <p class="wor"><span>展示标题</span><label>售价: 价格</label></p>
                        </a>
                     </li> 
                                          <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=6" title="展示标题">
                        	<p class="casetitle" ><span title="展示标题" href="/test/house/public/static/index/images/20150804142607-500806644.jpg" class="zoombut"></span><span class="jianjie">展示标题</span> </p> 
                            <img src="/test/house/public/static/index/images/20150804142607-500806644.jpg" width="245" height="184" alt="展示标题" />
                            <p class="wor"><span>展示标题</span><label>售价: 价格</label></p>
                        </a>
                     </li> 
                                          <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=5" title="展示标题">
                        	<p class="casetitle" ><span title="展示标题" href="/test/house/public/static/index/images/20150804142611-1195336428.jpg" class="zoombut"></span><span class="jianjie">展示标题</span> </p> 
                            <img src="/test/house/public/static/index/images/20150804142611-1195336428.jpg" width="245" height="184" alt="展示标题" />
                            <p class="wor"><span>展示标题</span><label>售价: 价格</label></p>
                        </a>
                     </li> 
                                          <li>
                        <a href="http://0001543.ks.panguweb.cn/product_view.php?id=4" title="展示标题">
                        	<p class="casetitle" ><span title="展示标题" href="/test/house/public/static/index/images/20150804142615-1490638500.jpg" class="zoombut"></span><span class="jianjie">展示标题</span> </p> 
                            <img src="/test/house/public/static/index/images/20150804142615-1490638500.jpg" width="245" height="184" alt="展示标题" />
                            <p class="wor"><span>展示标题</span><label>售价: 价格</label></p>
                        </a>
                     </li> 
                               
            	</ul>
              
            </div>
                    




                                    </div>
          <a href="#" class="prev" title="prev">&nbsp;&nbsp;</a><a href="" class="next" title="next">&nbsp;</a> </div>
      </div>
    </div>
    <div class="clear"></div>
    <a class="pro-more" href="product.php" title="查看更多">查看更多</a>
    </div>
</div>
<div class="clear"></div>
<div class="news">
	<div class="fra">
    	<div class="about-left">
        	<p class="ab-name"><span>a b o u t&nbsp;&nbsp; u s</span><b>关于我们</b></p> 
            <p class="ab-con">　　临沂0539房产网，一流的百度产品推广服务运营商，致力于在互联网时代帮助中国企业进行营销方式的革命，并使他们在这场营销变革中抢占先机。　<br />
　　盘古网络成立于2003年，现有员工2000多人，下设20多家子公司，业务覆盖河北、辽宁、吉林三省，提供域名注册、虚拟主机、企业邮局、网站建设 ...</p>
			<a class="ab-more" href="about.php" title="查看更多">查看更多</a>
        </div>
        <div class="news-right">
        	<p class="news-name"><span>n e w s</span><b>新闻资讯</b></p> 
                         <ul class="news-ul">
                        	<li>
                	<span class="num">01</span>
                    <a href="http://0001543.ks.panguweb.cn/news_view.php?id=65" title="2013年沈阳盘古妇女节活动报道">
                    	<p>2013年沈阳盘古妇女节活动报道</p>
                        <span>2015/08/04</span>
                    </a>
                </li>
                            	<li>
                	<span class="num">02</span>
                    <a href="http://0001543.ks.panguweb.cn/news_view.php?id=29" title="盘古首张增值税发票">
                    	<p>盘古首张增值税发票</p>
                        <span>2015/05/22</span>
                    </a>
                </li>
                            	<li>
                	<span class="num">03</span>
                    <a href="http://0001543.ks.panguweb.cn/news_view.php?id=28" title="2013年沈阳盘古妇女节活动报道">
                    	<p>2013年沈阳盘古妇女节活动报道</p>
                        <span>2015/05/22</span>
                    </a>
                </li>
                            </ul>
                         <a class="news-more" href="news.php" title="查看更多">查看更多</a>
        </div>
    </div>
</div>
<div class="z-notice">
	<a href="notice.php" title="购房须知">购房须知</a>
	<img src="/test/house/public/static/index/images/20150804152838-947160084.jpg" alt="租车" width="1000" height="250" />
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

