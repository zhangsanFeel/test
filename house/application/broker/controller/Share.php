<?php 
namespace app\broker\controller;
class Share extends Base{

	
	//管理员列表
	public function look_lst(){
		//显示委托数据
		$look=model('look')->getNormalLook(['status'=>4]);
		$this->assign('look',$look);
		return view();
	}


	//带看完成后提交信息
	public function look_add(){

		
		if(request()->isPost()){
			$data = input('post.');
			if (empty($data['id'])) {
				$this->error('404找不到页面');
			}
				//4为正在带看中，，，
			$look = model('look')->where(['status' => 3, "id" => $data['id']])->find();
			if (empty($look)) {
				$this->error('数据不合法');
			}

			$this->assign('look', $look);
			return view();

		}else{
			$this->error('404找不到页面', url('index/index'));
		}
	}
	//获得提交的数据
	public function look_save(){
		if(!request()->isPost()){
			$this->error('404找不到页面',url('index/index'));
		}

		$data=input('post.');
		//更新带看表
		$broker_desc=[
			'broker_desc'=>$data['broker_desc'],
			''

		];

	}

	//带看系统
	public function look_status()
	{	
		if(!request()->isPost()){
			$this->error('404找不到页面',url('index/index'));
		}

		$data=input('post.');

		//拼装数组 // 3是已经接受委托，但是未带看
		$lookData = [
			'status' => 3,
			'broker_id' =>$this->getLogins()['id'],
			'id' => $data['id'],
			'update_time' => time(),
		];	
		//接受带看,但是还未带看完成	
		try {
			$res = model('look')->save($lookData, ['id' => $data['id']]);
		} catch (\Exception $e) {
			return 2;
		}

		if ($res) {
			return 1;
		} else {
			return 0;
		}
	}
	


}