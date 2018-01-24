<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\phpStudy\WWW\test\house\public/../application/index\view\broker\second.html";i:1516328231;s:68:"D:\phpStudy\WWW\test\house\application\index\view\public\header.html";i:1516498860;s:68:"D:\phpStudy\WWW\test\house\application\index\view\public\broker.html";i:1516760263;}*/ ?>
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
<LINK href="/test/house/public/static/index/style/broker_show.css" rel=stylesheet>
<LINK href="/test/house/public/static/index/style/bootstrap.css" rel=stylesheet>
<link rel="stylesheet" href="/test/house/public/static/index/css/jquery.lineProgressbar.css">
<link rel="stylesheet" href="/test/house/public/static/index/css/bootstrap.min.css">
<script language="JavaScript" type="text/javascript" src="/test/house/public/static/index/style/jquery.js"></script>

<!--[if IE 6]><script type="text/javascript" src="js/DD_belatedPNG.js"></script><![endif]-->

<script>
    $(function(){
        $('#make-table').click(function(){
                $(this).addClass('active');
                $('#look-table').removeClass('active');
                $("[data-href='look-table']").css('display','none');
                $("[data-href='make-table']").css('display','');
        })

         $('#look-table').click(function(){
                $(this).addClass('active');
                $('#make-table').removeClass('active');
                $("[data-href='make-table']").css('display','none');
                $("[data-href='look-table']").css('display','');
                
        })


         $('#make-ul').click(function(){
                $(this).addClass('active');
                $('#look-ul').removeClass('active');
                $("[data-href='look-ul']").css('display','none');
                $("[data-href='make-ul']").css('display','');
        })

         $('#look-ul').click(function(){
                $(this).addClass('active');
                $('#make-ul').removeClass('active');
                $("[data-href='look-ul']").css('display','');
                $("[data-href='make-ul']").css('display','none');
                
        })


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
<div class="broker-main">
  <div class="broker-content">
      <!-- 薯条 -->
      <div class="broker-coke">
         <a href="#">链家网北京站</a> > 北京房屋经纪人 > 丰台房产经纪人 > 赵公口房产经纪人
      </div>
      <div class="broker-left">
          <!-- 经纪人详细信息 -->
          <div class="borkers">
            <div class="broker-user">
                <ul>
                  <li  class="broker-img">
                      <img src="/test/house/public/uploads/<?php echo $broker['broker_img']; ?>" alt="" />
                  </li>
                   <li  class="broker-info">
                      <h3><?php echo $broker['username']; ?><span class="grade"><?php echo position($broker['position']); ?></span></h3>
                      <p>所属门店:<?php echo location_name($broker['location_id']); ?></p>
                      <p>联系电话:<?php echo $broker['phone']; ?></p>
                  </li>
                   <li  class="graded">
                      综合评分 : 1
                  </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="user-info">
                <p><span class="f-bold">时间:</span><?php echo entry_time($broker['entry_time']); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="f-bold">个人成绩:</span>历史成交76套，最近30天带看房<?php echo $yeasDay; ?>套</p>
                <p><span class="f-bold">主营版块:</span><?php echo emphasisCity($broker['city_id']); ?>  </p>
                <p><span class="f-bold">重点小区:</span><?php echo emphasisEstate($broker['estate']); ?></p>
            </div>
          </div>
         <!-- 下面超多的东西 -->
             <div class="broker-generalize">
                  <!-- 个人用户的导航 -->
                  <div class="broker-nav">
                      <ul>
                        <li ><a href="<?php echo url('broker/user',['id'=>$id]); ?>" >概括</a></li>
                        <li class="artivle"><a href="<?php echo url('broker/second',['id'=>$id]); ?>" >二手房源</a></li>
                        <li><a href="<?php echo url('broker/rent',['id'=>$id]); ?>" >租房房源</a></li>
                      </ul>
                  </div>

                   

                    <!-- 最近成交房源 -->
                    <div class="recently-make">
                        <div class="recently">
                            <div class="forms">
                                <form action="" method="post"> 
                                    <input type="text"  placeholder="输入小区名进行查询"  name="serach"/>
                                    <button type="submit"/>提交</button>
                                </form>
                            </div>
                            <ul>

                                <?php if(is_array($second) || $second instanceof \think\Collection || $second instanceof \think\Paginator): $i = 0; $__LIST__ = $second;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <li>
                                    <div class="recently-img"><a href="<?php echo url('second_house/main',['id'=>$vo['id']]); ?>" target="_blank"><img src="/test/house/public/uploads/<?php echo img($vo['id']); ?>" alt="" /></a></div>
                                    <div class="recently-info">
                                        <h3><a href="<?php echo url('second_house/main',['id'=>$vo['id']]); ?>" target="_blank"><?php echo $vo['name']; ?> <?php echo $vo['room']; ?>室<?php echo $vo['hall']; ?>厅 <?php echo floatval($vo['proportion']); ?>㎡</a></h3>
                                        <p><?php echo orientation($vo['orientation']); ?> /<?php echo floors($vo['floor'],$vo['all_floor']); ?>/ <?php echo $vo['activate_time']; ?>年建设</p>
                                        <p><?php echo $vo['label']; ?></p>
                                        <p class="red">发布时间：<?php echo date("Y-m-d",$vo['create_time']); ?></p>
                                    </div>
                                    <div class="recently-price">
                                        <p>单价 <span class="red"><?php echo price($vo['price'],$vo['proportion']); ?></span> 元/平</p>
                                        <p>总价 <span class="red"><?php echo floatval($vo['price']); ?>万</span></p>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
                            </ul>
                             <div><?php echo $second->render(); ?></div>
                        </div>
                    </div>
          </div>


      </div>
      <div class="broker-right">
            <!-- 形成安排 -->
            <div class="authentication ">
                <h4>服务行程</h4>
                <div class="authentication-look">
                    <p><span class="bold-1">[最新带看]</span>2018-01-06</p>
                    <p>带看客户看房<a href="#">北苑家园望春园 2室1厅 99.02平 540万 </a>等3套</p>
                </div>
                
                <div class="authentication-look">
                    <p><span class="bold-1">[最新带看]</span>2018-01-06</p>
                    <p>带看客户看房<a href="#">北苑家园望春园 2室1厅 99.02平 540万 </a>等3套</p>
                </div>
                <div class="authentication-look">
                    <p><span class="bold-1">[最新带看]</span>2018-01-06</p>
                    <p>带看客户看房<a href="#">北苑家园望春园 2室1厅 99.02平 540万 </a>等3套</p>
                </div>
                <div class="authentication-look">
                    <p><span class="bold-1">[最新带看]</span>2018-01-06</p>
                    <p>带看客户看房<a href="#">北苑家园望春园 2室1厅 99.02平 540万 </a>等3套</p>
                </div>
                <div class="authentication-look">
                    <p><span class="bold-1">[最新带看]</span>2018-01-06</p>
                    <p>带看客户看房<a href="#">北苑家园望春园 2室1厅 99.02平 540万 </a>等3套</p>
                </div>
                <div class="authentication-look">
                    <p><span class="bold-1">[最新带看]</span>2018-01-06</p>
                    <p>带看客户看房<a href="#">北苑家园望春园 2室1厅 99.02平 540万 </a>等3套</p>
                </div>
            </div>
      </div>
      <div class="clear"></div>
    
  </div>
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
                                                             已升级到最新版本
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

<script src="js/jquery.lineProgressbar.js"></script> 
<script type="text/javascript">
    $(function(){
      $('#progressbar2').LineProgressbar({
        percentage: 1,
        fillBackgroundColor: '#1abc9c'
      });
    })
  </script>

    </body>
</html>


