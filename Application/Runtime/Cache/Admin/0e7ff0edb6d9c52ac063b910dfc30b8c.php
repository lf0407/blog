<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客添加</title>
    <link rel="stylesheet" href="/Public/bootstrap-3.3.7/css/bootstrap.css" />
    <script src="/Public/jquery-3.1.1.js"></script>
    <script src="/Public/bootstrap-3.3.7/js/bootstrap.js"></script>

    <link rel="stylesheet" type="text/css" href="/Public/simditor-2.3.6/styles/simditor.css" />

    <script type="text/javascript" src="/Public/simditor-2.3.6/scripts/module.js"></script>
    <script type="text/javascript" src="/Public/simditor-2.3.6/scripts/hotkeys.js"></script>
    <script type="text/javascript" src="/Public/simditor-2.3.6/scripts/uploader.js"></script>
    <script type="text/javascript" src="/Public/simditor-2.3.6/scripts/simditor.js"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/Admin/Index/index">后台首页</a></li>
                <li><a href="/Admin/User/index">管理员管理</a></li>
                <li><a href="/Admin/Blog/index">博客管理</a></li>
                <li><a href="/Admin/Setting/index">系统管理</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">用户<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/Home/Index/index">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    <h2>博客添加<small class="pull-right"><a class="btn btn-default" href="/Admin/Blog/index">返回</a></small></h2>
    <form class="form-horizontal" action="/Admin/Blog/save/aid/<?php echo ($article['aid']); ?>" method="post">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="inputEmail3" value="<?php echo ($article['title']); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">作者</label>
            <div class="col-sm-10">
                <input type="text" name="author" class="form-control" id="inputPassword3" value="<?php echo ($article['author']); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">类别</label>
            <div class="col-sm-10">
                <input type="text" name="category" class="form-control" id="inputPassword3" value="<?php echo ($article['category']); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">正文</label>
            <div class="col-sm-10">
                <textarea name="content" style="height:400px" class="form-control" id="content"><?php echo ($article['content']); ?></textarea>
                <script>
                    var editor = new Simditor({
                        textarea: $('#content'),
                        upload:{
                            url:"/Admin/Blog/upload",
                            fileKey:"file1",
                        }
                        //optional options
                    });
                </script>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">提交</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>