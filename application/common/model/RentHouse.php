<?php 
namespace app\common\model;

class RentHouse extends BaseModel{
	 

	 /**
	  *
	  * 查询所有的启用的城市
	  */
	 
	 public function getRentHouse(){
	 	$order=[
	 		'listorder'=>'desc',
	 		'id'=>'desc'
	 	];

	 	$result=$this->order($order)->paginate(10);
	 	return $result;
	 }	

	 //查询复合条件的数据
	 public function rentNorMalData($estateData,$datas=[]){

	 	if(empty($estateData) || !is_array($estateData)){
	 		return false;
	 	}

	 	$data=[
	 		'estate_id'=>['in',$estateData],
	 	];


	 	$order=[
	 		'listorder'=>'desc',
	 		'id'=>'desc'
	 	];

	 	if($datas){
	 		$result=$this->where($datas);
	 	}else{
	 		$result=$this;
	 	}
	 	$result=$result->where($data)->order($order)->paginate(10);
	 
	 	return $result;	
	 }
	 

	 public function rentCount($estateData,$datas=[]){

	 	if(empty($estateData) || !is_array($estateData)){
	 		return false;
	 	}

	 	$data=[
	 		'estate_id'=>['in',$estateData],
	 	];


	 	$order=[
	 		'listorder'=>'desc',
	 		'id'=>'desc'
	 	];

	 	if($datas){
	 		$result=$this->where($datas);
	 	}else{
	 		$result=$this;
	 	}

	 	$count=$result->where($data)->count();
	 	
	 	return $count;	
	 }

}