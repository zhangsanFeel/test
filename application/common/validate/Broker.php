<?php 
namespace app\common\validate;
use think\Validate;
class Broker extends Validate{
	protected $rule=[
		'username'=>'require|max:32',
		'password'=>'require|max:32|alphaNum',
		'email'=>'require|email|unique:broker',
		'phone'=>'require|number|length:11|unique:broker',
		'position'=>'require|number',
		'entry_time'=>'require',
		'estates'=>'require',
		'id'=>'number',
	];
	protected $message=[
		'name.require'=>"经纪人姓名不能为空",
		'name.max'=>"经纪人姓名长度不得过长",
		'phone.unique'=>'用户名或者手机号已被注册',
		'password.alphaNum'=>'密码只能是字母和数字组成',
		'password.max'=>'密码不能过长',
		'password.require'=>'密码不能为空',
		'phone.require'=>'手机号不能为空',
		'phone.number'=>'手机号只能输入数字',
		'phone.length'=>'手机号格式不正确',
		'position.require'=>'职位必填',
		'position.number'=>'职位格式不正确',
		'entry_time.require'=>'入职时间不能为空',
		'estate_id.require'=>'主要小区不能为空',
		'email.require'=>'邮箱必填',
		'email.email'=>'邮箱格式不正确',
		'email.unique'=>'邮箱不能重复',
		'id.number'=>'数据类型错误', 
	];

}


