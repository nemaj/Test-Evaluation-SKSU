
<!-- start: PHP Initialiaze -->
<?php
    include'php_assets/admin_header.php';
    include'php_function/get_course.php';
    $active_dashboard = 'active';
    $active_teacher = '';
    $active_course = '';
?>
<!-- end: PHP Initialiaze -->

    <body>
		<div id="app" class="lyt-4">
			<div class="app-content">

				<!-- start: TOP NAVBAR -->
                <?php include'php_assets/admin_navbar.php'; ?>
				<!-- end: TOP NAVBAR -->

				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: BREADCRUMB -->
						<div class="breadcrumb-wrapper">
                <h4 class="mainTitle no-margin">Welcome to SKSU-Evaluation</h4>
                <span class="mainDescription">PRE-TEST &amp; POST-TEST </span>
                <ul class="pull-right breadcrumb">
								<li>
									<a href="index.php"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Admin</a>
								</li>
								<li>
									Dashboard
								</li>
							</ul>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: FIRST SECTION -->

            <div class="container-fluid container-fullw">
							<div class="row no-margin">
								<div class="col-xs-12 no-padding partition-azure no-border">
                  <div class="row no-margin">
                    <div class="panel panel-white no-radius no-margin">
										  <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-4 col-xs-5">
                          <h5 class="over-title margin-bottom-15"><span class="text-bold">Course</span> List</h5>
                        </div>
                        <div class="col-lg-8 col-xs-7 text-right">
                        <div class="btn-group">
													<button type="button" class="btn btn-azure btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">
														Add <span class="text-bold">Course</span>
													</button>
                        </div>
                            </div>
                        </div>
                        <table class="table table-hover" id="sample-table-1">
                            <thead>
                                <tr>
                                    <th width="100" class="center">#</th>
                                    <th width="500">Course</th>
                                    <th width="500" class="hidden-xs">Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $row_c = 1; while($row = mysqli_fetch_assoc($course)){ ?>
                                <tr>
                                    <td class="center"><? echo $row_c ?></td>
                                    <td><? echo $row['course'] ?></td>
                                    <td class="hidden-xs"><? echo !$row['description'] ? '-' : $row['description'] ?></td>
                                    <td class="center">
                                    <div class="visible-md visible-lg hidden-sm hidden-xs">
                                        <a href="#" class="btn btn-transparent btn-xs"  data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-transparent btn-xs tooltips"  data-toggle="tooltip" data-placement="top" title="Share"><i class="fa fa-share"></i></a>
                                        <a href="#" class="btn btn-transparent btn-xs tooltips"  data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                    </div>
                                    <div class="visible-xs visible-sm hidden-md hidden-lg">
                                        <div class="btn-group dropdown ">
                                            <button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right dropdown-light" role="menu">
                                                <li>
                                                    <a href="#"> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Share </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Remove </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div></td>
                                </tr>
                                <?php $row_c++; } ?>
                            </tbody>
                        </table>
                    </div>
									  </div>
                  </div>
								</div>
							</div>
            </div>

            <!-- Small Modal -->
            <div class="modal fade bs-example-modal-sm"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Add Course</h4>
                        </div>
                        <form role="form" action="php_function/add_course.php" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="course"> Course <span class="symbol required"></span> </label>
                                    <input type="text" class="form-control" id="course" name="course" placeholder="Course #" required>
                                </div>
                                <div class="form-group">
                                    <label for="description"> Description </label>
                                    <textarea placeholder="Course Description" id="description" name="description" class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Save Course
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Small Modal -->

						<!-- end: FIRST SECTION -->
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
			<footer>
				<div class="footer-inner">
					<div class="pull-left">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> ClipTheme</span>. <span>All rights reserved</span>
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="ti-angle-up"></i></span>
					</div>
				</div>
			</footer>
			<!-- end: FOOTER -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<?php include'php_assets/admin_js.php'; ?>
        <!-- end: MAIN JAVASCRIPTS -->

		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="../../bower_components/Chart-js/Chart.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

        <!-- start: Packet JAVASCRIPTS -->
		<script src="../assets/js/letter-icons.js"></script>
		<script src="../assets/js/main.js"></script>
		<!-- end: Packet JAVASCRIPTS -->
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="../assets/js/index.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
	</body>
</html>
