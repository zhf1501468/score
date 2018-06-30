<?php require_once 'base.php';?>
<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];

// 访问数据库，查询学生表指定学号的学生
require_once 'dbconfig.php';
if (! isset ( $_REQUEST ['id'] )) {
	header ( "location:score.php" );
}
$id = $_REQUEST ['id'];
$sql = "select * from score where id = $id";
// exit($sql);
$result = mysql_query ( $sql );
$row = mysql_fetch_array ( $result )?>

	<div id="page-wrapper">
	<div id="page-inner">
	<div align='center'>
		<form action='updatedo.php' method='post'>
			<input type='hidden' name='id' value='<?=$row ['id']?>' />
			<table width=300>
				<tr>
					<td align='center'>编号</td>
					<td><input type='text' name='id'
						value='<?=$row ['id']?>' /></td>
				</tr>
				<tr>
					<td align='center'>学号</td>
					<td><input type='text' name='studentId' value='<?=$row ['studentId']?>' /></td>
				</tr>
				<tr>
					<td align='center'>日期</td>
					<td><input type='text' name='term'
						value='<?=$row ['term']?>' /></td>
				</tr>
				<tr>
					<td align='center'>科目</td>
					<td><input type='text' name='subject' class="laydate-icon"
						id="birthday" value='<?=$row ['subject']?>' /></td>
				</tr>
				
				<tr>
					<td align='center'>成绩</td>
					<td><input type='text' name='mark' value='<?=$row ['mark']?>' /></td>
				</tr>
				<tr>
					<td colspan=2 align='center'><input type='submit' value='确认修改' /></td>
				</tr>
			</table>
		</form>
	</div>
	<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#birthday'});//绑定元素
}();
</div>
</div>
		

</script>
</body>
</html>