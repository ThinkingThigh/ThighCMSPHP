<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }
    public function login(){
    	$admin=M("admin");
		$AdminAccount=I('post.AdminAccount');
		$AdminPassword=I('post.AdminPassword');
		$admindata=$admin->where("AdminAccount='$AdminAccount' and AdminPassword='$AdminPassword'")->find();
		session("AdminAccount",$admindata['AdminAccount']);
		if(!$admindata){
			$this->error("帐号密码错误！");
			}
		else{
			var_dump($admindata['AdminAccount']);
			//$this->success("登录成功！",'../');
			}
    }
    public function logout(){
			session_unset();
			session_destroy();
			$this->success("退出成功！");	
			}
}