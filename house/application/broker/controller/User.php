<?php 
namespace app\broker\controller;
class User extends Base{

	
	//个人列表
	public function lst(){
		return view();
	}
	//收藏房源列表
	public function house_lst(){
		return view();
	}

	//收藏经纪人列表
	public function broker_lst(){
		return view();	
	}

	//预约的用户表
	public function appoint_user_lst(){
		$broker_id=$this->getLogins()['id'];
		//显示委托数据
		//3是接受委托。 2是带看完，但是没有评分

		$look=model('look')->getNormalLook(['status'=>['in','3,2'],'broker_id'=>$broker_id]);

		
		$this->assign('look',$look);
		return view();
	}

	//预约的房源表
	public function appoint_house_lst(){
		return view();
	}




	


}