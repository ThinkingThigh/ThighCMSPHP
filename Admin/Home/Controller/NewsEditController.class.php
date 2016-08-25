<?php
namespace Home\Controller;
use Think\Controller;
class NewsEditController extends CommonController {
    public function index($id){
        $News=M("News");
        $data=$News->find($id);
        $this->assign('id',$data['id']);
        $this->assign('NewsTitle',$data['newstitle']);
        $this->assign('Keywords',$data['keywords']);
        $this->assign('Description',$data['description']);
        $this->assign('Source',$data['source']);
        $this->assign('NewsClass1',$data['newsclass1']);
        $this->assign('NewsClass2',$data['newsclass2']);
        $this->assign('Istop',$data['istop']);
        $this->assign('NewsContent',$data['newscontent']);
        $this->assign('PvCou nt',$data['pvcount']);
        $this->assign('CreateAdmin',$data['createadmin']);
        $this->display();
    }
    public function Edit($id)
    {
        $news=M("news");
        $data=$news->find($id);
        $data['NewsTitle'] = I('post.NewsTitle');
        $data['Keywords'] = I('post.Keywords');
        $data['Description'] = I('post.Description');
        $data['Source'] = I('post.Source');
        $data['NewsClass1'] = I('post.NewsClass1');
        $data['NewsClass2'] = I('post.NewsClass2');
        $data['Istop'] = I('post.Istop');
        $data['NewsContent'] = $_POST['NewsContent'];
        $data['PvCount'] = 1;
        $data['CreateAdmin']=session("AdminAccount");
        $result=$news->where("id=$id")->save($data);
        if($result!==false){
            $this->success("文章编辑成功！",'../../../NewsManage');
        }else{
            $this->error('文章编辑失败，返回上级页面');
        }
        
    }
}