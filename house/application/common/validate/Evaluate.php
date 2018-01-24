<?php 
namespace app\common\validate;
use think\Validate;
class Evaluate extends Validate{
	protected $rule=[
		'name'=>'require|max:100|unique:estate',
		'city_id'=>'require',
		'id'=>'number'
	];
	protected $message=[
		'name.require'=>"小区名称不能为空",
		'name.max'=>"长度不得过长",
		'name.unique'=>'小区名称不能重复',
		'city_id.require'=>'分类不能为空',
		'id.number'=>'数据类型错误',
	];

}