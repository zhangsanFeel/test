<?php 
namespace app\common\validate;
use think\Validate;
class Location extends Validate{
	protected $rule=[
		'name'=>'require|max:100|unique:location',
		'city_id'=>'require|number',
		'broker_username'=>'require|max:32|alphaNum',
		'broker_password'=>'require|max:32|alphaNum',
		'broker_tel'=>'require|number|length:11',
		'address'=>'require',
		'location_tel'=>'number',
		'id'=>'number'
	];
	protected $message=[
		'name.require'=>"店铺名称不能为空",
		'name.max'=>"长度不得过长",
		'name.unique'=>'店铺名称不能重复',
		'city_id.require'=>'地址不能为空',
		'city_id.number'=>'地址数据类型错误',
		'broker_username.require'=>'用户名不能为空',
		'broker_username.max'=>'用户名过长',
		'broker_username.alphaNum'=>'用户名只能由数字和字母组成',
		'broker_password.require'=>'密码不能为空',
		'broker_password.max'=>'密码过长',
		'broker_password.alphaNum'=>'密码只能由数字和字母组成',
		'broker_tel.require'=>'店长电话不能为空',
		'broker_tel.number'=>'电话格式不正确',
		'broker_tel.length'=>'电话格式不正确',
		'address.require'=>'详细地址必填',
		'location_tel.number'=>'店铺电话只能为数字',
		'id.number'=>'数据类型错误',
	];

	protected $scene=[
		'edit'=>['name','city_id','city_id','broker_username','broker_tel','address','location_tel','id'],
	];

}