<?php
namespace Admin\Controller;

class BlogController extends CheckController
{
    public function index()
    {
        $setting=D('Setting');
        $set=$setting->getAll();

        $article=D('article');

        $count=$article->count();
        $page=new \Think\Page($count,$set['pageNum']);

        $articles=$article->order('aid desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('articles',$articles);
        $this->assign('show',$page->show());

        $this->display();
       
    }

    public function delete()
    {
        $aid=I('get.aid');
        $article=D('article');
        $article->where(array('aid' => $aid))->delete();
        return $this->redirect('/Admin/Blog/index');
    }

    public function add()
    {
        $aid=I('get.aid');
        $articleModel=D('article');

        $article=array();
        if($aid > 0)
        {
            $article=$articleModel->where(array('aid' => $aid))->find();
        }

        $this->assign('article',$article);
        $this->display();
    }

    public function save()
    {
        $aid=I('get.aid');

        $articleModel=D('article');
        if(IS_POST) {
            $title = I('post.title');
            $author = I('post.author');
            $category = I('post.category');
            $content=I('post.content');

            //验证表单的合法性
            $rule = array(
                array('title', 'require', '标题不能为空'),
                array('author', 'require', '作者不能为空'),
                array('category', 'require', '类别不能为空'),
                array('content','require','内容不能为空'),
            );

            if (!$articleModel->validate($rule)->create()) {
                return $this->error($articleModel->getError(), '/Admin/blog/add');
            }

            //插入数据
            $insert=array('title' => $title,'author' => $author,'category' => $category,'content' => $content);

            if($aid>0)
            {
                $insert['updatetime']=time();
                $articleModel->where(array('aid' => $aid))->save($insert);
            }
            else
            {
                $insert['createtime']=time();
                $insert['updatetime']=time();
                $articleModel->add($insert);
            }

            return $this->redirect('/Admin/Blog/index');
        }
    }

    public function upload(){

        $result = array();
        $result['msg'] = '';
        $result['success'] = false;
        $result['file_path'] = '';

        $upload = new \Think\Upload();
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $info   =   $upload->uploadOne( $_FILES['file1'] );
        if(!$info){
            $result['msg'] = $upload->getError();
        }else{
            $url = '/Uploads/' . $info['savepath'] . $info['savename'];
            $result['file_path'] = $url;
            $result['success'] = true;
        }

        $this->ajaxReturn($result);
    }
}
?>