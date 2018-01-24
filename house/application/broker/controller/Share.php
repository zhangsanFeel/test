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



	public function look_add(){

		$data=input('post.');
		if(empty($data['id'])){
			$this->error('404找不到页面');
		}
		//4为正在带看中，，，
		$look=model('look')->where(['status'=>4,"id"=>$data['id']])->find();
		if(empty($look)){
			$this->error('数据不合法');
		}

		
		dump($look);

		dump($data);
	}
	
	//带看系统
	public function look_status($border_id, $id, $status)
	{
		//拼装数组
		$lookData = [
			'status' => $status,
			'broker_id' => $border_id,
			'id' => $id,
			'update_time' => time(),
		];	
		//接受带看,但是还未带看完成	
		try {
			$res = model('look')->save($lookData, ['id' => $data['id']]);
		} catch (\Exception $e) {
			return false;
		}

		if ($res) {
			return $res;
		} else {
			return false;
		}
	}
	


}