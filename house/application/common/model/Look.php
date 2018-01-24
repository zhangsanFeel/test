<?php 
namespace app\common\model;

class Look extends BaseModel{
	 

	 /**
	  *
	  * 添加数据
	  */
	 
	public function addLook($data){
		if(empty($data) || !is_array($data)){
			return false;
		}
	 	$this->save($data);
	 	return $this->id;		
	}

	/**
	  *
	  * 查询用户的所有委托房源，并以数组的方式返回，是只是委托完成，但是未被人接受委托
	  * 
	  */
	 public function getNormalLookArray($user_id,$house_type){
	 	if(empty($user_id) || empty($house_type)){
	 		return false;
	 	}


	 	$data=[
	 	'user_id'=>$user_id,
	 	'house_type'=>$house_type,
	 	'status'=>3,
	 	];


	 	$res=$this->where($data)->column('house_id');

	 	if($res){
	 		return $res;
	 	}else{
	 		return false;
	 	}
	 }

	 //查看指定用户的预约带看信息
	 public function getUserLook($user_id,$house_type,$status){
	 	if(empty($user_id) || empty($house_type)){
	 		return false;
	 	}


	 	$data=[
	 	'user_id'=>$user_id,
	 	'house_type'=>$house_type,
	 	'status'=>['in',$status],
	 	];

	 	$order=[
	 	'id'=>'desc'
	 	];


	 	$res=$this->where($data)->order($order)->paginate(10);

	 	if($res){
	 		return $res;
	 	}else{
	 		return false;
	 	}
	 }



	 //获得带看信息
	 public function getNormalLook($data){
	 	if(empty($data)){
	 		return false;
	 	}

	 	$order=[
	 	'id'=>'desc'
	 	];
	 	
	 	$res=$this->where($data)->order($order)->paginate(10);

	 	if($res){
	 		return $res;
	 	}else{
	 		return false;
	 	}
	 }

	 //获得数量
	 public function getYearLookCount($id){
		 	if(empty($id)){
				 return false;
			 }
	 		 $yearDay=60*60*24*30;
	 		 $data=time()-$yearDay;
	 		 $data=[
			   'update_time'=>['>',$yearDay],
			   'status'=>1,
			   'broker_id'=>$id,
			  ];
			//
			$res=$this->where($data)->count();
			return intval($res);
			
	 }

}