<?php 
namespace app\cleverest\controller;
class City extends Base{

	//管理员列表
	public function lst()
	{
		//获得排序数据
		$citys=$this->getCitys();
		$this->assign("citys",$citys);
		
		return view();
	}

	//添加列表
	public function add()
	{
			$citys=$this->getCitys();
			$this->assign('pid',empty(session('city_pid'))?0:session('city_pid'));
			$this->assign("citys",$citys);
			return view();
		
	}


	//分类排序
	public function getCitys(){
			//获得数据
			$result=model('city')->getCitys();
			//进行排序
			$citys=$this->lisinfo($result);
			return $citys;
	}

	public function save(){
		if(!request()->isPost()){
			$this->error('提交的数据有误');
		}

		//获得数据进行过滤
			$data=input('post.','','htmlspecialchars');
			

			//进行validate验证

			$validate=validate('city');

			if(!$validate->check($data)){
				$this->error($validate->getError());
			}

			//进行分类过滤

			$cityData=[
				'name'=>$data['name'],
				'pid'=>intval($data['pid']),
			];

			session('city_pid',$cityData['pid']);
			
			if(!empty($data['id'])){

				try{
					$result=model('city')->save($cityData,['id'=>$data['id']]);
				}catch(\Exception $e){
					$this->error($e->Message());
				}



				if($result){
					$this->success('城市更新成功',url('city/lst'));
				}else{
					$this->error('城市更新失败');
				}
			}


			//插入数据库
			try{
				$result=model('city')->add($cityData);
			}catch(\Exception $e){
				$this->error($e->Message());
			}

			if($result){
				$this->success('城市添加成功');
			}else{
				$this->error('城市添加失败');
			}



	}


	//更新列表
	public function edit(){
		$id=input('id','','htmlspecialchars');
		if(empty($id) || !is_numeric($id)){
			$this->error('传递的数据不合法',url('city/lst'));
		}

		$city=model('city')->get($id);

		//获得排序数据
		$citys=$this->getCitys();

		$this->assign("citys",$citys);
		$this->assign("city",$city);
		return view();
	}

	

	//删除操作
	public function delete(){
		$id=input("id",'','intval');

		if(empty($id)){
			$this->error('提交的数据不存在');
		}
		//获得数据
		$result=model('city')->getCitys();
		

		$arr=$this->querySubcategory($result,$id);


		foreach($arr as $v){
			$res=model('city')->where('id',$v)->delete();
		}
		if($res){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
		

	}
}