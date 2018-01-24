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
	 public function getUserLook($user_id,$house_type,$status,$type=1){
	 	if(empty($user_id) || empty($house_type)){
	 		return false;
	 	}


	 	$data=[
	 	'user_id'=>$user_id,
	 	'house_type'=>['in', $house_type],
	 	'status'=>['in',$status],
	 	];

	 	$order=[
	 	'id'=>'desc'
	 	];

		 if($type==1){
			$res = $this->where($data)->order($order)->paginate(10);
		 }elseif($type==2){
			$res = $this->where($data)->order($order)->select(6);
		 }

	 	

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

	 //统计带看完成后，该经纪人评分的数据
	 public function getLookGradeCount($id){
		if (empty($id)) {
			return false;
		}
		 $data=[
			'broker_id'=>$id,
			'status'=>1,
		 ];
		$arr=[];
		 for($i=1;$i<6;$i++){
			$data['grade']=$i;
			$count=$this->where($data)->count();
			$arr[$i]=intval($count);
		 }
		$arr['count']=array_sum($arr);
		return $arr;
	 }

	 //查询用户一共看了多少套房子 1234
	 public function lookCount($user_id){
		if (empty($user_id)) {
			return false;
		}

		$data=[
			'user_id'=>intval($user_id),
		];

		$count=$this->where($data)->count();
		return intval($count);
	 }

}