<?php

class Controller{

	//显示抽奖列表
	function IndexAction(){
		$obj_List = ModelFactory::M('ListModel');
		$data1 = $obj_List->GetAllList();	//是一个二维数组
		$data2 = $obj_List->GetListCount();	//是一个数字
		//载入视图文件，以显示该2份数据：
		include './Application/Views/View-index.html';        //需要注意的是所有逻辑起点都是从index.php开始思考的，所以不需要考虑要回退多少个目录，加多少个"."
	}

	//删除指定抽奖信息
	function DelAction(){
		$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
		$obj = ModelFactory::M('ListModel');
		$result = $obj->delListById($id);
	    echo "<script>alert('删除成功！')</script>";
		echo "<meta http-equiv='Refresh' content='0;URL=index.php'>";
	}
	
	//查看指定抽奖结果详情
	function DetailAction(){
		$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
		$obj = ModelFactory::M('ListModel');
		$data = $obj->GetGiftInfoById($id);
		include './Application/Views/View-GiftInfo.html';
	}

}

//$ctrl = new Controller();
//$act = !empty($_GET['act']) ? $_GET['act'] : "Index";
//$action = $act . "Action";	
//$ctrl->$action();	//可变函数————>>可变方法

//以上4行，移动到了index.php中，实际上代替了以下所有if判断逻辑！！！
/*
if(!empty($_GET['act']) && $_GET['act'] == 'detail'){
	DetailAction();
}
else if(!empty($_GET['act']) && $_GET['act'] == 'del'){
	DelAction();
}
else{
	IndexAction();
}
*/
