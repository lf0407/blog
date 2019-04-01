<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class CheckController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->uid=session('uid');
        if($this->uid<1)
        {
            $this->error('账号或密码错误',U('/Admin/Login/index'));
        }

        $this->user=D('user')->where(array('uid' => '$this->uid'))->find();
    }
}
?>