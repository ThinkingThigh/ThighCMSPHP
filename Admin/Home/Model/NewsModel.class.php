<?php
namespace Home\Model;
use Think\Model;
class NewsModel extends Model{
	
	//标题自动验证
	protected $_validate=array(
		array('NewsContent','require','内容不能为空'),
		array('NewsTitle','require','标题不能为空'),
		array('Keywords','require','关键词不能为空'),
		array('Description','require','页面描述不能为空'),
		array('Source','require','来源不能为空'),
	);
}
