<?php 
namespace app\common\model;

class City extends BaseModel{
	 

	 /**
	  *
	  * 查询所有的启用的城市
	  */
	 
	 public function getCitys(){
	 	
	 	$order=[
	 		'listorder'=>'desc',
	 		'id'=>'desc'
	 	];

	 	$result=$this->order($order)->select();
	 	return $result;
	 }	

	 public function getRegions($pid){
	 	if(empty($pid)){
	 		return false;
	 	}
	 	$data=[
	 		'pid'=>intval($pid),
	 		'status'=>1,
	 	];
	 	$order=[
	 		'listorder'=>'desc',
	 		'id'=>'desc'
	 	];
	 	
	 	$result=$this->where($data)->order($order)->select();

	 	if($result){
	 		return $result;
	 	}else{
	 		return false;
	 	}
	 }

	 

	 

}