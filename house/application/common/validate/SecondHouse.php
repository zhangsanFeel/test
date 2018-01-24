<?php 
namespace app\common\validate;
use think\Validate;
class SecondHouse extends Validate{
	protected $rule=[
		'title'=>'require|max:120',
		'estate_id'=>'require|number',
		'price'=>'require|number|max:10',
		'proportion'=>'require|number|max:10',
		'room'=>'require|number|max:2',
		'hall'=>'require|number|max:2',
		'toilet'=>'require|number|max:2',
		'floor'=>'require|number|max:5',
		'all_floor'=>'require|number|max:5',
		'orientation'=>'require|number|max:2',
		'prop_age'=>'require|number|max:2',
		'prop_type'=>'require|number|max:2',
		'certificate'=>'require|number|max:2',
		'decorate'=>'require|number|max:2',
		'activate_time'=>'require|number|max:5',
		'see_house'=>'require|max:100',
		'lift'=>'array',
		'label'=>'array',
		'selling_points'=>'require',
		'house_type'=>'require',
		'estate_desc'=>'require',
		'id'=>'number',
		'purpose'=>'require|number|max:2',  /*房屋类型*/
	];
	protected $message=[

		'title.max'=>"长度不得过长",
		'id.number'=>'数据类型错误',

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


		'prop_age.require'=>'产权年限不能为空',
		'prop_age.number'=>'产权年限输入的数据类型错误',
		'prop_age.max'=>'产权年限输入的数据类型错误',

		'prop_type.require'=>'产权类型不能为空',
		'prop_type.number'=>'产权类型输入的数据类型错误',
		'prop_type.max'=>'产权类型输入的数据类型错误',

		'certificate.require'=>'房屋证件不能为空',
		'certificate.number'=>'房屋证件输入的数据类型错误',
		'certificate.max'=>'房屋证件输入的数据类型错误',

		'decorate.require'=>'装修情况不能为空',
		'decorate.number'=>'装修情况输入的数据类型错误',
		'decorate.max'=>'装修情况输入的数据类型错误',

		'activate_time.require'=>'建成时间不能为空',
		'activate_time.number'=>'建成时间输入的数据类型错误',
		'activate_time.max'=>'建成时间输入的数据类型错误',

		'see_house.require'=>'看房时间不能为空',
		'see_house.number'=>'看房时间输入的数据类型错误',
		'see_house.max'=>'看房时间输入的数据类型错误',


		'lift.array'=>'数据类型有误',
		'label.array'=>'数据类型有误',
		'selling_points.require'=>'核心卖点不能为空',
		'selling_points.max'=>'核心卖点输入的过长',

		'house_type.require'=>'户型介绍不能为空',
		'house_type.max'=>'户型介绍输入的过长',

		'estate_desc.require'=>'小区介绍不能为空',
		'estate_desc.max'=>'小区介绍输入的过长',
	/////////////////////////////////
		'orientation.require'=>'朝向不能为空',
		'orientation.number'=>'朝向输入的数据类型错误',
		'orientation.max'=>'朝向输入的数据类型错误',
		'purpose.require'=>'房屋类型不能为空',
		'purpose.number'=>'房屋类型输入的数据类型错误',
		'purpose.max'=>'房屋类型输入的数据类型错误',////

	];

	protected $scene=[
		
	];

}