<?php
namespace app\index\controller;
//                             _______________________________________  
//                            /  ___________________________________  \
//     _--""""--_            /  /_/_/_/_/_|_|_|_|_|_|_|_|_|_\_\_\_\_\  \
//    /          \          /  /_/_/_/_J__L_L_L_|_|_|_J_J_J__L_\_\_\_\  \
//   /\          /\        /  /_/_/_J__L_J__L_L_|_|_|_J_J__L_J__L_\_\_\  \
//   L ""-____-"" J       /  /_/_J__L_J__L_J_J__L_|_J__L_L_J__L_J__L_\_\  \
//   \            /      /  /_/__L_/__L_J__L_J__L_|_J__L_J__L_J__\_J__\_\  \
//    \_        _/      /  /_J__/_J__/__L_J__|__L_|_J__|__L_J__\__L_\__L_\  \
//  _--"""""--_"       /  /  F /  F J  J  |  F J  |  F J  |  F  F J  \ J  \  \
// /           \      /  /--/-J--/--L--|--L-J--J--|--L--L-J--|--J--\--L-\--\  \
///\           /\    /  /__/__L_J__J___L_J__J__|__|__|__L__L_J___L__L_J__\__\  \
//L ""-_____-"" J   /  /  /  /  F  F  J  J  |  |  |  |  |  F  F  J  J  \  \  \  \
//\             /  /  /--/--/--/--J---L--|--|--|--o--|--|--|--J---L--\--\--\--\  \
// \_         _/  /  /__/__J__J___L__J___L__L__L__|__J__J__J___L__J___L__L__\__\  \
//   "--___--"   /  /  /   F  F  J   F  J  J   F  |  J   F  F  J   F  J  J   \  \  \
//              /  /--/---/--J---L--J---L--|--J---|---L--|--J---L--J---L--\---\--\  \
//             /  /__J___/___L__/___L__J___L__J___|___L__J___L__J___\__J___\___L__\  \
//            /  /   F  J   /  J   J   |  J   J   |   F   F  |   F   F  \   F  J   \  \
//           /  /---/---L--J---L---L---L--|---|---|---|---|--J---J---J---L--J---\---\  \
//          /  /___/___/___L__J___J___J___|___|___|___|___|___L___L___L__J___\___\___\  \
//         /  /   /   /   /   F   F   F   F   F   |   J   J   J   J   J   \   \   \   \  \
//        /  /___/___J___J___J___J___J____L___L___|___J___J____L___L___L___L___L___\___\  \
//       /  /   /    F   F   F   |   |   J    F   |   J    F   |   |   J   J   J    \   \  \
//      /  /___J____/___/___J____L___L___|___J____|____L___|___J___J____L___\___\____L___\  \
//     /  /    F   /   J    F   J   J    |   J    |    F   |    F   F   J    F   \   J    \  \
//    /  /____/___J____L___/____L___|____L___|____|____|___J____|___J____\___J____L___\____\  \
//   /  /    /    F   /   J    J    F   J    F    |    J    F   J    F    F   \   J    \    \  \
//  /  /____/____/___J____L____|____L___J____L____|____J____L___J____|____J____L___\____\____\  \
// /                                                                                             \
///_______________________________________________________________________________________________\
//|                                                                                               |
//| hs                                                                                            |
//|_______________________________________________________________________________________________|
class User extends Base
{
    public function index()
    {   
       $user=$this->getLogins();
        if(empty($user)){
            $this->error('请登录',url('login/index'));
        }
        

        $this->assign('user',$user);
        return view();
    }


    public function collect(){
        $user=$this->getLogins();
        if(empty($user)){
            $this->error('请登录',url('login/index'));
        }


        //关注的二手房
       $seconds=$this->collectCount($user['id'],1,'second_house');
       //关注的租房
       $rents=$this->collectCount($user['id'],2,'rent_house');

       //总数
       $count=model('collect')->collectCount($user['id']);

        $this->assign('rents',$rents);
        $this->assign('count',intval($count));
        $this->assign('seconds',$seconds);
        return view();
    }


    //带看
    public function subscribe(){
         $user=$this->getLogins();


        if(empty($user)){
            $this->error('请登录',url('login/index'));
        }

        //关注的二手房
        $seconds=model('look')->getUserLook($user['id'],1,'1,2,3,4');


        //关注的租房
        $rents=model('look')->getUserLook($user['id'],2,'1,2,3,4');

        //总数
        $count=model('collect')->collectCount($user['id']);
        $this->assign('rents',$rents);
        $this->assign('count',intval($count));
        $this->assign('seconds',$seconds);
        return view();
    }
    //我的带看
    public function entrust(){
        $user=$this->getLogins();


        if(empty($user)){
            $this->error('请登录',url('login/index'));
        }

        //关注的二手房
        $seconds=model('look')->getUserLook($user['id'],1,'1,2,3,4');


        //关注的租房
        $rents=model('look')->getUserLook($user['id'],2,'1,2,3,4');

        //总数
        $count=model('collect')->collectCount($user['id']);
        $this->assign('rents',$rents);
        $this->assign('count',intval($count));
        $this->assign('seconds',$seconds);
        return view();
    }


    //评分
    public function grade(){
         $user=$this->getLogins();
        if(empty($user)){
            $this->error('请登录',url('login/index'));
        }

        $data=input('post.');

        if(empty($data) || $data['status']!=2 || empty($data['id'])){
            $this->redirect(url('user/subscribe'));
        }       

        if(!request()->isPost()){
            $this->redirect(url('user/subscribe'));
        }

        $this->assign('id',$data['id']);
        return view();
    }


    //评分
    public function grades(){
         $user=$this->getLogins();
        if(empty($user)){
            $this->error('请登录',url('login/index'));
        }

        if(!request()->isPost()){
            $this->redirect(url('user/subscribe'));
        }

        $data=input('post.');
        $validate=validate('look');

        if(!$validate->scene('grade')->check($data)){
           /*$this->error($validate->getError());*/
           echo $validate->getError();
        }  


        $lookData=[
        'id'=>$data['id'],
        'grade'=>$data['grade'],
        'evaluate'=>$data['evaluate'],
        'status'=>1,
        'update_time'=>time(),
        ];
        $res=model('look')->save($lookData,['id'=>$data['id']]);

        if($res){
            $this->success('评论成功,谢谢您的评价',url('user/subscribe'));
        }else{
            $this->error('评论失败',url('user/subscribe'));
        }


    }


}
