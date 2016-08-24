<?php
namespace Home\Controller;
use Think\Controller;
class ADEditController extends CommonController {
    public function index($id){
        $AD=M("ad");
        $data=$AD->find($id);
        $this->assign('id',$data['id']);
        $this->assign('Title',$data['Title']);
        $this->assign('LinkUrl',$data['LinkUrl']);
        $this->assign('Type',$data['Type']);
        $this->assign('Istop',$data['Istop']);
        $this->assign('Isshow',$data['Isshow']);
        $this->display();
    }
    public function Edit($id)
    {
        $AD=M("ad");
        $data=$AD->find($id);
        $data['Title'] = I('post.Title');
        $data['LinkUrl'] = I('post.LinkUrl');
        $data['Type'] = I('post.Type');
        $data['Istop'] = I('post.Istop');
        $data['Isshow'] = I('post.Isshow');

        $result=$AD->where("id=$id")->save($data);
        if($result!==false){
            $this->success("广告编辑成功！",'../../../ADManage');
        }else{
            $this->error('广告编辑失败，返回上级页面');
        }
        
    }
}