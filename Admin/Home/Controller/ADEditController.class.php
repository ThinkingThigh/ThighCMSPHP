<?php
namespace Home\Controller;
use Think\Controller;
class ADEditController extends CommonController {
    public function index($id){
        $AD=M("ad");
        $data=$AD->find($id);
        $this->assign('id',$data['id']);
        $this->assign('Title',$data['title']);
        $this->assign('LinkUrl',$data['linkurl']);
        $this->assign('PicUrl',$data['picurl']);
        $this->assign('Type',$data['type']);
        $this->assign('Istop',$data['istop']);
        $this->assign('Isshow',$data['isshow']);
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

        $config = array(
                'maxSize'    =>    3145728,
                'rootPath'   =>    './Uploads/',
                'savePath'   =>    '',
                'saveName'   =>    array('uniqid',''),
                'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
                'autoSub'    =>    true,
                'subName'    =>    array('date','Ymd'),
            );
        $upload = new \Think\Upload($config);// 实例化上传类

        $info=$upload->upload();

        if($info)
            {
                foreach($info as $file)
                {
                    $data['PicUrl']='/Uploads/'.$file['savepath'].$file['savename'];
                }

                $result=$AD->where("id=$id")->save($data);
                if($result!==false)
                {
                    $this->success("广告修改成功！",'../../../ADManage');
                }else
                {
                    $this->error('广告修改失败，返回上级页面');
                }
            }else
            {
                $this->error($upload->getError());  
                //$this->error('图片上传失败，返回上级页面');
            }
    }
}