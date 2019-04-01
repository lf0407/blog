<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员管理</title>
    <link rel="stylesheet" href="/Public/bootstrap-3.3.7/css/bootstrap.css" />
    <script src="/Public/jquery-3.1.1.js"></script>
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
        <h2>管理员管理<small class="pull-right"><a class="btn btn-default" href="/Admin/User/add">添加管理员</a></small></h2>
        <table class="table">
            <tr>
                <th>uid</th>
                <th>用户</th>
                <th>管理</th>
            </tr>

            <?php if(is_array($data)): foreach($data as $key=>$user): ?><tr>
                <td><?php echo ($user['uid']); ?></td>
                <td><?php echo ($user['username']); ?></td>
                <td>
                    <a href="/Admin/User/add/uid/<?php echo ($user['uid']); ?>">修改</a>
                    <a href="/Admin/User/delete/uid/<?php echo ($user['uid']); ?>">删除</a>
                </td>
            </tr><?php endforeach; endif; ?>
        </table>
    </div>
</body>
</html>