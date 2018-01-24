<?php 
namespace app\common\model;

class Img extends BaseModel{
	 
	public function getNormalImages($house_id,$classify){
		if(empty($house_id) && empty($classify)){
			return false;
		}
		$data=[
		 'status'=>1,
		 'classify'=>$classify,
		 'house_id'=>$house_id,
		];
		$order=[
	 		'id'=>'desc'
	 	];

	 	$result=$this->where($data)->order($order)->select();
	 	return $result;
	}
	
}