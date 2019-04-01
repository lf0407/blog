<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $act=I('get.act');
        if($act=='check')
        {
            $username=I('post.username');
            $password=I('post.password');
            $where=array('username' => $username,'password' => $password);

            $user=D('user');
            $result=$user->where($where)->find();

            if(!$result)
            {
                return $this->error('用户名或密码错误',U('/Admin/Login/index'));
            }

            session('uid',$result['uid']);
            return $this->redirect('/Admin/Index/index');
        }

        $this->display();
    }
}
?>