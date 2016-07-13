<?php
namespace Home\Controller;
use Think\Controller;
//use Think\Model;
class UserAddController extends Controller {
    public function index(){
        $this->display();
    }
    public function model()
    {
    	/*
    	$admin =new Model('admin');
    	//var_dump($admin);
    	var_dump($admin->select());
    	*/
    	$admin=M('admin');
    	//var_dump($admin->select());
    	var_dump($admin->where('id=1')->select());
    }
    //添加管理员
    public function insert(){
        $admin   =   D('admin');
        if($admin->create()) {
            $result =   $admin->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($admin->getError());
        }
    }
}