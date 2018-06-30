<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$id = $_REQUEST ['id'];
$studentId = $_REQUEST ['studentId'];
$term = $_REQUEST ['term'];
$subject = $_REQUEST ['subject'];
$mark = $_REQUEST ['mark'];


// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "update score set id = '$id',studentId = '$studentId',term = '$term',subject = '$subject',mark ='$mark' where id = $id";
if (mysql_query ( $sql )) {
	echo "修改成功！！！<br/>";
	echo "<a href='score.php'>回到主页</a>";
} else {
	echo "修改失败！！！<br/>";
	echo "<a href='update.php'>系统错误</a>";
}