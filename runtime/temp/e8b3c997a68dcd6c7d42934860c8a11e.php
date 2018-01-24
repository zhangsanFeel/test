<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy\WWW\house\public/../application/index\view\login\index.html";i:1516413932;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<LINK href="/house/public/static/index/style/style.css" rel=stylesheet>
	<link rel="stylesheet" href="/house/public/static/index/css/login.css">
	<script language="JavaScript" type="text/javascript" src="/house/public/static/index/style/jquery.js"></script>
</head>
<body>
			<div class="header">
					<div class="header-main">
        					<a href="#" title="返回首页"><img src="images/logo.png" alt="这里是您的网站名称" /></a>
					</div>
			</div>
				<input type="text" class="phone">
			<div class="login-main">
				<div class="login-content">
					<div class="contents">
						<h2>登陆零雾三九房产网</h2>
						<div class="login-type">
							<span class=" active"><a href="<?php echo url('login/index'); ?>">账号密码登陆</a></span>
							<span ><a href="<?php echo url('login/shortcut'); ?>">手机号快捷登录</a></span>
							<span ><a href="<?php echo url('login/login'); ?>">手机号注册</a></span>
						</div>

						<form action="" method="post" >
							<div class="form-group post-phone">
								<p style="display:none">请输入正确的手机号码</p>
								<em class="icon-phone">&nbsp;</em>
								<input type="text" name="phone"  placeholder="请输入正确的手机号码"   >
							</div>		
							<div class="form-group post-password">
								<em class="icon-pass">&nbsp;</em>
								<input type="password" name="password"  placeholder="请输入正确的密码">
							</div>
							<div class="submit">
								<button class="success-verification" type="submit">提交按钮</button>
							</div>
						</form>	


					</div>
				</div>	
			</div>
      
</body>
</html>