<?php
namespace Home\Model;
use Think\Model;
class AdModel extends Model{
	
	//标题自动验证
	protected $_validate=array(
		array('Title','require','标题不能为空'),
		array('LinkUrl','require','链接不能为空'),
		array('Istop','require','排序不能为空'),
		array('Isshow','require','显示状态不能为空'),
	);
}
