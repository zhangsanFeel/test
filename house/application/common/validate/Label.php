<?php 
namespace app\common\validate;
use think\Validate;
class Label extends Validate{
	protected $rule=[
		'name'=>'require|max:100|unique:label',
		'type_id'=>'require|number',
		'id'=>'number'
	];
	protected $message=[
		'name.require'=>"标签名称不能为空",
		'name.max'=>"长度不得过长",
		'name.unique'=>'标签名称不能重复',
		'type_id.require'=>'分类必填不能为空',
		'type_id.number'=>'分类格式不正确',
		'id.number'=>'数据类型错误',
	];

}