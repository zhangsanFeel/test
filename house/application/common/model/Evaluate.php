<?php 
namespace app\common\model;

class Evaluate extends BaseModel{
	 

	 /**
	  *
	  * 查询所有的启用的城市
	  */
	 
	 public function getEstates(){
	 	$order=[
	 		'city_id'=>'desc',
	 		'listorder'=>'desc',
	 		'id'=>'desc'
	 	];



	 	$result=$this->order($order)->paginate(10);
	 	return $result;
	 }	


	 //根据商圈查询小区

	 public function getNorMalEstates($city_id){
	 	$data=[
	 		'city_id'=>$city_id,
	 		'status'=>1,
	 	];
	 	$order=[
	 		'listorder'=>'desc',
	 		'id'=>'desc'
	 	];



	 	$result=$this->field('id,name,city_id')->where($data)->order($order)->select();


	 	$result=collection($result)->toArray();
	 	return $result;
	 }	
}