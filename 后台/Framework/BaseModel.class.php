<?php

class BaseModel{
	//这个，用于存储数据库工具类的实例（对象）
	protected $_dao = null;

	function __construct(){
		$config = array(
			'host' => "localhost",
			'port' => 3306,
			'user' => "用户名",
			'pass' => "密码",
			'charset' => "utf8",
			'dbname' => "数据库名称"
		);
		$this->_dao = MySQLDB::GetInstance($config);
	}	
	
}
