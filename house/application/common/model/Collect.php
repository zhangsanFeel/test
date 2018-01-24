<?php 
namespace app\common\model;
use think\Model;
class Collect extends Model{
	
	 /**
	  *
	  * 查询用户的所有收藏房源，并以数组的方式返回
	  */
	 public function getNormalCollectArray($user_id,$house_type){
	 	if(empty($user_id) || empty($house_type)){
	 		return false;
	 	}

	 	$data=[
	 	'user_id'=>$user_id,
	 	'house_type'=>$house_type,
	 	];

	 	$res=$this->where($data)->column('house_id');

	 	if($res){
	 		return $res;
	 	}else{
	 		return false;
	 	}
	 }

	 //查询用户的所有房源数量

	 public function collectCount($user_id){
	 	if(empty($user_id)){
	 		return false;
	 	}

	 	$data=[
	 	'user_id'=>$user_id,
	 	];

		 $res=$this->where($data)->count();
		 

	 	if($res){
	 		return $res;
	 	}else{
	 		return false;
	 	}
	 }
	 
	 

}