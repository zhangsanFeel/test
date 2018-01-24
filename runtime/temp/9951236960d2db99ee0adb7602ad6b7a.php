<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"D:\phpStudy\WWW\test\public/../application/index\view\second_house\main.html";i:1516501308;s:62:"D:\phpStudy\WWW\test\application\index\view\public\header.html";i:1516498860;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>车辆展示_这里是您的网站名称</title>
<meta name="keywords" content="这里是您的网站名称" />
<meta name="description" content="这里是您的网站名称"/>

<meta name="Author" content="024" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<script type="text/javascript" src="/test/public/static/index/style/urlredirect.js"></script>
<LINK href="/test/public/static/index/style/style.css" rel=stylesheet>
<LINK href="/test/public/static/index/style/article.css" rel=stylesheet>
<LINK href="/test/public/static/index/style/bootstrap.css" rel=stylesheet>
<link rel="stylesheet" type="text/css" href="/test/public/static/index/css/magnifier.css">
<script language="JavaScript" type="text/javascript" src="/test/public/static/index/style/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/public/static/index/style/functions.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/public/static/index/style/validForm/FormValid.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/public/static/index/style/jbox/jquery.jBox-2.3.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/public/static/index/style/search.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/public/static/index/style/menu.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/public/static/index/style/jQselect.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/public/static/index/style/slides.min.jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/public/static/index/style/jquery.touchSlider.js"></script>
<script type="text/javascript">
//                            _ooOoo_
//                           o8888888o
//                           88" . "88
//                           (| -_- |)
//                            O\ = /O
//                        ____/`---'\____
//                      .   ' \\| |// `.
//                       / \\||| : |||// \
//                     / _||||| -:- |||||- \
//                       | | \\\ - /// | |
//                     | \_| ''\---/'' | |
//                      \ .-\__ `-` ___/-. /
//                   ___`. .' /--.--\ `. . __
//                ."" '< `.___\_<|>_/___.' >'"".
//               | | : `- \`.;`\ _ /`;.`/ - ` : | |
//                 \ \ `-. \_ __\ /__ _/ .-` / /
//         ======`-.____`-.___\_____/___.-`____.-'======
//                            `=---='
//
//         .............................................
//                  佛祖镇楼                  BUG辟易
//          佛曰:
//                  写字楼里写字间，写字间里程序员；
//                  程序人员写程序，又拿程序换酒钱。
//                  酒醒只在网上坐，酒醉还来网下眠；
//                  酒醉酒醒日复日，网上网下年复年。
//                  但愿老死电脑间，不愿鞠躬老板前；
//                  奔驰宝马贵者趣，公交自行程序员。
//                  别人笑我忒疯癫，我笑自己命太贱；
//                  不见满街漂亮妹，哪个归得程序员？
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

         $('.collect').mouseover(function(){
            var text=$(this).text('取消收藏');
        })
         $('.collect').mouseout(function(){
            var text=$(this).text('已收藏');
        })

        
    });


</script>
<!-- 表单头部 -->
<div class="page-header">
<div class="main">
    <div class="main-nav">
        <div><img src="/test/public/static/index/images/logo.png" alt="" /></div>
        <div class="main-input"><input type="text" name="" placeholder="  请输入区域,小区名开始找房" id="" /><button type="submit">&nbsp;</button></div>
      
    </div>

</div>

</div>
<!-- 搜索框 -->
        <!-- 导航栏 -->
 <div class="article-shupiao">
    <?php echo estate($second['estate_id'],2); ?> 
  </div>
  <div class="article-content">

  <div class="article-info">
        <h1><?php echo $second['title']; ?></h1>

        <div class="article-style">
          <?php if($collect): ?>
            <a href="<?php echo url('index/collect',['id'=>$second['id'],'type'=>1]); ?>" class="article-collect collect">已收藏</a>
          <?php else: ?>
            <a href="<?php echo url('index/collect',['id'=>$second['id'],'type'=>1]); ?>" class="article-collect">收藏房源</a>
          <?php endif; if($look): ?>
               <a href="<?php echo url('index/subscribe',['id'=>$second['id'],'type'=>1]); ?>" class="article-subscribe">已预约带看</a>
          <?php else: ?>
             <a href="<?php echo url('index/subscribe',['id'=>$second['id'],'type'=>1]); ?>" class="article-subscribe">预约带看</a>
          <?php endif; ?>
         
        </div>



      <div class="article-left">
                       
            <!-- 轮播图放大镜 -->

            <div class="magnifier" id="magnifier1">
                        <div class="magnifier-container">
                          <div class="images-cover"></div>
                          <!--当前图片显示容器-->
                          <div class="move-view"></div>
                          <!--跟随鼠标移动的盒子-->
                        </div>
                        <div class="magnifier-assembly">
                          <div class="magnifier-btn">
                            <span class="magnifier-btn-left">&lt;</span>
                            <span class="magnifier-btn-right">&gt;</span>
                          </div>
                          <!--按钮组-->
                          <div class="magnifier-line">
                            <ul class="clearfix animation03">
                              <?php if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): $i = 0; $__LIST__ = $images;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                              <li>
                                <div class="small-img">
                                  <img src="/test/public/uploads/<?php echo $vo['path']; ?>" />
                                </div>
                              </li>
                              <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                          </div>
                          <!--缩略图-->
                        </div>
                        <div class="magnifier-view"></div>
                        <!--经过放大的图片显示容器-->
                      </div>


          <!-- 结束 -->

                </div>
                <div class="article-right">
                  <div class="article-price"><span><?php echo floatval($second['price']); ?></span>万&nbsp;&nbsp;&nbsp;&nbsp;<?php echo price($second['price'],$second['proportion']); ?> 元/平 </div>
                  <ul>
                      <li>
                        <span class="article-key">面积:</span>
                        <span class="article-value"><?php echo floatval($second['proportion']); ?>平米</span>
                      </li>
                       <li>
                        <span class="article-key">房屋户型:</span>
                        <span class="article-value"><?php echo $second['room']; ?>室<?php echo $second['hall']; ?>厅<?php echo $second['toilet']; ?>卫</span>
                      </li>
                       <li>
                        <span class="article-key">楼层:</span>
                        <span class="article-value"><?php echo floors($second['floor'],$second['all_floor']); ?></span>
                      </li>
                       <li>
                        <span class="article-key">朝向:</span>
                        <span class="article-value"><?php echo orientation($second['orientation']); ?></span>
                      </li>
                      <li>
                        <span class="article-key">装修情况:</span>
                        <span class="article-value"><?php echo decorate($second['decorate']); ?></span>
                      </li>
                       <li>
                        <span class="article-key">房屋类型:</span>
                        <span class="article-value"><?php echo purpose($second['purpose']); ?></span>
                      </li>
                  </ul>
                <div class="clear"></div>
                  <div class="article-address">
                      <span class="article-key">小区:</span>
                      <span class="article-value"><?php echo estate($second['estate_id']); ?></span>
                  </div>
                  <div class="article-time">
                      <span class="article-key">发布时间:</span>
                      <span class="article-value"><?php echo create_time($second['create_time']); ?></span>
                  </div>
                  <hr />
                  <div class="user-info">
                      <a href="<?php echo url('broker/user',['id'=>$broker['id']]); ?>" class="user-img">
                          <img src="/test/public/uploads/<?php echo $broker['broker_img']; ?>" alt="" />
                      </a>
                      <div class="user-text">
                          <p><a href="<?php echo url('broker/user',['id'=>$broker['id']]); ?>" class="user-name"><?php echo $broker['username']; ?></a><span class="user-identity">经纪人</span></p>
                          <p><span class="user-grade">评分:5.0/4人评分</span> <span class="user-look">本房带看:5次</span></p>
                          <p class="user-tel">电话:<?php echo $broker['phone']; ?></p>
                      </div>
                      <div class="clear"></div>
                  </div>
                </div>

                <div class="clear"></div>

  </div>

      <div class="article-basicinfo">
          <h1>基本信息</h1>
          <div class="article-basic">
              <div class="article-title">
                  基本信息
              </div>
              <div class="article-content">
                  <ul>
                      <li>
                          <span class="article-key">房屋户型</span>
                          <span class="article-value"><?php echo $second['room']; ?>室<?php echo $second['hall']; ?>厅<?php echo $second['toilet']; ?>卫</span>
                      </li>
                       <li>
                          <span class="article-key">所在楼层</span>
                          <span class="article-value"><?php echo floors($second['floor'],$second['all_floor']); ?></span>
                      </li>
                       <li>
                          <span class="article-key">建筑面积</span>
                          <span class="article-value"><?php echo floatval($second['proportion']); ?>㎡</span>
                      </li>
                       <li>
                          <span class="article-key">房屋朝向</span>
                          <span class="article-value"><?php echo orientation($second['orientation']); ?></span>
                      </li>
                       <li>
                          <span class="article-key">装修情况</span>
                          <span class="article-value"><?php echo decorate($second['decorate']); ?></span>
                      </li>
                      <li>
                          <span class="article-key">配套设备</span>
                          <span class="article-value"><?php echo lifts($second['lift']); ?></span>
                      </li>
                      <li>
                          <span class="article-key">产权年限</span>
                          <span class="article-value"><?php echo prop_age($second['prop_age']); ?></span>
                      </li>
                      <li>
                          <span class="article-key">房屋类型</span>
                          <span class="article-value"><?php echo purpose($second['purpose']); ?></span>
                      </li>
                      <li>
                          <span class="article-key">房屋年限</span>
                          <span class="article-value"><?php echo certificate($second['certificate']); ?></span>
                      </li>
                  </ul>
                  <div class="clear"></div>
              </div>
              <div class="clear"></div>
          </div>
      </div>


      <div class="article-feature">
          <h1>房源特色</h1>
          <div class="article-basic">
              <div class="article-content">
                  <ul>
                      <li>
                          <span class="article-trait">房源标签</span>
                          <span class="article-to"><span class="tag-blue">地铁</span><span class="tag-fense">房源满5年</span></span>
                      </li>
                      <li>
                          <span class="article-trait">核心卖点</span>
                          <span class="article-to"><?php echo $second['selling_points']; ?></span>
                      </li>
                       <li>
                          <span class="article-trait">户型介绍</span>
                          <span class="article-to"><?php echo $second['house_type']; ?></span>
                      </li>
                       <li>
                          <span class="article-trait">业主心态</span>
                          <span class="article-to">安贞南北通透、全明两居中间楼层，满五年唯一</span>
                      </li>
                      <li>
                          <span class="article-trait">小区介绍</span>
                          <span class="article-to"><?php echo $second['estate_desc']; ?></span>
                      </li>
                      <li>
                          <span class="article-trait">周边配套</span>
                          <span class="article-to">安贞南北通透、全明两啊居中间楼层，满五年唯一</span>
                      </li>
                  </ul>
                  <div class="clear"></div>
              </div>
              <div class="clear"></div>
          </div>
      </div>
      <!-- 房源推荐 -->
      <div class="article-img">
          <h1>房源照片</h1>
          <div class="article-basic">
              <div class="article-content">
                  <ul>
                      <?php if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): $i = 0; $__LIST__ = $images;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                              <li>
                                  <img src="/test/public/uploads/<?php echo $vo['path']; ?>" />
                              </li>
                       <?php endforeach; endif; else: echo "" ;endif; ?>

                  </ul>
                  <div class="clear"></div>
              </div>
              <div class="clear"></div>
          </div>
      </div>

      <div class="article-good-house">
          <h1>好房为您推荐</h1>
          <div class="article-basic">
              <div class="article-content">
                  <ul>
                      <li>
                            <a href="#">
                            <img src="/test/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                            <div class="sidebar-user">
                                <span class="sidebar-price">350万---3500元/㎡</span>       
                            </div>
                            </a>
                          <div class="sidebar-content">
                              <p>兰山区/沂龙湾/青年湖南里</p>
                              <p>2室2厅1卫/59.5平</p>
                          </div>
                      </li>
                      <li>
                            <a href="#">
                            <img src="/test/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                            <div class="sidebar-user">
                                <span class="sidebar-price">350万---3500元/㎡</span>       
                            </div>
                            </a>
                          <div class="sidebar-content">
                              <p>兰山区/沂龙湾/青年湖南里</p>
                              <p>2室2厅1卫/59.5平</p>
                          </div>
                      </li>
                      <li>
                            <a href="#">
                            <img src="/test/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                            <div class="sidebar-user">
                                <span class="sidebar-price">350万---3500元/㎡</span>       
                            </div>
                            </a>
                          <div class="sidebar-content">
                              <p>兰山区/沂龙湾/青年湖南里</p>
                              <p>2室2厅1卫/59.5平</p>
                          </div>
                      </li>
                      <li>
                            <a href="#">
                            <img src="/test/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                            <div class="sidebar-user">
                                <span class="sidebar-price">350万---3500元/㎡</span>       
                            </div>
                            </a>
                          <div class="sidebar-content">
                              <p>兰山区/沂龙湾/青年湖南里</p>
                              <p>2室2厅1卫/59.5平</p>
                          </div>
                      </li>
                      <li>
                            <a href="#">
                            <img src="/test/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                            <div class="sidebar-user">
                                <span class="sidebar-price">350万---3500元/㎡</span>       
                            </div>
                            </a>
                          <div class="sidebar-content">
                              <p>兰山区/沂龙湾/青年湖南里</p>
                              <p>2室2厅1卫/59.5平</p>
                          </div>
                      </li>
                      <li>
                            <a href="#">
                            <img src="/test/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                            <div class="sidebar-user">
                                <span class="sidebar-price">350万---3500元/㎡</span>       
                            </div>
                            </a>
                          <div class="sidebar-content">
                              <p>兰山区/沂龙湾/青年湖南里</p>
                              <p>2室2厅1卫/59.5平</p>
                          </div>
                      </li>
                      <li>
                            <a href="#">
                            <img src="/test/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                            <div class="sidebar-user">
                                <span class="sidebar-price">350万---3500元/㎡</span>       
                            </div>
                            </a>
                          <div class="sidebar-content">
                              <p>兰山区/沂龙湾/青年湖南里</p>
                              <p>2室2厅1卫/59.5平</p>
                          </div>
                      </li>
                      <li>
                            <a href="#">
                            <img src="/test/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                            <div class="sidebar-user">
                                <span class="sidebar-price">350万---3500元/㎡</span>       
                            </div>
                            </a>
                          <div class="sidebar-content">
                              <p>兰山区/沂龙湾/青年湖南里</p>
                              <p>2室2厅1卫/59.5平</p>
                          </div>
                      </li>
                  </ul>
                  <div class="clear"></div>
              </div>
              <div class="clear"></div>
          </div>
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

<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/test/public/static/index/js/magnifier.js"></script>
<script type="text/javascript">
$(function() {
  
  var magnifierConfig = {
    magnifier : "#magnifier1",//最外层的大容器
    width : 500,//承载容器宽
    height : 500,//承载容器高
    moveWidth : null,//如果设置了移动盒子的宽度，则不计算缩放比例
    zoom : 5//缩放比例
  };

  var _magnifier = magnifier(magnifierConfig);

  /*magnifier的内置函数调用*/
  /*
    //设置magnifier函数的index属性
    _magnifier.setIndex(1);

    //重新载入主图,根据magnifier函数的index属性
    _magnifier.eqImg();
  */
});
</script>



    </body>
</html>


