<?php
    $HR='bank';
    include 'header.php';
    include 'sidebar.php';
    include '../class/Bank/Bank.php';

	$bankOb = new bank();
	if(isset($_GET['kind'])=='bank_delete'){		
		$bankOb->remove_bank($_GET['id']);
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
									<h3 class="panel-title">جدول البنوك</h3>
								</div>

								<div class="panel-body">
									<div class="text-left">
									<a href="addBank.php"><button type="button" class="btn btn-primary">اضافة بنك جديد&nbsp;<span class="lnr lnr-plus-circle"></span></button></a>
									</div>
									<br>
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>#الرقم</th>
													<th>اسم البنك</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<?php 
												// In the view
												$rows = $bankOb->display_bank();
												$count=1;
												foreach($rows as $row){ //for each object in the array		
								
												?>
												<tr>
												<td><?php echo $count; ?></td>
												<td><?php echo $row->BankName; ?></td>
									
												<td>
													<a href='editBank.php?id=<?=$row->id?>'><span class="lnr lnr-pencil"></span></a>&nbsp;&nbsp;
													<a href="bank.php?id=<?=$row->id?>&&kind=basicinfo_delet"><span class="lnr lnr-trash"></span></a>&nbsp;&nbsp;
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
