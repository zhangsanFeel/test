<?php 
namespace app\broker\controller;
use think\Controller;
class Login extends Controller{
	public function index(){
			$broker=session('user','','broker');
			if($broker && $broker['id']){
				return $this->redirect('index/index');
			}

			return view();	
		
	}

	  public function login(){
	  	if(request()->isPost()){

	  		$data=input('post.');

	  		if(empty($data)){
	  			$this->error('用户不存在或者已被删除',url('login/index'));
	  		}

			$user=model('broker')->get(['phone'=>$data['username']]);
			

			if(empty($user) || $user['status']!=1){
				$this->error('用户不存在,或者用户未通过审核',url('login/index'));
			}	


			if(md5($data['password'].$user['code'])!=$user['password']){
				$this->error('用户密码错误',url('login/index'));
			}

			

			$ip = $_SERVER["REMOTE_ADDR"];


			$lastData=[
				'last_login_time'=>time(),
				'last_login_ip'=>$ip,
			];


			model('broker')->where('id',$user['id'])->update($lastData);

			session('user',$user,'broker');
			$this->success('登陆成功',url('index/index'));
	  	}else{
	  		return $this->redirect('login/index');
	  	}
       


    }

     public function logout(){
    	session(null,'broker');
    	$this->redirect('login/index');
    }


}