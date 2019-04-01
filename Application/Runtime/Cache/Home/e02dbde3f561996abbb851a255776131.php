<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <script src="/Public/jquery-3.1.1.js"></script>
    <link rel="stylesheet"  href="/Public/bootstrap-3.3.7/css/bootstrap.css" />
    <script src="/Public/bootstrap-3.3.7/js/bootstrap.js"></script>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <style>
        img
       {
           max-width: 100%;
           height:auto;
       }
    </style>
</head>
<body>
<div class="container hidden-xs">
    <div class="col-md-8 col-md-offset-2" style="">
        <div>
            <div style="margin:10px 0">
                <h3 style="font-weight: bold"><?php echo ($article['title']); ?></h3>
            </div>
            <div style="margin:0 0 20px 0">
                <?php echo ($article['author']); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="color:lightgray"><?php echo (date('Y-m-d',$article['createtime'])); ?></span>
            </div>
            <div style="margin:30px 0;overflow:hidden">
                <?php echo (html_entity_decode($article['content'])); ?>
            </div>
        </div>
    </div>
</div>
    
<div class="container visible-xs-block">
    <div class="" style="">
        <div>
            <div style="margin:10px 0">
                <h3 style="font-weight: bold"><?php echo ($article['title']); ?></h3>
            </div>
            <div style="margin:0 0 20px 0">
                <?php echo ($article['author']); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="color:lightgray"><?php echo (date('Y-m-d',$article['createtime'])); ?></span>
            </div>
            <div style="margin:30px 0;overflow:hidden">
                <?php echo (html_entity_decode($article['content'])); ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12" style="padding:0">
            <hr style="height:4px;border:none;background-color:#dbdbdb">
        </div>
    </div>
</div>
<div style="text-align: center">
    Copyright © 2018  Powered By liufei
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1274043876'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1274043876%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    <br><br>
</div>
</body>
</html>