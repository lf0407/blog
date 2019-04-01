<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    function __construct(){
        parent::__construct();
        $this->setting = D("Admin/Setting");
        $this->cfg = $this->setting->getAll();
    }

    public function index(){

        $setting=D('Admin/Setting');
        $set=$setting->getAll();

        $article=D('article');

        $count=$article->count();
        $page=new \Think\Page($count,$set['pageNum']);

        $articles=$article->where("category='旅游1'")->limit(0)->union("(select * from article where category='时尚'order by aid desc limit 2)")->
                union("(select * from article where category='旅游'order by aid desc limit 2)")->union("(select * from article where category='美食'order by aid desc limit 2)")
                ->union("(select * from article where category='教育'order by aid desc limit 2)")->select();
        $hotarticles=$article->order('view desc')->limit(8)->select();
        $hotauthors=$article->query('select sum(view) as view,author from article group by author order by view DESC limit 25 ');

        $this->assign('hotauthors',$hotauthors);
        $this->assign('hotarticles',$hotarticles);
        $this->assign('articles',$articles);
        $this->assign('show',$page->show());

        $this->display();
    }

    public function read(){

        $aid = I("get.aid");
        $articleModel = D("article");
        $article = $articleModel->where( array('aid'=>$aid) )->find();
        $articleModel->where(array('aid'=>$aid))->setInc('view');

        $this->assign('article',$article);
        echo getpic($article);
        $this->display();
    }
    
    public function travel()
    {
         $setting=D('Admin/Setting');
        $set=$setting->getAll();

        $article=D('article');

        $count=$article->count();
        $page=new \Think\Page($count,$set['pageNum']);

        $articles=$article->where("category='旅游'")->order('aid desc')->limit($page->firstRow.','.$page->listRows)->select();
        $hotarticles=$article->order('view desc')->limit(8)->select();
        $hotauthors=$article->query('select sum(view) as view,author from article group by author order by view DESC limit 25 ');

        $this->assign('hotauthors',$hotauthors);
        $this->assign('hotarticles',$hotarticles);
        $this->assign('articles',$articles);
        $this->assign('show',$page->show());

        $this->display();
    }
    
     public function food()
    {
         $setting=D('Admin/Setting');
        $set=$setting->getAll();

        $article=D('article');

        $count=$article->count();
        $page=new \Think\Page($count,$set['pageNum']);

        $articles=$article->where("category='美食'")->order('aid desc')->limit($page->firstRow.','.$page->listRows)->select();
        $hotarticles=$article->order('view desc')->limit(8)->select();
        $hotauthors=$article->query('select sum(view) as view,author from article group by author order by view DESC limit 25 ');

        $this->assign('hotauthors',$hotauthors);
        $this->assign('hotarticles',$hotarticles);
        $this->assign('articles',$articles);
        $this->assign('show',$page->show());

        $this->display();
    }
    
    public function fashion()
    {
         $setting=D('Admin/Setting');
        $set=$setting->getAll();

        $article=D('article');

        $count=$article->count();
        $page=new \Think\Page($count,$set['pageNum']);

        $articles=$article->where("category='时尚'")->order('aid desc')->limit($page->firstRow.','.$page->listRows)->select();
        $hotarticles=$article->order('view desc')->limit(8)->select();
        $hotauthors=$article->query('select sum(view) as view,author from article group by author order by view DESC limit 25 ');

        $this->assign('hotauthors',$hotauthors);
        $this->assign('hotarticles',$hotarticles);
        $this->assign('articles',$articles);
        $this->assign('show',$page->show());

        $this->display();
    }
    
    public function education()
    {
         $setting=D('Admin/Setting');
        $set=$setting->getAll();

        $article=D('article');

        $count=$article->count();
        $page=new \Think\Page($count,$set['pageNum']);

        $articles=$article->where("category='教育'")->order('aid desc')->limit($page->firstRow.','.$page->listRows)->select();
        $hotarticles=$article->order('view desc')->limit(8)->select();
        $hotauthors=$article->query('select sum(view) as view,author from article group by author order by view DESC limit 25 ');

        $this->assign('hotauthors',$hotauthors);
        $this->assign('hotarticles',$hotarticles);
        $this->assign('articles',$articles);
        $this->assign('show',$page->show());

        $this->display();
    }
}