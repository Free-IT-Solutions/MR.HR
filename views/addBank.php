<?php
    $HR='bank';
    include 'header.php';
    include 'sidebar.php';

?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">البنوك</h3>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">اضافة بنك جديد</h3>
                        </div>

                        <div class="panel-body">
                            <!-- اضافة بنك جديد -->
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <label for="">اسم البنك</label>
                                        <input type="text" class="form-control" placeholder="اسم البنك" required>
                                        <br>
                                    </div>
                                </div>
								<div class="margin-top-30 text-center">
									<button id="add" name="add"  type="submit" class="btn btn-success update-pro">اضافة</button>
								</div>
                            </form>
                            <!-- نهاية اضافة بنك جديد -->
                        </div>
                    </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/scripts/klorofil-common.js"></script>
</body>

</html>