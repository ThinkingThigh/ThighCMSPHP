<?php
namespace Home\Controller;
use Think\Controller;
class NewsAddController extends CommonController {
    public function index(){
        $this->display();
    }
    
    public function del($id)
    {
		$news=M("news");
		$news->where("id=$id")->delete();
		$this->success("文章删除成功！",'../NewsManage');
	}
}