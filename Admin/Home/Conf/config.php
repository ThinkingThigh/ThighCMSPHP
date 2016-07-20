<?php
return array(
	//数据库配置
	
	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'localhost',
	'DB_NAME'=>'db_thighcms',
	'DB_USER'=>'root',
	'DB_PWD'=>'huweishen.com',
	'DB_PORT'=>3306,
	'DB_PREFIX'=>'tb_',

	//调试工具
	'SHOW_PAGE_TRACE'=>true,
	//
	'SESSION_OPTIONS' => array('use_trans_sid'=>1),
	/*
	//PDO模式
	'DB_TYPE'=>'pdo',
	'DB_USER'=>'root',
	'DB_PWD'=>'huweishen.com',
	'DB_PREFIX'=>'tb_',
	'DB_DSN'=>'mysql:host=localhost;dbname=db_thighcms;charset=UTF8',
	*/

);