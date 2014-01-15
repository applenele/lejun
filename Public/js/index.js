$(document).ready(function(e) {
  	
	/*登陆框的设置*/
	$("#login-win-close-btn").bind("click",function(){
		   /*当取消登录时 将登陆框上的用户名和密码清楚*/
		   $('#username').val("");
		   $('#pwd').val("");
		   $('#code').val("");
		   $("#login_warning").text("");
		   $("#username-warning").text("");
		   $("#pwd-warning").text("");
		   $("#code-warning").text("");
		   $('#login-win').modal('hide');/*隐藏登陆框*/
		});
		
		
     $("#username").bind("blur",function(){//离开用户框的事件
		  var username=$("#username").val();
		  var len=username.length;
		   if(len<=0){
			   $("#username-warning").text("请输入用户名");
			   }
		 });	
		 
	$("#pwd").bind("blur",function(){//离开密码框的事件
		  var pwd=$("#pwd").val();
		  var len=pwd.length;
		   if(len<=0){
			   $("#pwd-warning").text("请输入密码");
			   }
		 });
		 
		 
     $("#code").bind("blur",function(){//离开验证码框的事件
		  var code=$("#code").val();
		  var len=code.length;
		   if(len<=0){
			   $("#code-warning").text("请输入验证码");
			   }
		 });		 	
	
	$("#login-sub-btn").bind("click",function(){//提交登陆
		      var username=$("#username").val();
			  var pwd=$("#pwd").val();
			  var code=$("#code").val();
			  
			  var name_len=username.length;
			  var pwd_len=pwd.length;
			  var code_len=code.length;
			  if(name_len<=0){
				  $("#login_warning").text("用户名不能为空！");
				  return  false;
				  }
			  if(pwd_len<=0){
				  $("#login_warning").text("密码不能为空！");
				  return  false;
				  }
		     if(code_len<=0){
				  $("#login_warning").text("验证码不能为空！");
				  return  false;
				  }		  
             
			 /*$.ajax({
				 type:'POST',
				 url:'index.php/Login/do_login',
				 data:{
					 username:username,pwd:pwd,code:code 
					 },
			     success: function(data){
					 alert(data);
					if(data=='验证码错误'){
						$("#login_warning").text("验证码输入错，请重新误");
						}
				    if(data=='1'){
						$("#login_warning").text("用户名或密码错误，请重新输入");
						}
					else{
						alert(data);
						}	
					 },	
				 error:function(data){
					alert(data);
					}	 	 
				 });*/
				 
				 $.post('index.php/Login/do_login',{username:username,pwd:pwd,code:code},    function(data){		 
				     alert(data);
					 var s=data.substr(0,1);
				   if(s=='0'){
						$("#login_warning").text("验证码输入错，请重新输入");
						}
				    else if(s=='1'){
						$("#login_warning").text("用户名或密码错误，请重新输入");
						}
					else if(s=='2'){
						window.location.href="index.php";
						}
				    else{
						alert("srror"+data);
						}		
					 });
					 
				 
		});
	
		
		
	/*确认退出的设置*/	
	$("#logout-cancel-btn").bind("click",function(){
		   $('#confire-logout-win').modal('hide');/*隐藏注册框*/
		});
		
		
	/*搜索*/		
	$('#search-text').bind("blur",function(){
		  $('#search-text').val("");/*当鼠标离开搜索框把搜索框清空*/
		});
	 
	 /*图片滑动*/
	 $('.carousel').carousel({
        interval: 2000   /*设置幻灯片的时间间隔*/
    })

 });