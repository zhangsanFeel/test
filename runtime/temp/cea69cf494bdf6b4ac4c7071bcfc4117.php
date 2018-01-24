<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"D:\phpStudy\WWW\test\public/../application/index\view\second_house\index.html";i:1516324683;s:62:"D:\phpStudy\WWW\test\application\index\view\public\header.html";i:1516498860;s:62:"D:\phpStudy\WWW\test\application\index\view\public\search.html";i:1516331722;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>车辆展示_这里是您的网站名称</title>
<meta name="keywords" content="这里是您的网站名称" />
<meta name="description" content="这里是您的网站名称"/>

<meta name="Author" content="024" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<LINK href="/house/public/static/index/style/style.css" rel=stylesheet>
<LINK href="/house/public/static/index/style/page.css" rel=stylesheet>
<LINK href="/house/public/static/index/style/bootstrap.css" rel=stylesheet>
<script language="JavaScript" type="text/javascript" src="/house/public/static/index/style/jquery.js"></script>
<script>
function Filter(field,value){  
        
        var name="#"+field;
        $(name).val(value);
        $("#filterForm").submit();
} 
/*
$(function(){
  $('#filterForm input').each(function(){
      var id=$(this).val();
      if(id==''){
          $(this).remove();
      }
  })
})*/
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
<!-- 表单头部 -->
<div class="page-header">
<div class="main">
    <div class="main-nav">
        <div><img src="images/logo.png" alt="" /></div>
        <div class="main-input"><input type="text" name="" placeholder="  请输入区域,小区名开始找房" id="" /><button type="submit">&nbsp;</button></div>

    </div>

</div>

</div>
<!-- 搜索框 -->
  <div class="contents">



      

  <div class="content-search">

            <form id="filterForm" action="" method="get">
                <input to="filter" type="hidden" id="city_id" name="city_id" value="<?php echo $fitervalue['city_id']; ?>" />  
                <input to="filter" type="hidden" id="price" name="price" value="<?php echo $fitervalue['price']; ?>" />  
                <input to="filter" type="hidden" id="proportion" name="proportion" value="<?php echo $fitervalue['proportion']; ?>" />  
                <input to="filter" type="hidden" id="room" name="room" value="<?php echo $fitervalue['room']; ?>" />  
                <input to="filter" type="hidden" id="orientation" name="orientation" value="<?php echo $fitervalue['orientation']; ?>" />  
                <input to="filter" type="hidden" id="purpose" name="purpose" value="<?php echo $fitervalue['purpose']; ?>" />  
                <input to="filter" type="hidden" id="decorate" name="decorate" value="<?php echo $fitervalue['decorate']; ?>" />  
                <input to="filter" type="hidden" id="prop_type" name="prop_type" value="<?php echo $fitervalue['prop_type']; ?>" /> 
            </form> 

            <p><span class="content-title">位置:</span>
            <span class="content-main">
              <a href="javascript:Filter('city_id','');"  <?php if($fitervalue['city_id'] == ''): ?> class="activate" <?php endif; ?>>不限</a>
              <?php if(is_array($regions) || $regions instanceof \think\Collection || $regions instanceof \think\Paginator): $i = 0; $__LIST__ = $regions;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="javascript:Filter('city_id','<?php echo $vo['id']; ?>');" <?php if($vo['id'] == $cityPrant_id): ?> class="activate" <?php endif; ?> ><?php echo $vo['name']; ?></a>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </span>
            </p>
            <p><span class="content-title">商圈:</span>
            <span class="content-main">
                <?php if(is_array($business) || $business instanceof \think\Collection || $business instanceof \think\Paginator): $i = 0; $__LIST__ = $business;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>  
                  <a href="javascript:Filter('city_id','<?php echo $vo['id']; ?>');" <?php if($fitervalue['city_id'] == $vo['id']): ?> class="activate" <?php endif; ?> ><?php echo $vo['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </span>
            </p>
            <p><span class="content-title">价格:</span>
            <span class="content-main">
              <a href="javascript:Filter('price','');" } <?php if($fitervalue['price'] == ''): ?> class="activate" <?php endif; ?>>不限</a>
              <a href="javascript:Filter('price','40');"  <?php if($fitervalue['price'] == '40'): ?> class="activate" <?php endif; ?>>40万以下</a>
              <a href="javascript:Filter('price','40-60' );"  <?php if($fitervalue['price'] == '40-60'): ?> class="activate" <?php endif; ?> >40-60万</a>
              <a href="javascript:Filter('price','60-80' );"<?php if($fitervalue['price'] ==  '60-80'): ?> class="activate" <?php endif; ?> >60-80万</a>
              <a href="javascript:Filter('price','80-100' );"  <?php if($fitervalue['price'] == '80-100'): ?> class="activate" <?php endif; ?>>80-100万</a>
              <a href="javascript:Filter('price','100-150' );" <?php if($fitervalue['price'] == '100-150'): ?> class="activate" <?php endif; ?>>100-150万</a>
              <a href="javascript:Filter('price','150');"  <?php if($fitervalue['price'] == '150'): ?> class="activate" <?php endif; ?>>150万以上</a>
            </span>
            </p>
            <p><span class="content-title">面积:</span>
            <span class="content-main">
              <a href="javascript:Filter('proportion','');" } <?php if($fitervalue['proportion'] == ''): ?> class="activate" <?php endif; ?>>不限</a></li>
              <a href="javascript:Filter('proportion',50);" <?php if($fitervalue['proportion'] == '50'): ?> class="activate" <?php endif; ?>>50㎡以下</a>
              <a href="javascript:Filter('proportion','50-70');"  <?php if($fitervalue['proportion'] == '50-70'): ?> class="activate" <?php endif; ?>>50-70㎡</a>
              <a href="javascript:Filter('proportion','70-90');"  <?php if($fitervalue['proportion'] == '70-90'): ?> class="activate" <?php endif; ?>>70-90㎡</a>
              <a href="javascript:Filter('proportion','90-110');"  <?php if($fitervalue['proportion'] == '90-110'): ?> class="activate" <?php endif; ?>>90-110㎡</a>
              <a href="javascript:Filter('proportion','110-130');" <?php if($fitervalue['proportion'] == '110-130'): ?> class="activate" <?php endif; ?> >110-130㎡</a>
              <a href="javascript:Filter('proportion','130-150');"  <?php if($fitervalue['proportion'] == '130-150'): ?> class="activate" <?php endif; ?>>130-150㎡</a> 
              <a href="javascript:Filter('proportion','150-200');"  <?php if($fitervalue['proportion'] == '150-200'): ?> class="activate" <?php endif; ?>>150-200㎡</a>
              <a href="javascript:Filter('proportion','200-300');" <?php if($fitervalue['proportion'] == '200-300'): ?> class="activate" <?php endif; ?> >200-300㎡</a>
              <a href="javascript:Filter('proportion','300');" <?php if($fitervalue['proportion'] == '300'): ?> class="activate" <?php endif; ?> >300㎡以上</a>
            </span>
            </p>
            <p><span class="content-title">户型:</span>
            <span class="content-main">
              <a href="javascript:Filter('room','');" <?php if($fitervalue['room'] == ''): ?> class="activate" <?php endif; ?>>不限</a>
              <a href="javascript:Filter('room','1');" <?php if($fitervalue['room'] == 1): ?> class="activate" <?php endif; ?>>1室</a>
              <a href="javascript:Filter('room','2');" <?php if($fitervalue['room'] == 2): ?> class="activate" <?php endif; ?>>2室</a>
              <a href="javascript:Filter('room','3');" <?php if($fitervalue['room'] == 3): ?> class="activate" <?php endif; ?>>3室</a>
              <a href="javascript:Filter('room','4');" <?php if($fitervalue['room'] == 4): ?> class="activate" <?php endif; ?>>4室</a>
              <a href="javascript:Filter('room','5');" <?php if($fitervalue['room'] == 5): ?> class="activate" <?php endif; ?>>5室</a>
              <a href="javascript:Filter('room','6');" <?php if($fitervalue['room'] == 6): ?> class="activate" <?php endif; ?>>5室以上</a>
            </span>
            </p>
              <span class="content-title">其他</span>
              <div class="dropdown">
                      <button class="dropbtn">朝向</button>
                      <div class="dropdown-content">
                        <a href="javascript:Filter('orientation','');"  <?php if($fitervalue['orientation'] == ''): ?> class="activate" <?php endif; ?> >不限</a>
                        <a href="javascript:Filter('orientation','1');"  <?php if($fitervalue['orientation'] == 1): ?> class="activate" <?php endif; ?> >东</a>
                        <a href="javascript:Filter('orientation','2');"  <?php if($fitervalue['orientation'] == 2): ?> class="activate" <?php endif; ?> >西</a>
                        <a href="javascript:Filter('orientation','3');"  <?php if($fitervalue['orientation'] == 3): ?> class="activate" <?php endif; ?> >南</a>
                        <a href="javascript:Filter('orientation','4');"  <?php if($fitervalue['orientation'] == 4): ?> class="activate" <?php endif; ?> >北</a>
                        <a href="javascript:Filter('orientation','5');"  <?php if($fitervalue['orientation'] == 5): ?> class="activate" <?php endif; ?> >东南</a>
                        <a href="javascript:Filter('orientation','6');"  <?php if($fitervalue['orientation'] == 6): ?> class="activate" <?php endif; ?> >东北</a>
                        <a href="javascript:Filter('orientation','7');"  <?php if($fitervalue['orientation'] == 7): ?> class="activate" <?php endif; ?> >西南</a>
                        <a href="javascript:Filter('orientation','8');"  <?php if($fitervalue['orientation'] == 8): ?> class="activate" <?php endif; ?> >西北</a>
                        <a href="javascript:Filter('orientation','9');"  <?php if($fitervalue['orientation'] == 9): ?> class="activate" <?php endif; ?> >南北</a>
                        <a href="javascript:Filter('orientation','10');"  <?php if($fitervalue['orientation'] == 10): ?> class="activate" <?php endif; ?> >东西</a>
                      </div>
                </div>
                <div class="dropdown">
                      <button class="dropbtn">房屋类型</button>
                      <div class="dropdown-content">
                        <a href="javascript:Filter('purpose','');"  <?php if($fitervalue['purpose'] == ''): ?> class="activate" <?php endif; ?>>不限</a>
                        <a href="javascript:Filter('purpose','1');" <?php if($fitervalue['purpose'] == 1): ?> class="activate" <?php endif; ?> >普通住宅</a>
                        <a href="javascript:Filter('purpose','2');" <?php if($fitervalue['purpose'] == 2): ?> class="activate" <?php endif; ?> >公寓</a>
                        <a href="javascript:Filter('purpose','3');" <?php if($fitervalue['purpose'] == 3): ?> class="activate" <?php endif; ?> >别墅</a>
                        <a href="javascript:Filter('purpose','4');" <?php if($fitervalue['purpose'] == 4): ?> class="activate" <?php endif; ?> >平房/四合院</a>
                        <a href="javascript:Filter('purpose','5');" <?php if($fitervalue['purpose'] == 5): ?> class="activate" <?php endif; ?> >其他</a>
                      </div>
                </div>
                <div class="dropdown">
                      <button class="dropbtn">装修情况</button>
                      <div class="dropdown-content">
                        <a href="javascript:Filter('decorate','');"   <?php if($fitervalue['decorate'] == ''): ?> class="activate" <?php endif; ?>>不限</a>
                        <a href="javascript:Filter('decorate','1');"  <?php if($fitervalue['decorate'] == 1): ?> class="activate" <?php endif; ?>>毛坯</a>
                        <a href="javascript:Filter('decorate','2');"  <?php if($fitervalue['decorate'] == 2): ?> class="activate" <?php endif; ?>>简单装修</a>
                        <a href="javascript:Filter('decorate','3');"  <?php if($fitervalue['decorate'] == 3): ?> class="activate" <?php endif; ?>>中等装修</a>
                        <a href="javascript:Filter('decorate','4');"  <?php if($fitervalue['decorate'] == 4): ?> class="activate" <?php endif; ?>>精装修</a>
                        <a href="javascript:Filter('decorate','5');"  <?php if($fitervalue['decorate'] == 5): ?> class="activate" <?php endif; ?>>豪华装修</a>
                      </div>
                </div>
                 <div class="dropdown">
                      <button class="dropbtn">产权信息</button>
                      <div class="dropdown-content">
                        <a href="javascript:Filter('prop_type','');"   <?php if($fitervalue['prop_type'] == ''): ?> class="activate" <?php endif; ?>>不限</a>
                        <a href="javascript:Filter('prop_type','1');" <?php if($fitervalue['prop_type'] == 1): ?> class="activate" <?php endif; ?> >商品房</a>
                        <a href="javascript:Filter('prop_type','2');" <?php if($fitervalue['prop_type'] == 2): ?> class="activate" <?php endif; ?> >商住两用</a>
                        <a href="javascript:Filter('prop_type','3');" <?php if($fitervalue['prop_type'] == 3): ?> class="activate" <?php endif; ?> >经济适用房</a>
                        <a href="javascript:Filter('prop_type','4');" <?php if($fitervalue['prop_type'] == 4): ?> class="activate" <?php endif; ?> >使用权</a>
                        <a href="javascript:Filter('prop_type','5');" <?php if($fitervalue['prop_type'] == 5): ?> class="activate" <?php endif; ?> >公房</a>
                        <a href="javascript:Filter('prop_type','6');" <?php if($fitervalue['prop_type'] == 6): ?> class="activate" <?php endif; ?> >其他</a>
                      </div>
                </div> 
              <p><span class="content-title">已选择条件:</span>
            <span class="content-dis">
                <?php echo fitervalue($fitervalue); ?>
            </span>
            </p>

        </div>
        <!-- 导航栏 -->
        <div class="page-nav">
            <ul>
                <li class="activate"><a href="#">默认排序</a></li>
                <li><a href="#">价格</a></li>
                <li><a href="#">面积</a></li>
            </ul>
        </div>
        <!-- 左边主题 -->
        <div class="contents-left">
        
        <h1>共找到<?php echo intval($count); ?>条匹配的房源</h1>
        <div class='page-main'>
                <ul>
                  <?php if(is_array($secondes) || $secondes instanceof \think\Collection || $secondes instanceof \think\Paginator): $i = 0; $__LIST__ = $secondes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('second_house/main',['id'=>$vo['id']]); ?>" class="left main-title"><img src="/house/public/uploads/<?php echo img($vo['id']); ?>" alt="" style="width:213px;height:160px"/></a>
                        <div class="page-content left">
                              <h3><a href="<?php echo url('second_house/main',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a><span class="label-blue">新上</span><span class="label-green">房主自荐</span></h3>
                              <p><?php echo estate_name($vo['estate_id']); ?> | <?php echo $vo['room']; ?>室<?php echo $vo['hall']; ?>厅<?php echo $vo['toilet']; ?>卫 | <?php echo floatval($vo['proportion']); ?>平米 | <?php echo orientation($vo['orientation']); ?> | <?php echo decorate($vo['decorate']); ?></p>
                              <p><?php echo floors($vo['floor'],$vo['all_floor']); ?> <?php echo $vo['activate_time']; ?>年建</p>
                              <p>104人关注 / 共32次带看 / <?php echo create_time($vo['create_time']); ?></p>
                              <p><?php echo $vo['label']; ?></p>
                        </div>
                        <div class="page-price right">
                                  <p class="page-Countprice"><span><?php echo floatval($vo['price']); ?></span>万</p>
                                  <p class="page-reprice">单价<?php echo price($vo['price'],$vo['proportion']); ?>元/平米</p>
                        </div>
                        <div class="clear"></div>
                    </li>
                  <?php endforeach; endif; else: echo "" ;endif; ?>  
                </ul>
                <?php echo $secondes->render(); ?>
        </div>
        
        </div>
        <!-- 右边侧边栏 -->
        <div class="contents-right">
            <h3>精选房源</h3>
            <ul>
                <li>
                  <div>
                    <a href="#">
                    <img src="/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                    <div class="sidebar-user">
                        <span class="sidebar-name">阿里巴巴</span>    
                        <span class="sidebar-tel">13563990501</span>    
                    </div>
                    </a>
                  </div>
                  <div class="sidebar-content">
                      <p class="sidebar-address">兰山区/沂龙湾/青年湖南里</p>
                      <p class="sidebar-room">2室&nbsp;&nbsp;81.0平</p>
                      <p class="sidebar-price">350万</p>
                  </div>
                </li>
                <li>
                  <div>
                    <a href="#">
                    <img src="/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                    <div class="sidebar-user">
                        <span class="sidebar-name">阿里巴巴</span>    
                        <span class="sidebar-tel">13563990501</span>    
                    </div>
                    </a>
                  </div>
                  <div class="sidebar-content">
                      <p class="sidebar-address">兰山区/沂龙湾/青年湖南里</p>
                      <p class="sidebar-room">2室&nbsp;&nbsp;81.0平</p>
                      <p class="sidebar-price">350万</p>
                  </div>
                </li>
                <li>
                  <div>
                    <a href="#">
                    <img src="/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                    <div class="sidebar-user">
                        <span class="sidebar-name">阿里巴巴</span>    
                        <span class="sidebar-tel">13563990501</span>    
                    </div>
                    </a>
                  </div>
                  <div class="sidebar-content">
                      <p class="sidebar-address">兰山区/沂龙湾/青年湖南里</p>
                      <p class="sidebar-room">2室&nbsp;&nbsp;81.0平</p>
                      <p class="sidebar-price">350万</p>
                  </div>
                </li>
                <li>
                  <div>
                    <a href="#">
                    <img src="/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                    <div class="sidebar-user">
                        <span class="sidebar-name">阿里巴巴</span>    
                        <span class="sidebar-tel">13563990501</span>    
                    </div>
                    </a>
                  </div>
                  <div class="sidebar-content">
                      <p class="sidebar-address">兰山区/沂龙湾/青年湖南里</p>
                      <p class="sidebar-room">2室&nbsp;&nbsp;81.0平</p>
                      <p class="sidebar-price">350万</p>
                  </div>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
          
        <div class="page-recommend">
            <h2>推荐房源</h2>
            <ul>
              <li>
                  <div>
                    <a href="#">
                    <img src="/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                    <div class="sidebar-user">
                        <span class="sidebar-price">3500元/㎡</span>       
                    </div>
                    </a>
                  </div>
                  <div class="sidebar-content">
                      <p class="sidebar-address">兰山区/沂龙湾/青年湖南里</p>
                  </div>
              </li>
               <li>
                  <div>
                    <a href="#">
                    <img src="/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                    <div class="sidebar-user">
                        <span class="sidebar-price">3500元/㎡</span>       
                    </div>
                    </a>
                  </div>
                  <div class="sidebar-content">
                      <p class="sidebar-address">兰山区/沂龙湾/青年湖南里</p>
                  </div>
              </li>
               <li>
                  <div>
                    <a href="#">
                    <img src="/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                    <div class="sidebar-user">
                        <span class="sidebar-price">3500元/㎡</span>       
                    </div>
                    </a>
                  </div>
                  <div class="sidebar-content">
                      <p class="sidebar-address">兰山区/沂龙湾/青年湖南里</p>
                  </div>
              </li>
               <li>
                  <div>
                    <a href="#">
                    <img src="/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                    <div class="sidebar-user">
                        <span class="sidebar-price">3500元/㎡</span>       
                    </div>
                    </a>
                  </div>
                  <div class="sidebar-content">
                      <p class="sidebar-address">兰山区/沂龙湾/青年湖南里</p>
                  </div>
              </li>
               <li>
                  <div>
                    <a href="#">
                    <img src="/house/public/static/index/images/5ef07e88-1a8d-4d27-81df-58dbce807ff0.jpg.280x210.jpg.232x174.jpg" alt="" />
                    <div class="sidebar-user">
                        <span class="sidebar-price">3500元/㎡</span>       
                    </div>
                    </a>
                  </div>
                  <div class="sidebar-content">
                      <p class="sidebar-address">兰山区/沂龙湾/青年湖南里</p>
                  </div>
              </li>
            </ul>
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


