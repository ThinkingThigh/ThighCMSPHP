<?php
namespace Home\Controller;
use Think\Controller;
class ADAddController extends CommonController {
    public function index(){
        $this->display();
    }
    //添加文章方法
    public function Add()
    {
		$AD=D("ad");
		if($AD->create()){
			$AD->Title = I('post.Title');
			$AD->LinkUrl = I('post.LinkUrl');
			$AD->Type = I('post.Type');
			$AD->Istop = I('post.Istop');
			$AD->Isshow = I('post.Isshow');
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
			//$image=new \Think\Image();	
			if($info)
			{
				foreach($info as $file)
				{
					$AD->PicUrl='/Uploads/'.$file['savepath'].$file['savename'];
				}
				
				if($AD->add())
				{
					$this->success("广告添加成功！",'../ADManage');
				}else
				{
					$this->error('广告添加失败，返回上级页面');
				}
			}else
			{
				$this->error($upload->getError());	
				//$this->error('图片上传失败，返回上级页面');
			}
			
		}else{
			$this->error($AD->getError());
		}
    }
}