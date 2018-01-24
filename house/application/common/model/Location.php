<?php 
namespace app\common\model;

class Location extends BaseModel{
	 

	 /**
	  *
	  * 查询所有的启用的城市
	  */
	 
	 public function getLocations(){
	 	$order=[
	 		'listorder'=>'desc',
	 		'id'=>'desc'
	 	];

	 	$result=$this->order($order)->paginate(10);
	 	return $result;
	 }	

}