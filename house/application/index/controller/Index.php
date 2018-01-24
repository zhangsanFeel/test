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
class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }

     public function collect(){
        $id=input('id');
        $type=input('type');
        if(empty($id) || empty($type)){
            $this->error('404找不到页面~',url('login/index'));
        }

         $user_id=$this->getLogins()['id'];
        if(empty($user_id)){
            $this->error('请登录',url('login/index'));
        }


        
        //获得数据
        $collectData=[
            'house_id'=>$id,
            'user_id'=>$user_id,
            'house_type'=>$type,
        ];

        

        $collect=model('collect')->where($collectData)->find();

        if($collect){
            $res=model('collect')->where($collectData)->delete();
             if($res){
                $this->success('取消收藏成功');
            }else{
                $this->error('取消收藏失败');
            }  



        }else{
            $res=model('collect')->save($collectData);

            if($res){
                $this->success('收藏成功');
            }else{
                $this->error('收藏失败');
            }    

        } 
    }

    //网上预约功能
    public function subscribe(){
        $user_id=$this->getLogins()['id'];
        if(empty($user_id)){
            $this->error('请登录',url('login/index'));
        }

        //有表单提交后
        if(request()->isPost()){
            $data = input('post.');
            if (!$this->getLogins() || $this->getLogins()['status'] != 1) {
                $this->error('请登录', url('login/index'));
            }

            if (empty($data)) {
                $this->error('404找不到页面');
            }

            if (empty(type($data['type']))) {
                $this->error('404找不到页面');
            }




            $house = model(type($data['type']))->get(intval($data['id']));




            if (empty($house)) {
                $this->error('房源已被删除');
            }

            $this->assign('type', $data['type']);
            $this->assign('house', $house);
            return view(); 

            
        }else{
            $this->error('404找不到页面');
                 
        }
       
    }

    //添加预约信息
    public function subscribe_add(){
      
        $user_id = $this->getLogins()['id'];
        if (empty($user_id)) {
            $this->error('请登录', url('login/index'));
        }

        //有表单提交后
        if (request()->isPost()){
            $data = input('post.');
            $validate = validate('look');
            if (!$validate->scene("subscribe_add")->check($data)) {
                $this->error($validate->getError()); 
            }
          
           
            $lookData = [
                'house_type' => $data['house_type'],
                'house_id' => $data['house_id'],
                'name' => empty($data['name']) ? '' : $data['name'],
                'sex' => $data['sex'],
                'user_desc' => empty($data['user_desc']) ? '' : $data['user_desc'],
                'phone' => $data['phone'],
                'user_id' => session('user', '', 'index')['id'],
                'status' => 4,
            ];

            //状态 4为， 提交带看信息，但是未被经纪人领取
            $res = model('look')->addLook($lookData);

            if ($res) {
                $this->success('预约创建成功', url('user/subscribe'));
            } else {
                $this->error('预约创建失败');
            }

        }
    }

    //取消预约
    public function subscribe_del(){
        if(!request()->isPost()){
            $this->error('404找不到页面');
        }
        $id=input('post.id','','intval');

        $look=model('look')->where('status',4)->find($id);
        if(empty($look)){
            $this->error('预约不存在');
        }
        $res=model('look')->where('id',$look['id'])->delete();

        if($res){
            $this->success("预约取消成功",url('second_house/main',['id'=> $look['house_id']]));
        }else{
            $this->error('预约取消失败',url('user/subscribe'));
        }
    }
}
