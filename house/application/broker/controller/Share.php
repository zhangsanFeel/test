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

		$data=input('post.');
		//拼装数组
		$lookData = [
			'status' =>$data['status'],
			'broker_id' => $this->getLogins()['id'],
			'id' => $data['id'],
			'update_time' => time(),
		];
		
		//接受带看,但是还未带看完成
		

		
		try{
    		$res=model('look')->save($lookData,['id'=>$data['id']]);
    	}catch(\Exception $e){
			echo 2;
			return;
    	}

		if($res){
			echo 1;
			return;
		}else{
			echo 2;
			return;
		}
		
	}




	


}