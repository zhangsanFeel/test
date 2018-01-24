<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpStudy\WWW\test\house\public/../application/cleverest\view\login\index.htm";i:1515806413;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>0539房产信息管理系统</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/test/house/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/test/house/public/static/admin/style/beyond.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="/test/house/public/static/admin/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="<?php echo url('login/login'); ?>" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">登陆后台</div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="username" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="captcha" name="captcha" type="text">
                </div>
                <div class="loginbox-textbox">
            <div><img src="<?php echo captcha_src(); ?>" style="cursor:pointer;" onclick = "this.src='<?php echo captcha_src(); ?>?'+Math.random()"  alt="captcha" /></div>
                </div>
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="/test/house/public/static/admin/style/jquery.js"></script>
    <script src="/test/house/public/static/admin/style/bootstrap.js"></script>
    <script src="/test/house/public/static/admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="/test/house/public/static/admin/style/beyond.js"></script>




</body><!--Body Ends--></html>