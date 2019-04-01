<?php
namespace Admin\Controller;

class UserController extends CheckController
{
    public function index()
    {
        $user=D('user');
        $users=$user->select();

        $this->assign('data',$users);

        $this->display();
    }

    public function delete()
    {
        $uid=I('get.uid');
        $user=D('user');
        $user->where(array('uid' => $uid))->delete();

        return $this->redirect('/Admin/User/index');
    }

    public function add()
    {
        $uid=I('get.uid');
        $userModel=D('user');

        $user=array('uid' => '','username' => '', 'password' => '');
        if($uid > 0)
        {
            $user=$userModel->where(array('uid' => $uid))->find();
        }

        $this->assign('user',$user);
        $this->display();
    }

    public function save()
    {
        $uid=I('get.uid');
        if($uid > 0)
        {
            return $this->edit($uid);
        }

        $user=D('user');
        if(IS_POST) {
            $username = I('post.username');
            $password = I('post.password');

            //验证表单的合法性
            $rule = array(
                array('username', 'require', '用户不能为空'),
                array('password', 'require', '密码不能为空'),
            );

            if (!$user->validate($rule)->create()) {
                return $this->error($user->getError(), '/Admin/User/add');
            }

            //验证用户唯一性
            $where = array('username' => $username);
            $isArr = $user->where($where)->find();
            if ($isArr) {
                return $this->error('用户名已经存在', '/Admin/User/add');
            }

            //插入数据
            $insert=array('username' => $username,'password' => $password);
            $uid=$user->add($insert);
            if($uid)
            {
                $this->redirect('/Admin/User/index');
            }
            else
                $this->error('操作失败','/Admin/User/add');
        }
    }

    private function edit($uid)
    {
        $user=D('user');
        if(IS_POST) {
            $username = I('post.username');
            $password = I('post.password');

            //验证表单的合法性
            $rule = array(
                array('username', 'require', '用户不能为空'),
                array('password', 'require', '密码不能为空'),
            );

            if (!$user->validate($rule)->create()) {
                return $this->error($user->getError(), '/Admin/User/add');
            }

            //验证用户唯一性
            $where['username'] = $username;
            $where['uid']=array('NEQ',$uid);
            $isArr = $user->where($where)->find();
            if ($isArr) {
                return $this->error('用户名已经存在', '/Admin/User/add');
            }

            //修改数据
            $insert=array('username' => $username,'password' =>$password);
            $uid=$user->where(array('uid' => $uid))->save($insert);
            $this->redirect('/Admin/User/index');
        }
    }
}
?>