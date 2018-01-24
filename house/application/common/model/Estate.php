<?php 
namespace app\common\model;

class Estate extends BaseModel{
	 

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



	 //获得改城市下的所有分类信息
	 public function estateNorMalData($cityData){

	 	if(empty($cityData) || !is_array($cityData)){
	 		return false;
	 	}

	 	$data=[
	 		'city_id'=>['in',implode(',',$cityData)],
	 		'status'=>1,
	 	];
	 	$result=$this->where($data)->column('id');

	 	return $result;




	 }
}