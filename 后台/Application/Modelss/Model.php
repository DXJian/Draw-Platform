<?php

class ListModel  extends BaseModel{
	function GetAllList(){
		$sql = "select * from gift;";
		//$db = MySQLDB::GetInstance($config);
		$data = $this->_dao->GetRows($sql);
		return $data;
	}
	function GetListCount(){
		$sql = "select count(*) as c from gift;";
		//$db = MySQLDB::GetInstance($config);
		$data = $this->_dao->GetOneData($sql);
		return $data;
	}
	function delListById($id){
		$sql = "delete from gift where id = $id;";
		$data = $this->_dao->exec($sql);
		return $data;
	}	
	function GetGiftInfoById($id){
		$sql = "select * from gift where id = $id;";
		$data = $this->_dao->GetOneRow($sql);
		return $data;
	}
	
}