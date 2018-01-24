<?php 
namespace app\broker\controller;
class SecondHouse extends Base{

	
	//管理员列表
	public function lst(){
		//获得排序数据
		$second_houses=model('second_house')->getSecondHouse();
		$this->assign("second_houses",$second_houses);
		return view();
	}

	//添加列表
	public function add(){
			//二手房小区信息
			$estates=model('estate')->select();
			//二手房标签信息
			
			$this->assign("estates",$estates);
			return view();
		
	}




	public function save(){

		if(!request()->isPost()){
			$this->error('提交的数据有误');
		}	

		$file=request()->file("img");

			//获得数据进行过滤
			$data=input('post.');
			
			//验证
			$validate=validate('second_house');

			if(!$validate->check($data)){
				 $this->error($validate->getError()); 
			}
			$house_code=time().rand(111111,999999);
			//信息重装
			$secondData=[
				'title'=>$data['title'],
				'estate_id'=>$data['estate_id'],
				'see_house'=>$data['see_house'],
				'room'=>$data['room'],
				'hall'=>$data['hall'],
				'toilet'=>$data['toilet'],
				'purpose'=>$data['purpose'],
				'decorate'=>$data['decorate'],
				'orientation'=>$data['orientation'],
				'prop_age'=>$data['prop_age'],
				'prop_type'=>$data['prop_type'],
				'certificate'=>$data['certificate'],
				'floor'=>$data['floor'],
				'all_floor'=>$data['all_floor'],
				'proportion'=>$data['proportion'],
				'activate_time'=>$data['activate_time'],
				'price'=>$data['price'],
				'broker_id'=>$this->getLogins()->id,
				'broker_name'=>$this->getLogins()->username,
				'selling_points'=>$data['selling_points'],
				'estate_desc'=>$data['estate_desc'],
				'house_type'=>$data['house_type'],
				'mating'=>$data['mating'],
				'mentality'=>$data['mentality'],
				'lift'=>  empty($data['lift'])? '':serialize($data['lift']),
				'label'=>  empty($data['label'])? '':serialize($data['label']),
				'house_code'=> $house_code,

			];

			


			if(!empty($data['delimg'])){
				foreach($data['delimg'] as $v){

					$img=model('img')->where('id',$v)->value('path');
					@unlink('uploads'.DS.$img);
					model('img')->where('id',$v)->delete();
				}
			}


			

			if(!empty($data['id'])){

				
				try{
				//插入数据库
				$result=model('second_house')->save($secondData,['id'=>$data['id']]);
		
				}catch(\Exception $e){
					$this->error($e->Message());
				}
				if($result){
					$str='二手房更新成功';
				}else{
					$str='二手房更新失败';
				}
			}else{

				try{
				//插入数据库
				$result=model('second_house')->add($secondData);
	
				}catch(\Exception $e){
					$this->error($e->Message());
				}
				if($result){
					$str='二手房添加成功';
				}else{
					$str='二手房添加失败';
				}


				
			}



			//进行validate验证
			if($file=request()->file("img")){
				//拼装数组
				$imgData=[
					'classify'=>1,
					'create_time'=>time(),
					'update_time'=>time(),
					'status'=>1,
					];


				//是否是更新图片信息
				if(!empty($data['id'])){
					$imgData['house_id']=$data['id'];
				}else{
					$imgData['house_id']=$result;
				}


				foreach($file as $vo){
					$info=$vo->move("uploads");
					if($info){
						//获得名称
						 $path= $info->getSaveName();

						 $imgData['path']=$path;
						try{
							//插入数据库
							$res=db('img')->insert($imgData);

						}catch(\Exception $e){
							$this->error($e->Message());
						}

					}else{
						$this->error($vo->getError());
					}
				}	
				}

			//	
			if($result){
				$this->success($str,url('second_house/lst'));
			}else{
				$this->error($str);
			}	


	}


	


	//更新列表
	public function edit(){
		$id=input('id');
		if(empty($id) || !is_numeric($id)){
			$this->error('传递的数据不合法',url('second_house/lst'));
		}

		$second_house=model('second_house')->get($id);

		if(!$second_house){
			$this->error('数据不存在,或者已被删除',url('second_house/lst'));
		}

		//二手房小区信息
		$estates=model('estate')->select();
		//获得二手房图片信息
		$imgs=model('img')->getNormalImages($id,1);	
	
		$this->assign("estates",$estates);
		$this->assign("second_house",$second_house);
		$this->assign("imgs",$imgs);
		return view();
	}

		//删除操作
	public function delete(){
		$id=input("id",'','intval');

		if(empty($id)){
			$this->error('提交的数据不存在');
		}

		
		//删除图片
		$imgs=model('img')->field('id,path')->where('id',$id)->select();
		if($imgs){
			foreach($imgs as $v){
			@unlink('uploads'.DS.$v['path']);
			model('img')->where('id',$v['id'])->delete();
			}
		
		}
		//获得数据
		$res=model('second_house')->where('id',$id)->delete();
		


		if($res){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
		

	}



}