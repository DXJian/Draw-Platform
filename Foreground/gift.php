<html>
<body>  

  
<?php
header("content-type:text/html;charset=utf-8");
@ $db=mysqli_connect("localhost","yd0602_com","668866","yd0602_com");
if(mysqli_connect_errno()){
	echo("Error:Couldnot connect the database");
	exit;
}

$tm = date('Y-m-d H:i:s',time()); 
$results=$_GET['results'];
echo "Time:" . $tm ."<br>";
echo "Gift lists:" . $results ."<br>";
    
$strsql = "insert into gift(times,gift) values('$tm',$results)";

$result=mysqli_query($db,$strsql);
if(!$result){
	echo("fail to insert data");
}else{
	echo("sucess in insert data");
}
@ mysqli_free_result($result);
mysqli_close($db);
?>

</body>
</html>