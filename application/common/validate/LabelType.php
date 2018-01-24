<?php 
namespace app\common\validate;
use think\Validate;
class LabelType extends Validate{
	protected $rule=[
		'label_name'=>'require|max:100|unique:label_type',
		'id'=>'number'
	];
	protected $message=[
		'label_name.require'=>"标签分类名称不能为空",
		'label_name.max'=>"长度不得过长",
		'label_name.unique'=>'标签分类名称不能重复',
		'id.number'=>'数据类型错误',
	];

}