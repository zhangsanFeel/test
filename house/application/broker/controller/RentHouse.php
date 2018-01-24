<?php 
namespace app\broker\controller;
class RentHouse extends Base{
	//管理员列表
	public function lst(){
		//获得排序数据
		$rents=model('rent_house')->getRentHouse();
		$this->assign("rents",$rents);
		return view();
	}

	//添加列表
	public function add(){
			//二手房小区信息
			$estates=model('estate')->select();
				
			
			$this->assign("estates",$estates);
			$this->assign("labels",$labels);
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
			$validate=validate('rent_house');

			if(!$validate->check($data)){
				$this->error($validate->getError());
			}
			$house_code = time() . rand(111111, 999999);
			//信息重装
			$rentData=[
				'title'=>$data['title'],
				'rent_type'=>$data['rent_type'], 	//1为整租 ，2为合租
				'estate_id'=>$data['estate_id'],
				'room'=>$data['room'],
				'hall'=>$data['hall'],
				'toilet'=>$data['toilet'],
				'purpose'=>$data['purpose'],
				'decorate'=>$data['decorate'],
				'orientation'=>$data['orientation'],
				'floor'=>$data['floor'],
				'all_floor'=>$data['all_floor'],
				'proportion'=>$data['proportion'],
				'actuality'=>$data['actuality'],
				'price'=>$data['price'],
				'broker_id'=>$this->getLogins()->id,
				'broker_name'=>$this->getLogins()->username,
				'payment_type'=>$data['payment_type'], //付款方式
				'lightspot'=>$data['lightspot'],
				'house_type'=>$data['house_type'],
				'decorate_desc'=>$data['decorate_desc'],
				'mating'=>$data['mating'],
				'house_code'=> $house_code,
				'estate_desc'=>$data['estate_desc'],
				'lift'=>  empty($data['lift'])? '':serialize($data['lift']),
				'label'=>  empty($data['label'])? '':serialize($data['label']),
			];


			if($data['rent_type']==2){
				$rentData['property']=$data['property'];
				$rentData['setSax']=$data['setSax'];
			}


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
				$result=model('rent_house')->save($rentData,['id'=>$data['id']]);
		
				}catch(\Exception $e){
					$this->error($e->Message());
				}
				if($result){
					$str='租房更新成功';
				}else{
					$str='租房更新失败';
				}
			}else{

				try{
				//插入数据库
				$result=model('rent_house')->add($rentData);
	
				}catch(\Exception $e){
					$this->error($e->Message());
				}
				if($result){
					$str='租房添加成功';
				}else{
					$str='租房添加失败';
				}


				
			}



			//进行validate验证
			if($file=request()->file("img")){
				//拼装数组
				$imgData=[
					'classify'=>2, //2 为租房  1的意思是 二手房
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
				$this->success($str,url('rent_house/lst'));
			}else{
				$this->error($str);
			}	


	}


	//更新列表
	public function edit(){
		$id=input('id');
		if(empty($id) || !is_numeric($id)){
			$this->error('传递的数据不合法',url('rent_house/lst'));
		}

		$rent=model('rent_house')->get($id);

		if(!$rent){
			$this->error('数据不存在,或者已被删除',url('rent_house/lst'));
		}

		//租房小区信息
		$estates=model('estate')->select();
		//获得租房图片信息
		$imgs=model('img')->getNormalImages($id,2);	
	
		$this->assign("estates",$estates);
		$this->assign("labels",$labels);
		$this->assign("rent",$rent);
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
		$res=model('rent_house')->where('id',$id)->delete();
		


		if($res){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
		

	}



}