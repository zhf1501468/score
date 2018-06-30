<?php
require_once 'dbconfig.php';
header("content-type:text/html;charset=utf-8");
//取表单数据
$studentid = $_REQUEST['studentId'];
$name = $_REQUEST['name'];
$classname = $_REQUEST['className'];
$birthday = $_REQUEST['birthday'];
$sex = $_REQUEST['sex'];
$nation = $_REQUEST['nation'];

//sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "INSERT INTO student(studentId, name, className, birthday, sex, nation) VALUES ('$studentid','$name','$classname','$birthday','$sex','$nation')";
//exit($sql);

if(mysql_query($sql)){
	echo "修改成功！！！<br/>";
	header ( "location:index.php" );
}else{
	echo "修改失败！！！<br/>";
	echo "<a href='add.php'>重新修改</a>";
}