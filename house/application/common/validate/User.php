<?php 
namespace app\common\validate;
use think\Validate;
class User extends Validate{
	protected $rule=[
		'username'=>'require|max:32',
		'phone'=>'require|unique:user|number|length:11',
		'password'=>'require|max:32|alphaNum',
		'password1'=>'max:32|alphaNum',
		'password2'=>'max:32|alphaNum',
		'id'=>'number',
	];
	protected $message=[
		'username.require'=>"用户名不能为空",
		'username.max'=>"用户名长度不得过长",
		'username.unique'=>'用户名不能重复',
		'username.alphaNum'=>'用户名只能是字母和数字组成',
		'password.max'=>'密码不能过长',
		'password.alphaNum'=>'密码只能是字母和数字组成',
		'password.require'=>'密码不能为空',
		'password1.max'=>'密码不能过长',
		'password1.alphaNum'=>'密码只能是字母和数字组成',
		'password2.max'=>'密码不能过长',
		'password2.alphaNum'=>'密码只能是字母和数字组成',
		'id.number'=>'数据类型错误', 
		'phone.require'=>"手机号不能为空",
		'phone.number'=>"手机号格式不正确",
		'phone.unique'=>'手机号已被注册',
		'phone.length'=>'手机号格式不正确',
	];

	protected $scene=[
	'add'=>['password','phone'],

	];

}