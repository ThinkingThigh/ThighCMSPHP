<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller {
    public function index(){
        $this->display();
    }
    public function insert()
    {
    	$Form = M("Form");
    	
    	//$data['title'] = '标题1';
	//$data['content'] = '内容1';
	$data['title'] = $_POST['title'];
	$data['content'] = $_POST['content'];
	$data['create_time']=date('Y-m-d H-i-s');
	$Form->add($data);
    }
}