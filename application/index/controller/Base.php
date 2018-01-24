<?php 
namespace app\index\controller;
use think\Controller;
class Base extends Controller{
	public $user;
	protected $obj;
	public function _initialize(){
		

		$user=$this->getLogins();
		$this->assign('user',empty($user)?'':$user);
	}

	//获得
	public function getLogins(){
		if(!empty($this->user)){
			return $this->user;
		}else{
			return $this->user=session('user','','index');
		}
	}

	//无限极排序
	public function lisinfo($data,$id=0,$level=0){
		static $arr=array();

		foreach($data as $key => $value){

			if($value['pid']==$id){
				$value['level']=$level;
				$arr[]=$value;
				$this->lisinfo($data,$value['id'],$level+1);
			}
		}
		return $arr;
	}

	//查询收藏数据 
	// user_id，用户id
	// type  类型 1为 二手房  2为 租房
	// model   模型名称 比如 二手房为 second_house
	public function collectCount($user_id,$type,$model){
		if(empty($user_id) || empty($type) || empty($model)){
			return false;
		}


		$secondCont=model('collect')->getNormalCollectArray($user_id,$type);

		if(empty($secondCont)){
			return false;
		}

		try{
			$seconds=model($model)->getCollectHouse($secondCont);
		}catch(\Exception $e){
			return false;
		}
        
        
        return $seconds;
	}

	//查询委托数据 
	// user_id，用户id
	// type  类型 1为 二手房  2为 租房
	// model   模型名称 比如 二手房为 second_house
	public function lookCount($user_id,$type,$model){
		if(empty($user_id) || empty($type) || empty($model)){
			return false;
		}


		$secondCont=model('collect')->getNormalCollectArray($user_id,$type);

		$look=model('Look')->getNormalLookArray($user_id,$type);  
       
		if(empty($secondCont)){
			return false;
		}

		try{
			$seconds=model($model)->getCollectHouse($look);
		}catch(\Exception $e){
			return false;
		}
        
        
        return $seconds;
	}

}