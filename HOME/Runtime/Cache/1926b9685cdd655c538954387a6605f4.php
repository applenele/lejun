<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>乐俊</title>

     <link rel="stylesheet" href="__CSS__/bootstrap.css" type="text/css">
     <!--<link rel="stylesheet" href="__CSS__/bootstrap.css" type="text/css">-->
     <link rel="stylesheet" href="__CSS__/index.css" type="text/css" />
     
     <!--标题图片-->
       <link rel="icon" href="__IMG__/favicon.ico" mce_href="favicon.ico" type="image/x-icon"> 
     <link rel="shortcut icon" href="__IMG__/favicon.ico" mce_href="favicon.ico" type="image/x-icon"> 
     
    
    <script type="text/javascript" src="__JS__/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="__JS__/bootstrap.js"></script>
    <script type="text/javascript" src="__JS__/index.js"></script>
  
   <!--[if lt IE 9]>
    <script src="dist/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
  <div class="navbar navbar-fixed-top"> 
      <div class="navbar-inner">
      	<div class="container">
        
       <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        
          <a id="lejun" href="#" class="brand" rel ="popover"  title ="欢迎来到乐军论坛"  data-toggle="popover" onclick="popover()"  data-html="true"  data-content ="你的支持是我我们前进的动力">lejun</a>  
          <script>
           
	       function popover(){$('#lejun').popover();}
          </script>         
          
          <div class="nav-collapse">
              <ul class="nav">
              	<li class="active">
                   <a href="#">论坛</a>
                </li>
              	<li>
                   <a href="#">单机游戏攻略</a>
                </li>
              	<li>
                     <a href="#">网络游戏攻略</a>
                </li>
                <li>
                     <a href="#">电玩攻略</a>
                </li>
              	<li>
                     <a href="#">手游攻略</a>
                </li>
                
                <li class="dropdown">
                   <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                             热门游戏攻略
                    <b class="caret"></b>
                   </a>
                   <ul class="dropdown-menu">
                   	<li>
                      <a href="#">lol</a>  
                    </li>
                   	<li>
                       <a href="#">剑灵</a>  
                    </li>
                   	<li>
                       <a href="#">地下城与勇士</a>  
                     
                    </li>
                   </ul>
                </li>
                
                <li class="dropdown">
                   <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            推荐
                    <b class="caret"></b>
                   </a>
                   <ul class="dropdown-menu">
                   	<li>
                      <a href="#">lol</a>  
                    </li>
                   	<li>
                       <a href="#">剑灵</a>  
                    </li>
                   	<li>
                       <a href="#">地下城与勇士</a>  
                     
                    </li>
                   </ul>
                </li>
                
                <li class="dropdown">
                   <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                             其它
                    <b class="caret"></b>
                   </a>
                   <ul class="dropdown-menu">
                   	<li>
                      <a href="#">盛大</a>  
                    </li>
                   	<li>
                       <a href="#">网易</a>  
                    </li>
                   	<li>
                       <a href="#">腾讯士</a>  
                     
                    </li>
                   </ul>
                </li>
              	
              	
              </ul>   
           </div>
          
          <ul class="nav pull-right">
          	<li>
               <?php
 session_start(); if(!isset($_SESSION['username']) || $_SESSION['username']==''){ ?>
                 <a href="#login-win" data-toggle="modal">登陆</a>  
              </li>
              <li class="divider-vertical"><a href="#"></a></li>
          	  <li>
                 <a href="__APP__/Register/register">注册</a>
              </li>
              <?php  }else{ ?>    
             <a href="#" id="user">
             <?php  echo $_SESSION['username']; ?></a>
             </li>
             <li class="divider-vertical"><a href="#"></a></li>
          	 <li>
                 <a href="__APP__/Login/do_logout" data-toggle="modal">退出</a>
            </li>
            <?php  } ?>
            
           
            
          </ul>
      
       </div>
      </div>
  </div>
  
   <!--跳出登陆的对话框-->
    <div class="modal hide fade" id="login-win">
              <div class="modal-header">
                 <a class="close" data-dismiss="modal">×</a>
                    <h2>用户登陆</h2> 
                       
              </div>
              <div class="modal-body">
                    <div class="modal-form">
                       <form action="__APP__/Login/do_login" method="post"  class="form-horizontal">
                        <div class="control-group">
                           <label for="username" class="control-label">用户名</label>
                           <div class="controls">
                            <input type="text" name="username" id="username" placeholder="用户名"  />
                            <p class="help-block" id="username-warning">请输入用户名</p>
                            </div>
                        </div>
                          
                        <div class="control-group">
                          <label for="pwd" class="control-label">密码</label>
                         <div class="controls">
                          <input type="password" name="pwd" id="pwd" placeholder="密码" />
                          <p class="help-block" id="pwd-warning">请输入密码</p>
                         </div>
                        </div>      
                    </div>     
              </div>
              <div class="modal-footer">
                    <button type="button"  class="btn btn-primary" id="login-win-close-btn">取消</button>
                    <a href="__APP__/Register/register" class="btn btn-primary" id="to-register-win-close-btn">注册</a>
                    <button type="submit" class="btn btn-primary">确定登陆</button>
              </div>
              </form>  
    </div>
   
 <div>
      <div class="row">
         <div class="clearfix">
             <div class="span3">logo</div>
             <div class="span5">
             <div class="form-horizontal" id="search-div">
              <form class="form-search">
                    <input type="text" placeholder="攻略 帖子 游戏" class="input-xlarge search-query" id="search-text">
                    <button type="submit" class="btn" >搜索</button>
              </form>
              </div>
              <div id="publish-div">
                  <ul class="unstyled">
                    <li><a href="">我要发帖</a></li>
                    <li><a href=""> 我要发攻略</a></li>
                    <li><a href=""> 我要求组队</a></li>
                  </ul>
              </div>
              
            </div>
            <div class="span4">
              <ul class="unstyled" id="hot-search-ul">
              	<li ><a href="#">热搜一</a></li>
                <li><a href="#">热搜二爱谁谁啊哈啥说</a></li>
                <li><a href="#">热搜三</a></li>
                <li><a href="#">热搜四</a></li>
                <li><a href="#">热搜三</a></li>
                <li><a href="#">热搜四</a></li>
              </ul>
            </div>
         </div>
      </div>
    
      
 </div>
   
   
    
   
  <div id= "picture-tie-gonglue">
      <div class="row">
          <!--华东图片-->
         <div class="span4" id="picture">
            <div id="myCarousel" class="carousel">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item"><img src="__IMG__/0.jpg" alt="哈哈" /></div>
                <div class="item"><img src="__IMG__/1.jpg" alt="呵呵"></div>
                <div class="item"><img src="__IMG__/2.jpg" alt="哦哦"></div>
                <div class="item"><img src="__IMG__/3.jpg" alt=""></div>
                <div class="item"><img src="__IMG__/4.jpg" alt=""></div>
              </div>
              <!-- Carousel nav -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
         </div>
      
       <!--帖子 攻略-->
         <div class="span5" id="tie-gonglue">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#latest-theme" data-toggle="tab">最新主题</a>              </li>
              <li><a href="#latest-replay" data-toggle="tab">最新回复</a></li>
              <li><a href="#messages" data-toggle="tab">精华热帖</a></li>
              <li><a href="#settings" data-toggle="tab">热门主题</a></li>
		   </ul> 
        <div class="tab-content">
          <div class="tab-pane active" id="latest-theme">
            <ul>
             <li><a href="#">而超链接则用于对象</a></li>
             <li><a href="#">而超链接则用于对象</a></li>
             <li><a href="#">而超链接则用于对象</a></li>
             <li><a href="#">而超链接则用于对象</a></li>
             <li><a href="#">而超链接则用于对象</a></li>
             <li><a href="#">而超链接则用于对象</a></li>
            </ul>
          </div>
          <div class="tab-pane" id="latest-replay">
             <ul>
             	<li><a href="#">丑陋的文本阴影修饰按钮的灰色文字</a></li>
                <li><a href="#">丑陋的文本阴影修饰按钮的灰色文字</a></li>
                <li><a href="#">丑陋的文本阴影修饰按钮的灰色文字</a></li>
                <li><a href="#">丑陋的文本阴影修饰按钮的灰色文字</a></li>
                <li><a href="#">丑陋的文本阴影修饰按钮的灰色文字</a></li>
                <li><a href="#">丑陋的文本阴影修饰按钮的灰色文字</a></li>
             </ul>
          
          </div>
          
          <div class="tab-pane" id="messages">...</div>
          <div class="tab-pane" id="settings">...</div>
       </div>
         
         </div>
      
         <div class="span2" id="latest-tie-gonglue">
           新帖， 新攻略
         </div>
      </div>
   </div>
  
  
  
  
  <div id="sjgame">
     <div class="well-small">手机游戏专区</div>  
  </div>
  
  
  <div id="sjgame">
     <div class="well-small">单机游戏专区</div>  
  </div>
  
  <div id="sjgame">
     <div class="well-small">网络游戏专区</div>  
  </div>
  
  <div  id="sjgame">
     <div class="well-small">电玩游戏攻略</div>  
     
  </div>



 <footer class="footer">
     <p>
       <ul class="unstyled" id="f-n-u">
       	<li><a href="">联系我们</a></li>
       	<li><a href="">关于我们</a></li>
        <li><a href="">团队</a></li>
       	<li><a href="">给我们提建议</a></li>
       </ul>
     </p>
     <p>
       <?php
 echo date('Y-m-d H:i:s'); ?>
       2014-1-13  17:23      
     </p>
     <p>
      <ul id="brand-help" class="unstyled">
       	<li><a href="#">©2014 lejun</a></li>
       	<li class="divider-vertical"><a href="#"></a></li>
       	<li><a href="">帮助</a></li>
      </ul>
      
    </div>
     </p>
 </footer>

</div>  
</body>

</html>