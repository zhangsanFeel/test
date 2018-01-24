<?php 
namespace app\location\controller;
class Evaluate extends Base{
	//管理员列表
	public function lst(){
		//获得排序数据
		$brokers=model('broker')->getBrokers();
		$this->assign("brokers",$brokers);
		return view();
	}

	//添加列表
	public function add(){

			//获得数据
			$result=model('city')->getCitys();
			//进行排序
			$citys=$this->lisinfo($result);

			$this->assign("citys",$citys);
			return view();
		
	}




	public function save(){

		if(!request()->isPost()){
			$this->error('提交的数据有误');
		}	

			//获得数据进行过滤
			$data=input('post.','','htmlspecialchars');
			
			//进行validate验证

			$validate=validate('broker');

			if(!$validate->check($data)){
				$this->error($validate->getError());
			}
			
			//入职时间转换


			

			//获得商圈信息 
			$estates=[];
			foreach($data['estates'] as $v){
				$estate=model('estate')->where('id',$v)->value('city_id');
				$estates[$estate]=$estate;
			}


			$code=rand(1200,9999);
			//进行分类过滤
			$brokerData=[
				'username'=>$data['username'],
				'email'=>$data['email'],
				'phone'=>$data['phone'],
				'position'=>$data['position'],
				'entry_time'=>strtotime($data['entry_time']),
				'estate'=>serialize($data['estates']),
				'city_id'=>serialize($estates),
				'password'=>md5($data['password'].$code),
				'code'=>$code,
			];




			if(!empty($data['id'])){

				$result=model('broker')->save($brokerData,['id'=>$data['id']]);
				if($result){
					$this->success('经纪人更新成功',url('broker/lst'));
				}else{
					$this->error('经纪人更新失败');
				}
			}


			//插入数据库
			$result=model('broker')->add($brokerData);

			if($result){
				$this->success('经纪人添加成功',url('broker/lst'));
			}else{
				$this->error('经纪人添加失败');
			}




	}


	//更新列表
	public function edit(){
		$id=input('id','','htmlspecialchars');
		if(empty($id) || !is_numeric($id)){
			$this->error('传递的数据不合法',url('broker/lst'));
		}

		$broker=model('broker')->get($id);
		echo $broker['estate'];
		@$estates_id=unserialize($broker['estate']);

		$estates=model('estate')->all($estates_id);
		//获得数据
		$result=model('city')->getCitys();

		//进行排序
		$citys=$this->lisinfo($result);


		$this->assign("citys",$citys);
		$this->assign("broker",$broker);
		$this->assign("estates",$estates);
		return view();
	}

		//删除操作
	public function delete(){
		$id=input("id",'','intval');

		if(empty($id)){
			$this->error('提交的数据不存在');
		}
		//获得数据
		$res=model('broker')->where('id',$id)->delete();
		if($res){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
		

	}



}