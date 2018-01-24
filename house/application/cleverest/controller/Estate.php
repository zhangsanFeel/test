<?php 
namespace app\cleverest\controller;
class Estate extends Base{
	//管理员列表
	public function lst(){
		//获得排序数据
		$estates=model('Estate')->getEstates();
		$this->assign("estates",$estates);
		return view();
	}

	//添加列表
	public function add(){

			//获得数据
			$result=model('city')->getCitys();
			//进行排序
			$citys=$this->lisinfo($result);
			//添加的父类id
			$this->assign('pid',empty(session('city_pid'))?0:session('city_pid'));

			$this->assign("citys",$citys);
			return view();
		
	}


	//分类排序
	public function getEstates(){
			//获得数据
			$result=model('Estate')->getEstates();
			//进行排序
			$estates=$this->lisinfo($result);
			return $estates;
	}

	public function save(){

		if(!request()->isPost()){
			$this->error('提交的数据有误');
		}

			//获得数据进行过滤
			$data=input('post.','','htmlspecialchars');
			

			//进行validate验证

			$validate=validate('Estate');

			if(!$validate->check($data)){
				$this->error($validate->getError());
			}

			

			//获得city_path 
			$citys=model('city')->getCitys();
			$city_path=$this->getCityPath($data['city_id']);
			//进行分类过滤
			$estateData=[
				'name'=>$data['name'],
				'city_id'=>intval($data['city_id']),
				'city_path'=>serialize($city_path),
			];



			session('city_pid',$estateData['city_id']);

			if(!empty($data['id'])){

				$result=model('Estate')->save($estateData,['id'=>$data['id']]);
				if($result){
					$this->success('小区更新成功',url('estate/lst'));
				}else{
					$this->error('小区更新失败');
				}
			}


			//插入数据库
			$result=model('Estate')->add($estateData);

			if($result){
				$this->success('小区添加成功');
			}else{
				$this->error('小区添加失败');
			}



	}


	//更新列表
	public function edit(){
		$id=input('id','','htmlspecialchars');
		if(empty($id) || !is_numeric($id)){
			$this->error('传递的数据不合法',url('estate/lst'));
		}

		$estate=model('Estate')->get($id);


		//获得数据
		$result=model('city')->getCitys();
		//进行排序
		$citys=$this->lisinfo($result);


		$this->assign("citys",$citys);
		$this->assign("estate",$estate);
		return view();
	}

	


}