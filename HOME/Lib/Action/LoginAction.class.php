<?php
    class LoginAction extends Action{
		
	    /*实现用户登陆*/
		public function do_login(){
			if($_SESSION['verify'] != md5($_POST['code'])) {
                 echo '0';
              }else{    
			 $username=$_POST['username'];
             $pwd=$_POST['pwd'];
			 $user=new Model("User_logn");

			$condition['username']=$username;
			$condition['password']=$pwd;
			
			$user_arr=$user->where($condition)->select();
			$count = count($user_arr);
			if($count>0){
				$_SESSION['username']=$username;
				echo '2';     
			}
			else{
				echo '1';
				}
           }			
		}
		
		/*注销用户操作*/
		public function  do_logout(){
			unset($_SESSION['username']);
		    $this->success("注销成功");
		    $this->redirect("Index/index");  
			}
		
		
	}
?>
