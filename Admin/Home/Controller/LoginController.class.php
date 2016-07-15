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
		$userdata=$admin->where("AdminAccount='$AdminAccount' and AdminPassword='$AdminPassword'")->find();
		session("AdminAccount",$userdata['AdminAccount']);
		if(!$userdata){
			$this->error("帐号密码错误！");
			}
		else{
			$this->success("登录成功！",'../');	
			}
    }
}