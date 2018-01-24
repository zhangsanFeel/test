<?php
namespace app\index\controller;

class Broker extends Base
{
    public function index()
    {
        return view();
    }

    public function user(){
    	 $id=input('id','','intval');
        if(empty($id)){
            $this->error('查看的信息不存在');
        }

        //近30天带看数量

       
        $yeasDay=model('look')->getYearLookCount();






        //发布人信息
        $broker=model('broker')->get($id);



        $this->assign('id',$id);
        $this->assign('broker',$broker);
    	return view();
    }









     //二手房列表
    public function second(){
    	$id=input('id','','intval');
    	if(empty($id)){
    		$this->error('查询的经纪人不存在');
    	}

    	$broker=model('broker')->get($id);
        $serach=input('serach');

        if($serach){
            $second=db('second_house a')->field('a.*,b.aname')->join('house_estate b','a.estate_id=b.id')->where('b.name','like',"%".$serach."%")->where('broker_id',$id)->paginate(10,false,['query'=>request()->param()]);
        }else{
            $second=db('second_house a')->field('a.*,b.name')->join('house_estate b','a.estate_id=b.id')->where('broker_id',$id)->paginate(10,false,['query'=>request()->param()]);
        }
        

        $this->assign('id',$id);
        $this->assign('second',$second);
        $this->assign('broker',$broker);
        return view();
    }

    //租房列表
    public function rent(){
        $id=input('id','','intval');
        if(empty($id)){
            $this->error('查询的经纪人不存在');
        }

        $broker=model('broker')->get($id);

        $serach=input('serach');

        if($serach){
            $second=db('rent_house a')->field('a.*,b.name')->join('house_estate b','a.estate_id=b.id')->where('b.name','like',"%".$serach."%")->where('broker_id',$id)->paginate(10,false,['query'=>request()->param()]);
        }else{
            $second=db('rent_house a')->field('a.*,b.name')->join('house_estate b','a.estate_id=b.id')->where('broker_id',$id)->paginate(10,false,['query'=>request()->param()]);
        }
        

        $this->assign('id',$id);
        $this->assign('second',$second);
        $this->assign('broker',$broker);
        return view();
    }
}
