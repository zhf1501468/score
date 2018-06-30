<?php
require_once 'dbconfig.php';
header("content-type:text/html;charset=utf-8");
//取表单数据
$id = $_REQUEST['id'];
$studentid = $_REQUEST['studentId'];
$term = $_REQUEST['term'];
$subject = $_REQUEST['subject'];
$mark = $_REQUEST['mark'];


//sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "INSERT INTO score(id, studentId, term, subject, mark ) VALUES ('$id','$studentid','$term','$subject','$mark')";
//exit($sql);

if(mysql_query($sql)){
	echo "修改成功！！！<br/>";
	header ( "location:score.php" );
}else{
	echo "修改失败！！！<br/>";
	echo "<a href='addscore.php'>重新修改</a>";
}