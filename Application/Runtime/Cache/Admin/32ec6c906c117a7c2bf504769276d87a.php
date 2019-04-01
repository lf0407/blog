<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员登录</title>
    <link rel="stylesheet" href="/Public/bootstrap-3.3.7/css/bootstrap.css" />
    <script src="/Public/jquery-3.1.1.js"></script>
    <script src="/Public/bootstrap-3.3.7/js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <div class="row" style="margin:200px">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <form class="form-horizontal" action="/Admin/Login/index?act=check" method="post" style="margin:30px;">
                            <input type="text" class="form-control" name="username" placeholder="请输入账号" style="margin:15px 0">
                            <input type="password" class="form-control" name="password" placeholder="请输入密码" style="margin:15px 0">
                            <button type="submit" class="btn btn-primary btn-block" style="" style="margin:15px 0;">登录</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>