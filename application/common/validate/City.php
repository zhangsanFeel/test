<?php 
namespace app\common\validate;
use think\Validate;
class City extends Validate{
	protected $rule=[
		'name'=>'require|max:100|unique:city',
		'pid'=>'require',
		'id'=>'number',
	];
	protected $message=[
		'name.require'=>"城市名称不能为空",
		'name.max'=>"长度不得过长",
		'name.unique'=>'城市名称不能重复',
		'pid.require'=>'分类不能为空',
		'id.number'=>'数据类型错误', 
	];

}