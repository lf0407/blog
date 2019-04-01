<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $cfg['title'];?></title>
    <script src="/Public/jquery-3.1.1.js"></script>
    <link rel="stylesheet"  href="/Public/bootstrap-3.3.7/css/bootstrap.css" />
    <script src="/Public/bootstrap-3.3.7/js/bootstrap.js"></script>
    <style>
        a:link
        {
            color:black;
        }
        a:visited
        {
            color:gray;
        }
        a:hover
        {
            color:#CD0000;
        }   
    </style>
</head>
<body>
<div class="container">
     <div class="col-md-12">
        <div class="jumbotron">
           <div style='font-size:32px'><?php echo $cfg['title'];?></div>
           <div style='text-align:right;font-size:20px'><a href='<?php echo U("/Admin/Login/index")?>'>登录</a></div>
        </div>
     </div>
</div>
<div class="container">
    <div class="col-md-9">
        <?php foreach( $articles as $article ):?>
        <div class="panel panel-default" >
            <div class="panel-heading">
                <a href="<?php echo U('/Home/Index/read');?>?aid=<?php echo $article['aid'];?>"><?php echo $article['title'];?></a>
            </div>
            <div class="panel-body" style='height:115px;overflow:hidden'>
                <?php echo mb_substr(strip_tags(html_entity_decode($article['content'])), 0,300,'utf-8');?>
            </div>
        </div>
        <?php endforeach;?>
        <?php echo $show;?>
    </div>
    
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">最热作者</div>
            <div class="panel-body">
                最热作者列表
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">最热博客</div>
            <div class="panel-body">
                点击量最高博客列表
            </div>
        </div>
    </div>
</div>
</body>
</html>