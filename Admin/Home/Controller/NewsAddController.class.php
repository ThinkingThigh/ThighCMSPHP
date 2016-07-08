<?php
namespace Home\Controller;
use Think\Controller;
class NewsAddController extends Controller {
    public function index(){
        $this->display();
    }
    //添加文章方法
    public function Add()
    {
    	$news=M('News')
    }
}