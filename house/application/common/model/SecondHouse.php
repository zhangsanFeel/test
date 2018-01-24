<?php 
namespace app\common\model;

class SecondHouse extends BaseModel{
	 

	 /**
	  *
	  * 查询所有的启用的城市
	  */
	 
	 public function getSecondHouse(){
	 	$order=[
	 		'listorder'=>'desc',
	 		'id'=>'desc'
	 	];

	 	$result=$this->order($order)->paginate(10);
	 	if(!$result){
	 		return false;
	 	}else{
	 		return $result;	
	 	}
	 }

	 //查询数据 
	 public function secondNorMalData($estateData,$datas=[]){

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
	 
	 //查询总数
	 public function secondCount($estateData,$datas=[]){

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

	 //根据数组条件查询数据

	
	 



}