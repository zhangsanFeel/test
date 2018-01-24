<?php 
namespace app\cleverest\controller;
class Location extends Base{

	//管理员列表
	public function lst()
	{
		//获得排序数据
		$locations=model('location')->getLocations();

		$this->assign("locations",$locations);
		
		return view();
	}

	//添加列表
	public function add()
	{
			//获得商圈信息
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

			$validate=validate('location');

			//判断是否有id，有则走第一个逻辑
			if(!empty($data['id'])){

				if(!$validate->scene('edit')->check($data)){
				$this->error($validate->getError());
				}

			}else{

				if(!$validate->check($data)){
				$this->error($validate->getError());
				}	

			}
			

			
			$code=rand(1200,9999);

			//获得city_path 
			$citys=model('city')->getCitys();
			$city_path=$this->getCityPath($data['city_id']);

			//进行分类过滤
			$locationData=[
				'name'=>$data['name'],
				'address'=>empty($data['address'])?'':$data['address'],
				'city_path'=>serialize($city_path),
				'city_id'=>$data['city_id'],
				'broker_name'=>$data['broker_name'],
				'broker_username'=>$data['broker_username'],
				'broker_password'=>md5($data['broker_password'].$code),
				'code'=>$code,
				'broker_tel'=>$data['broker_tel'],
				'location_tel'=>empty($data['location_tel'])?'':$data['location_tel'],
			];
			


			if(!empty($data['id'])){

				if(empty(input('broker_password'))){
					unset($locationData['broker_password']);
				}	
				try{
					$result=model('location')->save($locationData,['id'=>$data['id']]);
				}catch(\Exception $e){
					$this->error('数据异常',url('location/edit'));
				}

				if($result){
					$this->success('门店更新成功',url('location/lst'));
				}else{
					$this->error('门店更新失败');
				}
			}


			//插入数据库
			try{
				$result=model('location')->add($locationData);
			}catch(\Exception $e){
				$this->error('数据异常',url('location/add'));
			}

			if($result){
				$this->success('门店添加成功',url('location/lst'));
			}else{
				$this->error('门店添加失败');
			}



	}


	//更新列表
	public function edit(){
		$id=input('id','','intval');

		if(empty($id) || !is_numeric($id)){
			$this->error('传递的数据不存在',url('city/lst'));
		}

		$location=model('location')->get($id);

		//获得商圈信息
		$result=model('city')->getCitys();
		//进行排序
		$citys=$this->lisinfo($result);

		$this->assign("citys",$citys);
		$this->assign("location",$location);
		return view();
	}

	

	//删除操作
	public function delete(){
		$id=input("id",'','intval');

		if(empty($id)){
			$this->error('提交的数据不存在');
		}
		//获得数据
		$result=model('location')->getCitys();
		

		$arr=$this->querySubcategory($result,$id);


		foreach($arr as $v){
			$res=model('location')->where('id',$v)->delete();
		}
		if($res){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
		

	}
}