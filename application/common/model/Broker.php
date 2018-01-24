<?php 
namespace app\common\model;

class Broker extends BaseModel{
	 
	 public function getBrokers(){
	 	$order=[
	 		'listorder'=>'desc',
	 		'id'=>'desc'
	 	];

	 	$result=$this->order($order)->select();
	 	return $result;
	 }	

	 


	 

}