<?php
namespace app\index\controller;

class RentHouse extends Base
{
    public function index()
    {	 
        //根据条件搜索
    	 $fields = array('city_id','price','proportion','room','orientation','purpose','decorate',"search");

         
        $fitervalue=array();
                // 把上一次已筛选的值保存在Form的隐藏域中  
                foreach($fields as $v){
                    if(input($v)){
                        $fitervalue[$v]=input($v);
                    }else{
                        $fitervalue[$v]=""; 
                    }
                }

                
        $where=$this->getWhere($fitervalue);
        //获得一级地区信息
        $regions=model('city')->getRegions(2); 

        $cityData=[];
        //把获得的一级分类拼装到数组
        foreach($regions as $region){
            $cityData[]=$region->id;
        }
      
        //获得商圈信息
        if(in_array($fitervalue['city_id'],$cityData)){
              $cityPrant_id=$fitervalue['city_id'];

        }elseif($fitervalue['city_id']){
              $City=model('city')->get($fitervalue['city_id']);
              $cityPrant_id=$City->pid;
        }else{
            $cityPrant_id=0;
        }

        //查询所有的城市数据
        $citys=model('city')->where('status',1)->select();
        //查询所有的商圈信息
        if($cityPrant_id){
            $business=model('city')->getRegions($cityPrant_id);
             $linyiCitys=$this->lisinfo($citys,$cityPrant_id);
        }else{
             $linyiCitys=$this->lisinfo($citys,2);
        }



        
        //获得单城市下的所有分类


        //获得该城市分类下的所有子分类，无限极分类
        
        if(!in_array($fitervalue['city_id'],$cityData) && !empty($fitervalue['city_id'])){
             $estateData=model('estate')->estateNorMalData([$fitervalue['city_id']]);
        }else{
           $linyi=[];
            foreach($linyiCitys as $linyiCity){
                $linyi[]=$linyiCity->id;
            } 
            //获得该城市下的所有小区
            $estateData=model('estate')->estateNorMalData($linyi);
        }
        

        

         //获得所有小区下的数据
        $rents=model('rent_house')->rentNorMalData($estateData,$where); 


        //获得数据总量
        $count=model('rent_house')->rentCount($estateData,$where);


        $this->assign('count',$count);
        $this->assign('cityPrant_id',$cityPrant_id);
    	$this->assign('rents',$rents);
        $this->assign('fitervalue',$fitervalue);
        $this->assign('regions',$regions);
    	$this->assign('business',empty($business)?'':$business);
        return view();
    }


    //获得 where条件
    public function getWhere($map){
            foreach($map as $k=>$v){
                if($k=='city_id'){
                    unset($map[$k]);
                }
                if($v==""){
                    unset($map[$k]);
                }
            }
            
            //创建一个空字符串进行拼接
            $where="status = 1 and ";
            //循环拼接
            foreach($map as $k=>$v){
                switch ($k) {
                    //如果是 搜索的话， 模糊查询，用户名，地址，类型
                    case 'search':
                        $where.=" uname like '%$v%' or ename like '%$v%' or tname like '%$v%' and ";
                        break;
                    case 'room':

                        //如果是租房的信息 ，最多到5室就终止了， 如果是二手房信息得到6室以上

                            if($v==6){
                            $where.=" $k>=6 and ";
                        }else{
                            $where.=" $k=$v and ";
                        }   
                        break;

                    case 'price':

                            switch ($v){
                            case '500':
                            $where.="$k <=500 and ";
                                break;
                            case '4500':
                            $where.="$k >=4500 and ";
                                break;
                            default:
                            $price=explode("-",$v);
                            $where.="$k >= $price[0] and $k <= $price[1] and ";
                            break;  
                        }  
                    break;  
                    case 'proportion':
                        switch ($v){
                            case '50':
                            $where.="$k <=50 and ";
                                break;
                            case '300':
                            $where.="$k >=300 and ";
                                break;
                            default:
                            $proportion=explode("-",$v);
                            $where.="$k >= $proportion[0] and $k <= $proportion[1] and ";
                            break;  
                        }
                    break;
                    default:
                        $where.=" $k=$v and ";
                        break;
                }
                //二手房和新房的面积，不影响租房，所以直接添加即可

            }
            if($where){
                $where=substr($where,0,-4);
            }
            return $where;
        }

        //详细信息表
    public function main(){
        $id=input('id','','intval');

        if(empty($id)){
            $this->error('查看的信息不存在');
        }


        //图片信息
        $images=model('img')->getNormalImages($id,2);
        
        //数据信息
        $rent=model('rent_house')->get($id);

        //发布人信息
        $broker=model('broker')->get($rent['broker_id']);
        //查看是否收藏

        $user_id=session('user','','index')['id'];

         //获得数据
        $collectData=[
            'house_id'=>$id,
            'user_id'=>$user_id,
            'house_type'=>2,
        ];
        $collect=model('collect')->field('id')->where($collectData)->find();

        $look=model('look')->field('id')->where($collectData)->find();

        
        $this->assign('look',$look);
        $this->assign('collect',$collect);
        $this->assign('broker',$broker);
        $this->assign('images',$images);
        $this->assign('rent',$rent);
        return view();

    }




   

}
