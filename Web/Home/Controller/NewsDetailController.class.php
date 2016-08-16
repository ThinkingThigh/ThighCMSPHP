<?php
namespace Home\Controller;
use Think\Controller;
class NewsDetailController extends Controller {
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
        $this->assign('PvCount',$data['pvcount']);
        $this->assign('CreateAdmin',$data['createadmin']);
        $this->display();
    }
}