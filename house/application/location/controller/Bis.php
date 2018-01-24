<?php 
namespace app\location\controller;
class Bis extends Base{

	function getCityByParentId(){

		$city_id=input('post.id','','intval');
		if(empty($city_id)){
			return show('0','error,数据不存在',[]);
		}
		//查询商圈下的小区

		$estates=model('estate')->getNorMalEstates($city_id);

		if($estates){
			return show('1','success',$estates);	
		}else{
			return show('0','error,数据不存在',[]);
		}

		
	}
	


}