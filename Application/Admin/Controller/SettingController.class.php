<?php
namespace Admin\Controller;

class SettingController extends CheckController
{
    public function index()
    {
        $setting=D('Setting');
        $this->assign('setting',$setting->getContent());
        $this->display();
    }

    public function save(){
        $post = I("post.");
        $setting = D("Setting");
        foreach( $post as $key=>$value ){
            $setting->where( array('key'=>$key) )->save( array('value'=>$value) );
        }
        $this->redirect("/Admin/Setting/index");
    }
}
?>