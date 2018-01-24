<?php 
namespace app\broker\controller;
class Share extends Base{

	
	//管理员列表
	public function look_lst(){
		//显示委托数据
		$look=model('look')->getNormalLook(['status'=>3]);
		$this->assign('look',$look);
		return view();
	}

	//带看系统
	public function look_status(){

		$data=input();

    	if(empty($data['id']) || !is_numeric($data['id']) || $data['status']!=2 || $data['status']!=4 || empty($data['status'] )){
				$this->error("数据类型不合法");
		}
		
		//接受带看,但是还未带看完成
		$lookData=[
		'status'=>$data['status'],
		'broker_id'=>$this->getLogins()['id'],
		'id'=>$data['id'],
		'update_time'=>time(),
		];

		try{
    		$res=model('look')->save($lookData,['id'=>$data['id']]);
    	}catch(\Exception $e){
    		$this->error('数据异常');
    	}


    	if($data['status']==2){
			$error="完成该房源委托失败";
			$success="已完成该房源委托";
		}elseif($data['status']==4){
			$error="获得该房源委托失败";
			$success="已获得该房源委托";
		}


    	if($res){
    		$this->success($success);
    	}else{
    		$this->error($error);
    	}	
		
	}




	


}