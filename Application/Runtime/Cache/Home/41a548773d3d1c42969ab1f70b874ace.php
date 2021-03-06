<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>旅游</title>
    <script src="/Public/jquery-3.1.1.js"></script>
    <link rel="stylesheet"  href="/Public/bootstrap-3.3.7/css/bootstrap.css" />
    <script src="/Public/bootstrap-3.3.7/js/bootstrap.js"></script>
    <script>
        window.console = window.console || (function () {  
            var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile  
            = c.clear = c.exception = c.trace = c.assert = function () { };  
            return c;  
        })(); 
        window.onload = function (){
        var div1=document.getElementsByClassName("col-sm-7")[0];      
        var div2=document.getElementsByClassName("col-sm-3")[0];
       
            
        var img1=document.getElementsByClassName("hidden-xs")[1].getElementsByTagName("img");
        for(var i=0;i<img1.length;i++)
        {   
            var m=img1[i];         
            if(m.width/m.height>132.3/109)
            {
                m.style.visibility="visible";
                m.style.width="auto";             
                m.style.height="100%";                   
            }
            else
            {
                
                m.style.visibility="visible";
                m.style.width="100%";             
                m.style.height="auto";    
            }
        }
        
        var img2=document.getElementsByClassName('visible-xs-block')[1].getElementsByTagName("img");
        for(var i=0;i<img1.length;i++)
        {   
            var m=img2[i];         
            m.style.visibility="visible";
            if(m.width>m.height)
            {
                m.style.width="100%";
                m.style.height="auto";               
            }
            else
            {
                m.style.width="100%";                    
                m.parentNode.parentNode.style.height=m.width*0.6+"px";
            }           
        }    
            
        var li = document.getElementsByName("li");  
        var color = ['#337ab7','black','#c7254e'] ;

        for(var j =0;j<li.length;j++){  
        var rest;  
        var re = Math.round(Math.random()*2);   
        rest = color[re];   

        li[j].style.color = rest;  
        }        
    }
    </script>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <style>
        a:link
        {
            color:#000000;
            TEXT-DECORATION:none;
        }
        a:visited
        {
            color:black;
            TEXT-DECORATION:none;
        }
         a:hover
        {
            color:#CD5555;
            TEXT-DECORATION:none;
        }
        a:active  
        {
            TEXT-DECORATION:none;
        }
        .navbar-inverse .navbar-nav > li > a 
        {
            color: #fff;
        }
        .navbar-inverse .navbar-brand
        {
            color:#fff
        }
        .container-fluid a:hover
        {
            color:white !important;
        }        
       

        ul{padding:0}
        .container img
        {
            visibility: hidden;            
            
        }
        .hidden-xs img:hover
        {
            transition: 1s;        
            transform: scale(1.3);
        }
        .navbar-inverse
        {
            background-color: #CD5555;
             border-color:#CD5555;
        }
        .navbar-nav li:hover{
            display: block;
            background:#A52A2A;
        }
         .navbar-inverse .navbar-toggle {
            border-color: #FFFFFF;
        }
        .navbar-inverse .navbar-toggle:hover,
        .navbar-inverse .navbar-toggle:focus
        {
             background-color:#CD5555;
        }
        
        .navbar-inverse .navbar-collapse
        {
            border-color:#ffffff;
        }
    </style>
</head>
<body>
<div class="container hidden-xs">
    <div class="row"> 
    <div class="col-sm-10 col-sm-offset-1" style="padding:0">
        <div style="background-color:#CD5555">
         <nav class="navbar navbar-inverse" style="">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <a class="navbar-brand" href="/" style="">首页</a>
                  </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   <ul class="nav navbar-nav">                       
                       <li><a href="/Home/Index/travel">旅游</a></li>
                       <li><a href="/Home/Index/fashion">时尚</a></li>
                       <li><a href="/Home/Index/food">美食</a></li>
                       <li><a href="/Home/Index/education">教育</a></li>
                   </ul>
                </div>
              </div>
         </nav>
        </div>
     </div>
    </div>
</div>
<div class="container hidden-xs">
    <div class="row">
    <div class="col-sm-7 col-sm-offset-1" style="padding:0" >
        <div style="border-top:1px solid #dbdbdb;border-right:1px solid #dbdbdb;">
        <?php if(is_array($articles)): foreach($articles as $key=>$article): ?><div class='' style="height:150px;border-bottom: 1px solid #dbdbdb;padding:20px 20px 20px 0;overflow: hidden">
                <div style="width:20%;height:100%;float:left;overflow: hidden">
                    <a href="/Home/Index/read/aid/<?php echo ($article[aid]); ?>" target="_blank">
                        <img src="<?php echo (getpic(htmlspecialchars_decode($article['content']))); ?>">
                
                    
                    </a>
                </div>
                <div class="" style="width:78%;height:100%;float:right;overflow:hidden">
                    <div class="">
                        <a href="/Home/Index/read/aid/<?php echo ($article['aid']); ?>" style="font-size:16px;font-weight:bold" target="_blank"><?php echo ($article['title']); ?></a>
                    </div>
                    <div style="margin:10px 0">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <?php echo ($article['author']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;<?php echo ($article['view']); ?>浏览&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php echo (date('Y-m-d',$article['createtime'])); ?>
                    </div>
                    <div class="" style="">
                        <p><?php echo (mb_substr(str_replace(' ','',str_replace('&nbsp;','',strip_tags(htmlspecialchars_decode($article['content'])))), 0,70,'utf-8')); ?>...</p>
                    </div>
                </div>
            </div><?php endforeach; endif; ?>
        <?php echo ($show); ?>
        </div>
    </div>

    <div class="col-sm-3" style="border-top:1px solid #dbdbdb;padding:0">
        <div style="padding-top:20px;padding-left: 20px;padding-bottom: 20px">
            <div style="margin-bottom: 10px;"><span style="font-size: 16px;font-weight: bold;">博客点击排行</span></div>
            <div>
                <ul class="" style="margin:0">
                    <?php $i=1?>
                    <?php if(is_array($hotarticles)): foreach($hotarticles as $key=>$vo): ?><li style="list-style-type:none;line-height: 30px;border-bottom: 1px solid lightgray"><?php if($i<4){?><span style="background-color:#d43f3a;color:white"><?php echo strlen($i)<2?'0'.$i:$i;?></span><?php } if($i>=4){?><span style="background-color:gray;color:white"><?php echo strlen($i)<2?'0'.$i:$i;?></span><?php }?> &nbsp;<a href="/Home/Index/read/aid/<?php echo ($vo["aid"]); ?>" target="_blank"><?php echo mb_strlen($vo['title'],'utf8')<15?$vo['title']:(mb_substr($vo['title'],0,13,utf8).'...')?></a><span style="float:right"><?php echo $vo['view']?></span></li>

                        <?php $i++; endforeach; endif; ?>
                </ul>
            </div>
        </div>
        <div style="border-top:1px solid #dbdbdb;border-bottom:1px solid #dbdbdb;padding-top:20px;padding-left: 20px;padding-bottom: 20px">
           
            <div style=""><span style="font-size:16px;font-weight: bold;">名博推荐</span></div>
            <div>
                <ul class="" style="margin:0">
                    <?php if(is_array($hotauthors)): foreach($hotauthors as $key=>$vo): ?><li style="list-style-type:none;display:inline;line-height: 40px"><a name="li" href="#"><?php echo ($vo["author"]); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;</li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 hidden-xs" style="padding:0">
            <hr style="height:4px;border:none;background-color:#dbdbdb">
        </div>
    </div>
</div>
    
<div class="container">
    <div class="row">
    <div class="col-xs-12" style="padding:0">
    <nav class="navbar navbar-inverse visible-xs-block">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collaplsed" data-toggle="collapse" data-target="#example" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" style="">首页</a>
            </div>
            <div class="collapse navbar-collapse" id="example">
                <ul class="nav navbar-nav navbar-right">                    
                    <li><a href="/Home/Index/travel">旅游</a></li>
                    <li><a href="/Home/Index/fashion">时尚</a></li>
                    <li><a href="/Home/Index/food">美食</a></li>
                    <li><a href="/Home/Index/education">教育</a></li>
                </ul>                     
            </div>
        </div>
    </nav>
    </div>
    </div>
</div>
    
<div class="container visible-xs-block">
    <div class="row">
    <div class="col-xs-12" style="margin-bottom:20px;padding:0;border-top: 1px solid #dbdbdb" >
        <?php if(is_array($articles)): foreach($articles as $key=>$article): ?><div class="" style="padding:20px;border-bottom:1px solid #dbdbdb;">                            
                <div class="" style="height:100%;width:100%;overflow:hidden">
                    <div class="">
                        <a href="/Home/Index/read/aid/<?php echo ($article['aid']); ?>" style="font-size:16px;font-weight:bold" target="_blank"><?php echo ($article['title']); ?></a>
                    </div>
                    
                    <div style="margin:10px 0">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <?php echo ($article['author']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                        
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php echo (date('Y-m-d',$article['createtime'])); ?>
                    </div>  
                    <div class="" style="width:100%;overflow:hidden">
                        <a href="/Home/Index/read?aid=<?php echo ($article[aid]); ?>" target="_blank">
                            <img src="<?php echo (getpic(htmlspecialchars_decode($article['content']))); ?>">
                        </a>
                    </div>            
                </div>
            </div><?php endforeach; endif; ?>
        <div style="padding-left:20px">
            <?php echo ($show); ?>
        </div>
    </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 visible-xs" style="padding:0">
            <hr style="height:4px;border:none;background-color:#dbdbdb">
        </div>
    </div>
</div>
<div style="text-align: center">
    Copyright © 2018
    Powered By liufei
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1274043876'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1274043876%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    <br><br>
</div>
</body>
</html>