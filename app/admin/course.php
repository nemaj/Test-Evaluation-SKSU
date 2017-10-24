
<!-- start: PHP Initialiaze -->
<?php
    include'php_assets/admin_header.php';
    include'php_function/check_id.php';
    include'php_function/get_each_course.php';
    include'php_function/get_course.php';
    include'php_function/get_subject.php';
    $active_dashboard = '';
    $active_teacher = '';
    $active_course = 'active';
?>
<!-- end: PHP Initialiaze -->

    <body ng-app="EvaluationApp">

        <script src="../../node_modules/angular/angular.js"></script>
        <script src="../php_assets/angular_app.js"></script>


		<div id="app" class="lyt-4">
			<div class="app-content">

				<!-- start: TOP NAVBAR -->
                <?php include'php_assets/admin_navbar.php'; ?>
				<!-- end: TOP NAVBAR -->

				<div class="main-content" ng-controller="CourseCtrl">
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
									Course
								</li>
								<li>
                                    <? echo $course_data['course'] ?>
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
                                          <h5 class="over-title margin-bottom-15"><span class="text-bold"><? echo $course_data['course'] ?></span> Subject</h5>
                                      </div>
                                      <div class="col-lg-8 col-xs-7 text-right">
                                          <div class="btn-group">
            								<button type="button" ng-click="clearCourse()" class="btn btn-azure btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">
            									Add <span class="text-bold">Subject</span>
            								</button>
                                          </div>
                                      </div>
                                    </div>
                                    <table class="table table-hover" id="sample-table-1">
                                        <thead>
                                            <tr>
                                                <th width="100" class="center">#</th>
                                                <th width="500">Subject Code</th>
                                                <th width="500" class="hidden-xs">Description</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php $row_c=1; while($row = mysqli_fetch_assoc($subject)){ ?>
                                            <tr>
                                                <td class="center"><? echo $row_c ?></td>
                                                <td><? echo $row['subject_code'] ?></td>
                                                <td class="hidden-xs"><? echo $row['description'] ?></td>
                                                <td class="center">
                                                <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                    <a class="btn btn-transparent btn-xs tooltips"><i class="fa fa-info-circle" ng-click="viewCourse(<? echo htmlspecialchars(json_encode($row)) ?>)"></i></a>
                                                    <a type="button" class="btn btn-transparent btn-xs" ng-click="getCourse(<? echo htmlspecialchars(json_encode($row)) ?>)" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-pencil"></i></a>
                                                    <a href="" class="btn btn-transparent btn-xs tooltips" ng-click="getCourse(<? echo htmlspecialchars(json_encode($row)) ?>)" data-toggle="modal" data-target=".bs-example-modal-sm-delete"><i class="fa fa-times fa fa-white"></i></a>
                                                </div>
                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="btn-group dropdown ">
                                                        <button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" data-toggle="dropdown">
                                                            <i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right dropdown-light" role="menu">
                                                            <li>
                                                                <a href="#"> View </a>
                                                            </li>
                                                            <li>
                                                                <a href="#"> Edit </a>
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
                            <h4 class="modal-title" id="myModalLabel">{{button}} Subject</h4>
                        </div>
                        <form role="form" action="php_function/add_subject.php?id=<? echo $_GET['id'] ?>" method="post">
                            <input type="hidden" name="courseID" value="{{ courseData.subject_id ? courseData.subject_id : '' }}">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="code"> Subject Code <span class="symbol required"></span> </label>
                                    <input type="text" class="form-control" id="code" name="code" placeholder="Subject Code" value="{{ courseData.subject_code ? courseData.subject_code : '' }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="description"> Description </label>
                                    <textarea placeholder="Subject Description" id="description" name="description" class="form-control" rows="4">{{ courseData.description ? courseData.description : '' }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    {{button}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade bs-example-modal-sm-delete"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Delete Warning</h4>
                        </div>
                        <div class="modal-body">
                            Do you want to delete <strong>{{courseData.subject_code}}</strong> ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                Close
                            </button>
                            <a type="submit" href="php_function/del_subject.php?id={{courseData.subject_id}}&course={{courseData.course_id}}" class="btn btn-primary">
                                Delete
                            </a>
                        </div>
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
