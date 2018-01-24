<?php 
namespace app\common\model;

class Label extends BaseModel{
	 

	 /**
	  *
	  * 查询所有的启用的城市
	  */
	 
	 public function getLabelTypes(){
	 	$order=[
	 		'listorder'=>'desc',
	 		'id'=>'desc'
	 	];

	 	$result=$this->order($order)->paginate(10);
	 	return $result;
	 }	

}