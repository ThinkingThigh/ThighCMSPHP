<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function _initialize(){
		if(session("AdminAccount")!=""){			
			//$this->display();	
			}
		else{
			$this->display("Login/index");
			exit;
			}
	}
	
}