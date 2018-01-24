<?php 
namespace app\common\validate;
use think\Validate;
class RentHouse extends Validate{
	protected $rule=[
		'title'=>'require|max:120',
		'rent_type'=>'require|number|max:2',
		'payment_type'=>'require|number|max:2',
		'actuality'=>'require|number|max:2',

		'lightspot'=>'require|max:255',
		'house_type'=>'require|max:255',
		'decorate_desc'=>'require|max:255',
		'mating'=>'require|max:255',
		'estate_desc'=>'require|max:255',

		'proportion'=>'require|number|max:10',
		'room'=>'require|number|max:2',
		'hall'=>'require|number|max:2',
		'toilet'=>'require|number|max:2',
		'floor'=>'require|number|max:5',
		'all_floor'=>'require|number|max:5',
		'orientation'=>'require|number|max:2', /*朝向*/
		'estate_id'=>'require|number',
		'lift'=>'array',	
		'setSax'=>'require|number|max:2',
		'property'=>'require|number|max:2',
		'decorate'=>'require|number|max:2',
		'purpose'=>'require|number|max:2',  /*房屋类型*/
		'price'=>'require|number|max:10',
		'id'=>'number',
		'label'=>'array',
		'label.array'=>'数据类型有误',
	];
	protected $message=[
	/////////////////////////////////////////////////////////////////////////////////////////
		'id.number'=>'数据类型错误',
		'title.require'=>"标题不能为空",
		'title.max'=>"长度不得过长",
		



////////////////////////////////////////////////////////////////////////////////
		'estate_id.require'=>'小区不能为空',
		'estate_id.number'=>'小区输入的数据类型错误',
		'estate_id.max'=>'小区输入过长',

		'price.require'=>'价格不能为空',
		'price.number'=>'价格输入的数据类型错误',
		'price.max'=>'价格输入过长',

		'proportion.require'=>'面积不能为空',
		'proportion.number'=>'面积输入的数据类型错误',
		'proportion.max'=>'面积输入过长',

		'room.require'=>'室不能为空',
		'room.number'=>'室输入的数据类型错误',
		'room.max'=>'室输入过长',

		'hall.require'=>'厅不能为空',
		'hall.number'=>'厅输入的数据类型错误',
		'hall.max'=>'厅输入过长',

		'toilet.require'=>'卫不能为空',
		'toilet.number'=>'卫输入的数据类型错误',
		'toilet.max'=>'卫输入过长',

		'floor.require'=>'楼层不能为空',
		'floor.number'=>'楼层输入的数据类型错误',
		'floor.max'=>'楼层输入过长',

		'all_floor.require'=>'总楼层不能为空',
		'all_floor.number'=>'总楼层输入的数据类型错误',
		'all_floor.max'=>'总楼层输入过长',


		'rent_type.require'=>'租房方式不能为空',
		'rent_type.number'=>'租房方式输入的数据类型错误',
		'rent_type.max'=>'租房方式输入的数据类型错误',

		'payment_type.require'=>'付款方式不能为空',
		'payment_type.number'=>'付款方式输入的数据类型错误',
		'payment_type.max'=>'付款方式输入的数据类型错误',

		'actuality.require'=>'房屋现状不能为空',
		'actuality.number'=>'房屋现状输入的数据类型错误',
		'actuality.max'=>'房屋现状输入的数据类型错误',

		'decorate.require'=>'装修情况不能为空',
		'decorate.number'=>'装修情况输入的数据类型错误',
		'decorate.max'=>'装修情况输入的数据类型错误',

		'purpose.require'=>'房屋类型不能为空',
		'purpose.number'=>'房屋类型输入的数据类型错误',
		'purpose.max'=>'房屋类型输入的数据类型错误',////

		'orientation.require'=>'朝向不能为空',
		'orientation.number'=>'朝向输入的数据类型错误',
		'orientation.max'=>'朝向输入的数据类型错误',


		'lift.array'=>'数据类型有误',

/////////////////////////////////////////////////////////////////////////////////////////
		'lightspot.require'=>'房源亮点不能为空',
		'lightspot.max'=>'房源亮点输入的过长',

		'house_type.require'=>'户型介绍不能为空',
		'house_type.max'=>'户型介绍输入的过长',

		'estate_desc.require'=>'小区介绍不能为空',
		'estate_desc.max'=>'小区介绍输入的过长',

		'mating.require'=>'周边配套不能为空',
		'mating.max'=>'周边配套输入的过长',

		'decorate_desc.require'=>'装修描述不能为空',
		'decorate_desc.max'=>'装修描述输入的过长',

/////////////////////////////////////////
///
///
///
	];

	protected $scene=[
		
	];

}