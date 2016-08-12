<?php
namespace Home\Controller;
use Think\Controller;
class NewsAddController extends CommonController {
    public function index(){
        $this->display();
    }
    //添加文章方法
    public function Add()
    {
		$news=D("news");
		if($news->create()){
			$news->NewsTitle = I('post.NewsTitle');
			$news->Keywords = I('post.Keywords');
			$news->Description = I('post.Description');
			$news->Source = I('post.Source');
			$news->NewsClass1 = I('post.NewsClass1');
			$news->NewsClass2 = I('post.NewsClass2');
			$news->Istop = I('post.Istop');
			$news->NewsContent = $_POST['NewsContent'];
			$news->PvCount = 1;
			$news->CreateAdmin=session("AdminAccount");
			if($news->add()){
				$this->success("文章添加成功！",'../NewsManage');
			}else{
				$this->error('文章添加失败，返回上级页面');
			}
		}else{
			$this->error($news->getError());
		}
    }
}