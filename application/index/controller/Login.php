<?php
namespace app\index\controller;
use think\sdk\api_demo\SmsDemo;
class Login extends Base
{
    public function index()
    { 

        if(request()->isPost()){
            $data=input('post.');
            if(empty($data)){
              $this->error('404页面');
            }
            $user=model('user')->get(['phone'=>$data['phone']]);

            if(empty($user)){
              $this->error('该用户不存在或者尚未注册');
            }

            if(md5($data['password'].$user['code'])!=$user['password']){
              $this->error('密码输入有误');
            }

            session('user',$user,'index');
            $ip = $_SERVER["REMOTE_ADDR"];
            $lastData=[
            'last_login_time'=>time(),
            'last_login_ip'=>$ip,
           ];


            model('user')->where('id',$user['id'])->update($lastData);

            $this->success('登陆成功',url('index/index'));

      }else{
          $user=session('user','','index');
          if($user && $user['id']){
            return $this->redirect('index/index');
          }

          return view();
      }


    }
     public function login()
    { 
        if(request()->isPost()){
        $data=input('post.');
        //验证码不正确
        if(session('capche','','capche')!=$data['verify'] ){
              session(null,"capche");
              $this->error('验证码输入有误');
        }


        //创建用户
        $validate=validate('user');

        if(!$validate->scene('add')->check($data)){
          $this->error($validate->getError());
        }

        $code=rand(1211,9999);

        $userData=[
        'phone'=>$data['phone'],
        'password'=>md5($data['password'].$code),
        'code'=>$code,
        ];

       try{
        //插入数据库
        $res=model('user')->add($userData);
    
        }catch(\Exception $e){
          $this->error($e->Message());
        }



       
        if($res){
          session(null,"capche");
          $this->success('用户创建成功',url('login/index'));
        }else{
          $this->error('用户创建失败');
        }


      }else{
          return view();
      }

    }

    public function shortcut(){

      if(request()->isPost()){
            $data=input('post.');
            if(empty($data)){
              $this->error('404页面');
            }
            $user=model('user')->get(['phone'=>$data['phone']]);

            if(empty($user)){
              $this->error('该用户不存在或者尚未注册');
            }


           if(session('capche','','capche')!=$data['verify'] ){

                  session(null,"capche");
                  $this->error('验证码输入有误');
            }



            session('user',$user,'index');
            $ip = $_SERVER["REMOTE_ADDR"];
            $lastData=[
            'last_login_time'=>time(),
            'last_login_ip'=>$ip,
           ];

           
            model('user')->where('id',$user['id'])->update($lastData);

            $this->success('登陆成功',url('index/index'));

      }else{

          $user=session('user','','index');
          if($user && $user['id']){
            return $this->redirect('index/index');
          }

          return view();
      }


    }

    //发送短信验证码
     public function response(){

     		$phone=input('phone');
     		if(empty($phone)){
     			echo 2;
     		}
        $capche=rand(111111,999999);

        session("capche",$capche,'capche');
        $response = SmsDemo::sendSms(
        "川蜀老灶", // 短信签名
        "SMS_114390645", // 短信模板编号
        $phone, // 短信接收者
        Array(  // 短信模板中字段的值
            "code"=>$capche,
            "product"=>"register"
        ),
        "123"   // 流水号,选填
      );


        if(empty($response)){
          echo 2;
        }
        //1表示短信发送成功
        echo 1; 

  }

    public function logout(){
      session(null,'index');
      $this->redirect($_SERVER['HTTP_REFERER']);
    }
}
