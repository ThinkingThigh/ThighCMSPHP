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
    	$upload=new \Think\Upload();
		$image=new \Think\Image();	
		$upload->maxSize=3145728;
		$upload->exts=array('jpg','png','gif','jpeg');
		$upload->rootPath='./Uploads/';
		
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
		$info=$upload->upload();
		if(!$info){
			$this->error($upload->getError());	
			}
		else{
				foreach($info as $file)
				{
					$image->open('./uploads/'.$file['savepath'].$file['savename']);
					$image->thumb(480,320,\Think\image::IMAGE_THUMB_NORTHWEST)->save('./uploads/'.$file['savepath']."thumb".$file['savename']);									
				}
				$data['PicUrl'] = '/uploads/'.$file['savepath'].$file['savename'];
				$data['PicUrl'] = '/uploads/'.$file['savepath']."thumb".$file['savename'];
			}
		$news->add($data);
		$this->success("文章添加成功！",U("index.php/admin/article/"));
    }
}