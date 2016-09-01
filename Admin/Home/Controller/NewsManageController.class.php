<?php
namespace Home\Controller;
use Think\Controller;
class NewsManageController extends CommonController {
    public function index(){
    	if (!empty($_GET['search']))
    	{
    		$condition['NewsTitle']=array('like','%'.$_GET['search'].'%');
    	}
        $News=M("News");
        
		$count  = count($News->where($condition)->select());// 查询满足要求的总记录数
		$Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$Page->setConfig('prev',  '<span aria-hidden="true">上一页</span>');//上一页
		$Page->setConfig('next',  '<span aria-hidden="true">下一页</span>');//下一页
		$Page->setConfig('first', '<span aria-hidden="true">首页</span>');//第一页
		$Page->setConfig('last',  '<span aria-hidden="true">尾页</span>');//最后一页
		$show = $Page->show();// 分页显示输出
		$data=$News->field("ID,NewsTitle,CreateDate")->order('ID desc')->limit($Page->firstRow.','.$Page->listRows)->where($condition)->select();
		$this->assign("data",$data);
		$this->assign('page',$show);
		
		$this->display();
    }

    public function del($id)
    {
		$News=M("News");
		$News->where("id=$id")->delete();
		$this->success("文章删除成功！",'../../');
	}
}