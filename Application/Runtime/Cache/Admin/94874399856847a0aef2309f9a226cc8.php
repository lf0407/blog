<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>系统设置</title>
    <script src="/Public/jquery-3.1.1.js"></script>
    <link rel="stylesheet"  href="/Public/bootstrap-3.3.7/css/bootstrap.css" />
    <script src="/Public/bootstrap-3.3.7/js/bootstrap.js"></script>
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
    <div class="page-header">
        <h1>
            系统设置
        </h1>
    </div>


    <form action="/Admin/Setting/save" method="post" class="form-horizontal">

        <?php if(is_array($setting)): foreach($setting as $key=>$vo): ?><div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label"><?php echo ($vo[key]); ?></label>
            <div class="col-sm-10">
                <input type="text" name="<?php echo ($vo['key']); ?>" class="form-control" value="<?php echo ($vo['value']); ?>">
            </div>
        </div><?php endforeach; endif; ?>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">提交</button>
            </div>
        </div>
    </form>




</div>
</body>
</html>