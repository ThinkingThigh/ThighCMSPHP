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
		$news=M("news");			 
		$data['NewsTitle'] = I('post.NewsTitle');
		$data['Keywords'] = I('post.Keywords');
		$data['Description'] = I('post.Description');
		$data['Source'] = I('post.Source');
		$data['NewsClass1ID'] = I('post.NewsClass1ID');
		$data['NewsClass1Name'] = I('post.NewsClass1Name');
		$data['NewsClass2ID'] = I('post.NewsClass2ID');
		$data['NewsClass2Name'] = I('post.NewsClass2Name');
		$data['Istop'] = I('post.Istop');
		$data['NewsContent'] = $_POST['NewsContent'];
		$data['PvCount']=1;
		$data['CreateAdmin']=session("AdminAccount");

		$news->add($data);
		$this->success("文章添加成功！",'../NewsManage');
    }
}