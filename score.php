<?php require_once 'base.php';?>
<?php
// 访问数据库，查询学生表
require_once 'dbconfig.php';
$sql = "select * from score";
$result = mysql_query ( $sql );
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>学生成绩信息</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />

		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading"><a href='addscore.php'><i class="fa fa-pencil fa-3x"></i>增加学生成绩信息</a></div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
								<thead>
									<tr>
										<th>编号
										
										</td>
										<th>学号
										
										</td>
										<th>日期
										
										</td>
										<th>科目
										
										</td>
										<th>成绩
										
										</td>
										<th>操作
										</th>
									</tr>
								</thead>
								<tbody>
								<?php
								$line = 0;
								while ( $row = mysql_fetch_array ( $result ) ) {
								$line++;
								$lineStyle = $line%2==1?"odd gradeX":"even gradeC";
									echo "<tr class='$lineStyle'>";
									echo "<td>" . $row ['id'] . "</td>";
									echo "<td>" . $row ['studentId'] . "</td>";
									echo "<td>" . $row ['term'] . "</td>";
									echo "<td>" . $row ['subject'] . "</td>";
									echo "<td>" . $row ['mark'] . "</td>";
									
									echo "<td>" ."<a href=\"update.php?id='". $row ['id'] ."'\"><i class=\"fa fa-pencil fa-3x\"></i>编辑</a>&nbsp;&nbsp;<a href=\"deletedo.php?id='". $row ['id'] ."'\"><i class=\"fa fa-trash-o fa-3x\"></i>删除</a></td>";
									echo "</tr>";
								}
								?>
								</tbody>
							</table>
						</div>

					</div>
				</div>
				<!--End Advanced Tables -->
			</div>
		</div>
	</div>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>
