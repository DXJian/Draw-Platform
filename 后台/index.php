<?php
header("content-type:text/html; charset=utf-8");//设置输出的字符编码为utf8
require './Framework/MySQLDB.class.php';
require './Framework/ModelFactory.class.php';
require './Framework/BaseModel.class.php';
require './Application/Modelss/Model.php';
require './Application/Controllers/Controller.php';


$ctrl = new Controller();
$act = !empty($_GET['act']) ? $_GET['act'] : "Index";
$action = $act . "Action";	
$ctrl->$action();	//可变函数————>>可变方法