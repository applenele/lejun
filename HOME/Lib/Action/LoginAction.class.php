<?php
    class LoginAction extends Action{
		
	    /*实现用户登陆*/
		public function do_login(){
			 $username=$_POST['username'];
             $pwd=$_POST['pwd'];
			 $user=new Model("User_logn");

			$condition['username']=$username;
			$condition['password']=$pwd;
			
			$user_arr=$user->where($condition)->select();
			$count = count($user_arr);
			
			if($count>0){
<<<<<<< HEAD
				$_SESSION['username']=$username;
=======
				$_SESSION['username']='nele';
>>>>>>> parent of 176cb4d... Revert "第一次提交"
				$this->success('登录成功');
                
			}
			else{
				$this->error('用户或密码错误，请重新登录');
				}
		}
		
		/*注销用户操作*/
		public function  do_logout(){
			unset($_SESSION['username']);
			$this->success('注销成功');
			}
		
		
	}
?>
