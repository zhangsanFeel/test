<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

//排序的一些样式
function getSubTree($data){
	if(empty($data)){
		return false;
	}
    return  str_repeat('----|' , $data['level']) . $data['name'] . '<br/>';;
}




//状态的样式

function status($status){
	

	switch ($status) {
		case 1:
			return "<span class='btn btn-success'>正常</span>";
			break;
		case 0:
			return "<span class='btn btn-warning'>禁用</span>";
			break;
		case -1:
		return "<span class='btn btn-danger'>下架</span>";
		break;
		default:
			# code...
		return false;
			break;
	}
}


//type类型选中

function city_pid($city_pid,$pid){
	if($city_pid==$pid){
		return "selected='selected'";
	}else{
		return '';
	}
}


//查询所属商圈

function city_name($city_id){
	if(empty($city_id)){
		return '';
	}

	$city_name=model('city')->where('id',$city_id)->value('name');

	return empty($city_name)?'':$city_name;

}

//查询带看经纪人名称
function broker_name($broker_id){
	if(empty($broker_id)){
		return '';
	}
	$city_name=model('broker')->where('id',$broker_id)->value('username');

	return empty($city_name)?'':$city_name;
}

//查询所属小区

function estate_name($estate_id){
	if(empty($estate_id)){
		return '';
	}

	$estate_name=model('estate')->where('id',$estate_id)->value('name');

	return empty($estate_name)?'':$estate_name;

}



//查询所属标签组

function label_type_name($type_id){
	if(empty($type_id)){
		return '';
	}

	$label_name=model('label_type')->where('id',$type_id)->value('label_name');

	return empty($label_name)?'':$label_name;
}



//api 转换成 json

function show($status,$message,$data=[]){

	
	$data= [
	 'status'=>intval($status),
	 'message'=>$message,
	 'data'=>$data,
	];
	return json($data);
}


//装修情况
function decorate($decorate){
	switch ($decorate) {
		case 1:
			return "毛坯";
			break;
		case 2:
			return "简单装修";
			break;
		case 3:
		return "中等装修";
		break;
		case 4:
		return "精装修";
		break;
		case 5:
		return "豪华装修";
		break;
		default:
			# code...
		return false;
			break;
	}
}
//朝向
function orientation($orientation){
	switch ($orientation) {
		case 1:
			return "栋";
			break;
		case 2:
			return "西";
			break;
		case 3:
		return "南";
		break;
		case 4:
		return "北";
		break;
		case 5:
		return "东南";
		break;
		case 6:
		return "东北";
		break;
		case 7:
		return "西南";
		break;
		case 8:
		return "西北";
		break;
		case 9:
		return "南北";
		break;
		case 10:
		return "东西";
		break;
		default:
			# code...
		return false;
			break;
	}
}

//选择租房方式

function rent_type($rent_type){
	switch ($rent_type) {
		case 1:
			return "整租";
			break;
		case 2:
			return "合租";
			break;
		default:
			# code...
		return false;
			break;
	}
}


//房屋类型
function purpose($purpose){
	switch ($purpose) {
		case 1:
			return "普通住宅";
			break;
		case 2:
			return "公寓";
			break;
		case 3:
		return "别墅";
		break;
		case 4:
		return "平房/四合院";
		break;
		case 5:
		return "其他";
		break;
		default:
			# code...
		return false;
			break;
	}
}

//房屋年限
function certificate($certificate){
	switch ($certificate) {
		case 1:
			return "无证件";
			break;
		case 2:
			return "证满两年";
			break;
		case 3:
		return "证满五年";
		break;
		default:
			# code...
		return false;
			break;
	}
}


//产权年限
function prop_age($prop_age){
	switch ($prop_age) {
		case 1:
			return "40年";
			break;
		case 2:
			return "50年";
			break;
		case 3:
		return "70年";
		break;
		default:
			# code...
		return false;
			break;
	}
}
//产权类型
function prop_type($prop_type){
	switch ($prop_type) {
		case 1:
			return "商品房";
			break;
		case 2:
			return "商住两用";
			break;
		case 3:
		return "经济适用房";
		break;
		case 4:
		return "使用权";
		break;
		case 5:
		return "公房";
		case 6:
		return "其他";
		break;
		default:
			# code...
		return false;
			break;
	}
}



//选择函数

function bilibili($type,$value){

	if($type && $value){
		if($type==$value){
		return "selected='selected'";
		}else{
			return '';
		}
	}else{
		return '';
	}
	
}


function childvery($type,$value){
	if($type && $value ){
		$array=unserialize($type);
		if($array){
			if(in_array($value,$array)){
			return "checked='checked'";
			}else{
				return '';
			}	
		}else{
			return '';
		}
		
	}else{
		return '';
	}
	
}



//时间转换
function create_time($create_time){
	$time=strtotime($create_time);//发布时间
	$new_time=time();//当前时间
	$new_time-=$time;


	$timedate=floor($new_time/(3600*24))+1;

	return  $timedate.'天前发布';

}

//计算单价
function price($price,$proportion){
	if(empty($price) || empty($proportion)){
		return false;
	}
	$price=$price*10000;
	$price= $price/$proportion;
	return floor($price);
}


//

function fitervalue($fitervalue){
	$str='';


	if(!empty($fitervalue['prop_type'])){
			$fitervalue['price']?$fitervalue['price']=$fitervalue['price']."万":'';
	}else{
		$fitervalue['price']?$fitervalue['price']=$fitervalue['price']."元":'';
	}
	

	$fitervalue['city_id']?$fitervalue['city_id']=city_name($fitervalue['city_id']):'';

	$fitervalue['proportion']?$fitervalue['proportion']=$fitervalue['proportion'].'㎡':'';

	$fitervalue['room']?$fitervalue['room']=$fitervalue['room'].'室':'';
	$fitervalue['orientation']?$fitervalue['orientation']=orientation($fitervalue['orientation']):'';
	$fitervalue['purpose']?$fitervalue['purpose']=purpose($fitervalue['purpose']):'';
	$fitervalue['decorate']?$fitervalue['decorate']=decorate($fitervalue['decorate']):'';
	empty($fitervalue['prop_type'])?'':$fitervalue['prop_type']=prop_type($fitervalue['prop_type']);


	foreach($fitervalue as $key=>$value){
		if($value!=''){
			$str.= "<a href=\"javascript:Filter('".$key."','');\" >".$value."<i>X</i></a>";	
		}
		
	}

	return $str;

	
}


//获得拖id
 function img($id,$classify=1){
 	if(empty($id) || empty($classify)){
 		return false;
 	}
 	$data=[
 	'classify'=>$classify,
 	'house_id'=>$id,

 	];

 	$path=model('img')->where($data)->value('path');

 	if($path){
 		return $path;
 	}else{
 		return false;
 	}
 }


 //楼层

function floors($floor,$all_floor){
	if($floor<=6 && $floor>0){
		$str="底层(共".$all_floor."层)";
	}elseif($floor<=18 && $floor>6){
		$str="中层(共".$all_floor."层)";
	}elseif($floor>18){
		$str="高层(共".$all_floor."层)";
	}else{
		$str='';
	}
	return $str;

}


//获得拼装的路径
function estate($estate_id,$type=1){
	if(empty($estate_id)){
		return false;
	}
	$estate=model('estate')->get($estate_id);
	if(empty($estate)){
		return false;
	}

	$city_path=unserialize($estate['city_path']);

	$str='';
	foreach($city_path as $value){
		$city=model('city')->where('id',$value)->value('name');

		$str.=$city.'--';
	}

	if($type==2){
		$str='';
		foreach($city_path as $value){
		$city=model('city')->where('id',$value)->value('name');

		$str.=$city.'二手房 > ';
		}
		return $str.estate_name($estate_id).' > 当前房源 ';
	}


	if($type==3){
		$str='';
		foreach($city_path as $value){
		$city=model('city')->where('id',$value)->value('name');

		$str.=$city.'租房 > ';
		}
		return $str.estate_name($estate_id).' > 当前房源 ';
	}

	return substr($str,2).estate_name($estate_id);
}



//获得配套设备
function lifts($lift){
	$lift=unserialize($lift);
	$str='';

	if(in_array(1,$lift)){
		$str.='<span class="tag-fense">储藏室</span>';
	}
	if(in_array(2,$lift)){
		$str.='<span class="tag-success">车位</span>';
	}

	if(in_array(3,$lift)){
		$str.='<span class="tag-info">户口</span>';
	}

	if(in_array(4,$lift)){
		$str.='<span class="tag-blue">电梯</span>';
	}
	return $str;
}

//获得入职时间
function entry_time($entry_time){
	if(empty($entry_time)){
		return false;
	}
	$time=time();
	$time-=$entry_time;
	$ye=365*60*60*24;
	$entry=intval($time/$ye);
	if(empty($entry)){
		$str='入职不到一年';
	}else{
		$str="入职".$entry."年";
	}
	return $str;
}

//获得重点小区
function emphasisEstate($estate){
	$estate=unserialize($estate);
	$estate=model('estate')->where('id','in',implode(",",$estate))->column('name');
	if($estate){
		return implode(' , ',$estate);	
	}else{
		return false;
	}
}

//获得重点城市
function emphasisCity($city_id){
	$city_id=unserialize($city_id);
	$city=model('city')->where('id','in',implode(",",$city_id))->column('name');
	if($city){
		return implode(' , ',$city);	
	}else{
		return false;
	}
}


//获得职位
function position($position){
	switch ($position) {
			case 1:
				return "商品";
				break;
			case 2:
				return "商住两用";
				break;
			case 3:
			return "经济适用";
			break;
			case 4:
			return "使用权";
			break;
			case 5:
			return "公";
			case 6:
			return "其他";
			break;
			default:
				# code...
			return false;
				break;
		}
}


//获得商铺名称
function location_name($location_id){
	if(empty($location_id)){
		return false;
	}

	$location_name=model('location')->where('id',$location_id)->value('name');

	if($location_name){
		return $location_name;
	}else{
		return false;
	}
}


//付款方式

function payment_type($payment_type){
	if(empty($payment_type)){
		return false;
	}

	switch ($payment_type) {
		case 1:
			return "付1押1";
			break;
		case 2:
			return "付1押2";
			break;
		case 3:
		return "付2押1";
		break;
		case 4:
		return "付2押2";
		break;
		case 5:
		return "付3押1";
		break;
		case 6:
		return "付3押2";
		break;
		case 7:
		return "面议";
		break;
		case 8:
		return "半年付";
		break;
		case 9:
		return "年付";
		break;
		case 10:
		return "半年付押1";
		break;
		case 11:
		return "半年付不押";
		break;
		case 12:
		return "年付不押";
		break;
		case 13:
		return "年付押1";
		break;

		default:
			# code...
		return false;
			break;
	}

}


function setSax($setSax,$rent_type){
	if(empty($setSax) || empty($rent_type) || $rent_type!=2){
		return false;
	}



	switch ($setSax) {
		case 1:
			return "男女不限";
			break;
		case 2:
			return "限男生";
			break;
		case 3:
		return "限女生";
		break;
		case 4:
		return "限夫妻";
		break;
		default:
			# code...
		return false;
			break;
	}
}


function actuality($actuality){
	if(empty($actuality)){
		return false;
	}


	switch ($actuality) {
		case 1:
			return "目前闲置";
			break;
		case 2:
			return "现已居住";
			break;
		default:
			# code...
		return false;
			break;
	}
}


function equipment($lift){
	if(empty($lift)){
		return false;
	}

	$lift=unserialize($lift);
	if(empty($lift) || !is_array($lift)){
		return false;
	}

	$str='';
	$index="/house/public/static/index";

	if(in_array(1,$lift)){
		$str.='<li><img src="'.$index.'/images/logo/bed12.png" alt="" /><p>床</p></li>';
	}
	if(in_array(2,$lift)){
		$str.='<li><img src="'.$index.'/images/logo/tv.png" alt="" /><p>电视</p></li>';
	}

	if(in_array(3,$lift)){
		$str.='<li><img src="'.$index.'/images/logo/airconditioner.png" alt="" /><p>空调</p></li>';
	}

	if(in_array(4,$lift)){
		$str.='<li><img src="'.$index.'/images/logo/fridge.png" alt="" /><p>冰箱</p></li>';
	}
	if(in_array(5,$lift)){
		$str.='<li><img src="'.$index.'/images/logo/aquarius.png" alt="" /><p>热水器</p></li>';
	}
	if(in_array(6,$lift)){
		$str.='<li><img src="'.$index.'/images/logo/wifi76.png" alt="" /><p>宽带</p></li>';
	}
	if(in_array(7,$lift)){
		$str.='<li><img src="'.$index.'/images/logo/Cooking_244px_1198194_easyicon.net.png" alt="" /><p>可做饭</p></li>';
	}
	if(in_array(8,$lift)){
		$str.='<li><img src="'.$index.'/images/logo/Toilet_paper_343px_1198793_easyicon.net.png" alt="" /><p>独立卫生间</p></li>';
	}
	if(in_array(9,$lift)){
		$str.='<li><img src="'.$index.'/images/logo/sun_1495px_1190033_easyicon.net.png" alt="" /><p>阳台</p></li>';
	}
	if(in_array(10,$lift)){
		$str.='<li><img src="'.$index.'/images/logo/clothes20.png" alt="" /><p>衣柜</p></li>';
	}
	if(in_array(11,$lift)){
		$str.='<li><img src="'.$index.'/images/logo/Sofa_338px_1198757_easyicon.net.png" alt="" /><p>沙发</p></li>';
	}
	if(in_array(12,$lift)){
		$str.='<li><img src="'.$index.'/images/logo/washing_machine.png" alt="" /><p>洗衣机</p></li>';
	}
	return $str;


}


function phone($phone){
	if(empty($phone)){
		return false;
	}
	$str='';
	$str.=substr($phone,0,3);
	$str.="*******";
	$str.=substr($phone,-1);
	return $str;
}



function type($type){
	if($type==1){
	    $house="second_house";
	}elseif($type==2){
	    $house="rent_house";    
	}else{
	    return false;
	}

	return $house;
}


function sex($sex){
	if($sex==1){
	    $sex="先生";
	}elseif($sex==2){
	    $sex="女士";    
	}else{
	    return false;
	}

	return $sex;
}


function title($house_id,$house_type){
	if(empty($house_id) || empty($house_type) ){
		return false;
	}

	
	if($house_type==1){
		$house=model('second_house')->get($house_id);	
		$str='<a href="'.url('index/second_house/main',['id'=>$house_id]).'"  target="_blank" class="red">' . estate_name($house['estate_id']).' '. $house['room']."室".$house['room']."厅 " . decorate($house['decorate']).' ' ;
		$str.=floatval($house['price']).'万</a>';
	}elseif($house_type==2){
		$house=model('rent_house')->get($house_id);	

		$str='<a href="'.url('index/rent_house/main',['id'=>$house_id]).'"  target="_blank"  class="red">' . estate_name($house['estate_id']).' '. $house['room']."室".$house['room']."厅 " . decorate($house['decorate']).' ' ;

		$str.= floatval($house['price']) .'元/月 '.payment_type($house['payment_type']).'</a>';
	}else{
		return false;
	}
	return $str;
}


function house_type($status){

	if($status==1){
		$str="带看已完成";
	}elseif($status==2){
		$str="等待用户评分";
	}elseif($status==3){
		$str="未有经纪人回复";
	}elseif($status==4){
		$str="经纪人已接受委托";
	}else{
		return false;
	}
	return $str;
}


function type_name($house_type){
	if($house_type==1){
		$str="二手房";
	}elseif($house_type==2){
		$str="租房";
	}else{
		$str="";
	}
	return $str;
}

function title_substr($title,$len=20){
	if(empty($title)){
		return false;
	}

	$len=mb_strlen($title,"utf8");
	if($len>$len){
		return mb_substr($title,0,$len,'utf8').'...';
	}else{
		return $title;
	}
	
}


//评分所占的查询百分比

function gradeCount($gradeCount,$grade){
	
	if(empty($gradeCount) || empty($grade)){
		return false;
	}
	//列如  5/50 =0.1 
	$baifenbi=round($gradeCount[$grade] / $gradeCount['count'],2);
	// 0.1*100%  = 百分之10 
	return $baifenbi * 100;
}