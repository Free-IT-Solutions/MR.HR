<?php
    $HR='employee';
    include 'header.php';
    include 'sidebar.php';
    include '../class/Employee/basicinfo.php';

	$user = new basicinfo();
	if(isset($_GET['kind'])=='basiinfo_delet'){		
		$user->remove_basicinfo($_GET['id']);
	}



?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">الجداول</h3>
							<!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">جدول الموظفين</h3>
								</div>

								<div class="panel-body">
									<div class="text-left">
									<a href="addEmployee.php"><button type="button" class="btn btn-primary">اضافة موظف جديد&nbsp;<span class="lnr lnr-plus-circle"></span></button></a>
									</div>
									<br>
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>الرقم</th>
													<th>الاسم</th>
													<th>الجنس</th>
													<th>تاريخ الميلاد</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<?php 
												// In the view
												$rows = $user->display_basicinfo();
												$count=1;
												foreach($rows as $row){ //for each object in the array		
								
												?>
												<tr>
												<td><?php echo $count; ?></td>
												<td><?php echo $row->FullName; ?></td>
												<td><?php echo $row->Gender; ?></td>
												<td><?php echo $row->DateofBirth; ?></td>
												<td>
													<a href='editEmployee.php?id=<?=$row->id?>'><span class="lnr lnr-pencil"></span></a>&nbsp;&nbsp;
													<a href="employee.php?id=<?=$row->id?>&&kind=basicinfo_delet"><span class="lnr lnr-trash"></span></a>&nbsp;&nbsp;
													<!-- <a href="#"><span class="lnr lnr-printer"></span></a>&nbsp;&nbsp; -->
													<!-- <a href="#"><span class="lnr lnr-file-empty"></span></a> -->
												</td>
                                                </tr>
										        <?php $count++; } ?>
                                            </tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- END BORDERED TABLE -->

				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>

	</div>
  <?php include 'footer.php'; ?>

</body>

</html>
