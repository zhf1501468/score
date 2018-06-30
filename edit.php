
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
	header ( "location:index.php" );
}
$id = $_REQUEST ['id'];
$sql = "select * from student where id = $id";
// exit($sql);
$result = mysql_query ( $sql );
$row = mysql_fetch_array ( $result )?>

	<div id="page-wrapper">
	<div id="page-inner">
	<div align='center'>
		<form action='editdo.php' method='post'>
			<input type='hidden' name='id' value='<?=$row ['id']?>' />
			<table width=300>
				<tr>
					<td align='center'>学号</td>
					<td><input type='text' name='studentId'
						value='<?=$row ['studentId']?>' /></td>
				</tr>
				<tr>
					<td align='center'>姓名</td>
					<td><input type='text' name='name' value='<?=$row ['name']?>' /></td>
				</tr>
				<tr>
					<td align='center'>班级</td>
					<td><input type='text' name='className'
						value='<?=$row ['className']?>' /></td>
				</tr>
				<tr>
					<td align='center'>生日</td>
					<td><input type='text' name='birthday' class="laydate-icon"
						id="birthday" value='<?=$row ['birthday']?>' /></td>
				</tr>
				<tr>
					<td align='center'>性别</td>
					<td><input type='radio' name='sex' value='男'
						<?=$row ['sex']=='男'?'checked':''?>>男 </input> <input type='radio'
						name='sex' value='女' <?=$row ['sex']=='女'?'checked':''?>>女</input>
					</td>
				</tr>
				<tr>
					<td align='center'>民族</td>
					<td><input type='text' name='nation' value='<?=$row ['nation']?>' /></td>
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