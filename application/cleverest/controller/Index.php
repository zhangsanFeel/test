<?php 
namespace app\cleverest\controller;
class Index extends Base{
	public function index(){

		return view();
	}
	public function update(){
		return view();
	}
	public function edit(){

		
		if(request()->isPost()){
			//接收数据
			$data=input('post.','','htmlspecialchars');

			//validate验证
			//进行validate验证

			$validate=validate('Admin');

			if(!$validate->check($data)){
				$this->error($validate->getError());
			}

			//更新数据库
			

			$adminData['username']=$data['username'];
			
			
			//是否修改密码 ，如果修改密码那么 password必须存在

			if($data['password'] && $data['password1']  && $data['password2']){
				    $admin=model('admin')->get($data['id']);

				    //原密码是否是正确
				    if(md5($data['password'].$admin['code']) != $admin['password']){
				    	 $this->error('原密码输入有误');
				    }

				    //新密码

				    if($data['password1'] != $data['password2']){
				    	$this->error('两次密码输入不一致');
				    }

				    //设置新密码和 code加密
				    $code=rand(1200,9999);
				    $adminData['code']=$code;
				    $adminData['password']=md5($data['password1'].$code);



			}


			$res=model('admin')->save($adminData,['id'=>$data['id']]);

			if($res){
				$this->success('用户信息更新成功');
			}else{
				$this->error('用户信息更新失败');
			}



		}else{
			$admin=model('admin')->get(1);
			$this->assign('admin',$admin);
			return view();	
		}
		
	}
	public function login(){
  	 session(null,'cleverest');
  	 $this->redirect('login/login');
  	}

 
}