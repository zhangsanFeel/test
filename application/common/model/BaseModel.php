<?php 
namespace app\common\model;
use think\Model;
class BaseModel extends Model{
	 protected $autoWriteTimestamp=true;

	 /**
	  * [add description]
	  * @param [type] $data [array]传递的数据
	  *
	  * 添加可以直接使用的数据
	  *
	  * 返回的类型为 int  
	  * 返回值是 增加的id号
	  */
	 public function add($data){
	 	$data['status']=1;
	 	$this->save($data);
	 	return $this->id;
	 }


	 /*
	 	获得基本信息

	  */
	 
	 public function getNormals(){
	 	$data['status']=1;

	 	$order['id']='desc';
	 	return $this->where($data)->order($order)->paginate(10);
	 }

	  public function getCollectHouse($collect){

	 	if(empty($collect) || !is_array($collect)){
	 		return false;
	 	}


	 	$data=[
	 		'id'=>['in',$collect],
	 		'status'=>1,
	 	];

	 	$order=[
	 		'listorder'=>'desc',
	 		'id'=>'desc'
	 	];

	 	$count=$this->where($data)->count();
	 	if(empty($count)){
	 		$count=0;
	 	}

	 	$result=$this->where($data)->order($order)->paginate(10);
	 	$result->count=$count;
	 	return $result;	
	 }
}