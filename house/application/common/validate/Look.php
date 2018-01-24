<?php 
namespace app\common\validate;
use think\Validate;
class Look extends Validate{
	protected $rule=[
		'house_type'=>'require|number',
		'house_id'=>'require|number',
		'sex'=>'require|number',
		'desc'=>'max:255',
		'phone'=>'number|length:11',
		'id'=>'require|number',
		'evaluate'=>'require|max:255',
		'grade'=>'require|in:1,2,3,4,5',
	];
	protected $message=[
		'house_type.require'=>"房屋数据类型错误",
		'house_type.number'=>"房屋数据类型错误",
		'house_id.require'=>'用户数据类型错误',
		'house_id.number'=>'用户数据类型错误',
		'desc.max'=>'描述不能过长',
		'broker_password.max'=>'密码过长',
		'broker_password.alphaNum'=>'密码只能由数字和字母组成',
		'phone.number'=>'电话格式不正确',
		'phone.length'=>'电话格式不正确',
		'id.number'=>'数据类型错误',
	];

	protected $scene=[
		'edit'=>['name','city_id','city_id','broker_username','broker_tel','address','location_tel','id'],
		'grade'=>['grade','id','evaluate'],
	];

}