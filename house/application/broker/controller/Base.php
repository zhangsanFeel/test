<?php 
namespace app\broker\controller;
use think\Controller;
class Base extends Controller{
	
	public $user;
	protected $obj;
	public function _initialize(){
		if(empty(session('user','','broker'))){
			$this->error('请登录',url('login/index'));
		}
		
		$this->getLogins();
	}

	//获得
	public function getLogins(){
		if(!empty($this->user)){
			return $this->user;
		}else{
			return $this->user=session('user','','broker');
		}
	}


	//查询排序操作..
	public function lisinfo($data,$id=0,$level=0){
		static $arr=array();

		foreach($data as $key => $value){

			if($value['pid']==$id){
				$value['level']=$level;
				$arr[]=$value;
				$this->lisinfo($data,$value['id'],$level+1);
			}
		}
		return $arr;
	}



		//ajax列表排序逻辑
    public function listorder(){
    	$data=input('post.','','htmlspecialchars');
		if(empty($data['id'])){
			$this->error("id不合法");
		}
		if(!is_numeric($data['listorder'])){
			$this->error("listorder不合法");
		}

    	//获得控制器
    	$model=request()->controller();

    	try{
    		$res=model($model)->save(['listorder'=>$data['listorder']],['id'=>$data['id']]);
    	}catch(\Exception $e){
    		$this->error('数据异常');
    	}


    	if($res){
    		$this->result($_SERVER['HTTP_REFERER'],1,'success');
    	}else{
    		$this->result($_SERVER['HTTP_REFERER'],0,'更新失败');
    	}
    }


    //修改状态

    public function status(){
    	$data=input('','','htmlspecialchars');

    	if(empty($data['id']) || !is_numeric($data['id'])){
			$this->error("数据类型不合法");
		}


		if(!is_numeric($data['status'])){
			$this->error("数据类型不合法");
		}


		$model=request()->controller();

		try{
    		$res=model($model)->save(['status'=>$data['status']],['id'=>$data['id']]);
    	}catch(\Exception $e){
    		$this->error('数据异常');
    	}

    	if($res){
    		$this->success('状态修改成功');
    	}else{
    		$this->error('状态修改失败');
    	}
    }


    //查询无限极分类下的子分类
    public function querySubcategory($data,$id){
    	static $arr=array();
		foreach($data as $key => $value){

			if($value['pid']==$id){

				$arr[]=$value['id'];
				$this->querySubcategory($data,$value['id']);
			}
		}
		$arr[1]=intval($id);
		return $arr;
    }



    //获得分类的路径 city_path
    public function getCityPath($id){
    	static $arr=array();
    	if(empty($id)){
    		return $arr;
    	}

    	try{
			$path=model('city')->where('id',$id)->value('pid');
		}catch(\Exception $e){
			$this->error('数据异常');
		}
    	

    	$this->getCityPath($path);
    	$arr[]=$path;
    	return $arr;
    }


    //删除操作
	public function CommonDelete(){
		$id=input("id",'','intval');

		if(empty($id)){
			$this->error('提交的数据不存在');
		}

		$model=request()->controller();


		try{
			$res=model($model)->where('id',$id)->delete();	
		}catch(\Exception $e){
			$this->error('数据异常');
		}
		
		


		if($res){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}


	



}