<?php

/**
 * @Author: indran
 * @Date:   2018-10-23 17:12:26
 * @Last Modified by:   indran
 * @Last Modified time: 2018-10-23 17:14:19
 */


include_once('../global.php'); ?>
<?php include_once('../root/functions.php'); ?>
<!DOCTYPE html>
<html lang="en"  ng-app="app-admin">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Indran">
	<meta name="github" content="https://github.com/indrajithc">

	<base href="<?php echo DIRECTORY ; ?>">
	<title><?php  echo DISPLAY_NAME; ?></title>

	<link rel="icon" href="assets/image/favicon/favicon.ico">

	<meta name="csrf-token" content="<?php echo $_SESSION[ SYSTEM_NAME . '_token']; ?>">










	<link rel="stylesheet" href="admin/css/style.css">  
	<link rel="stylesheet" href="admin/css/style_01.css">



	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


<link rel="shortcut icon" href="assets/image/favicon/favicon.ico" /> 
<script src="assets/js/jquery.min.js"></script> 

</head>



<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
				<div class="row w-100">
					<div class="col-lg-4 mx-auto">
						<h2 class="text-center mb-4">Register</h2>
						<div class="auto-form-wrapper">
							<form action="#">
								<div class="form-group">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Username">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="mdi mdi-check-circle-outline"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<input type="password" class="form-control" placeholder="Password">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="mdi mdi-check-circle-outline"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<input type="password" class="form-control" placeholder="Confirm Password">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="mdi mdi-check-circle-outline"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="form-group d-flex justify-content-center">
									<div class="form-check form-check-flat mt-0">
										<label class="form-check-label">
											<input type="checkbox" class="form-check-input" checked> I agree to the terms </label>
										</div>
									</div>
									<div class="form-group">
										<button class="btn btn-primary submit-btn btn-block">Register</button>
									</div>
									<div class="text-block text-center my-3">
										<span class="text-small font-weight-semibold">Already have and account ?</span>
										<a href="login.html" class="text-black text-small">Login</a>
									</div>
								</form>
							</div>


							<ul class="auth-footer">
								<li>
									<a href="#">Conditions</a>
								</li>
								<li>
									<a href="#">Help</a>
								</li>
								<li>
									<a href="#">Terms</a>
								</li>
							</ul>
							


							<span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> Copyright © <?php echo THEME_OWN_BY; ?>
							<a href="<?php echo TERMS__CONDITIONS; ?>" target="_blank">read</a>. All rights reserved.</span>




						</div>
					</div>
				</div> 
			</div> 
		</div>








		<script src="assets/js/popper.min.js"></script>  
		<script src="assets/js/bootstrap-material-design.min.js"></script> 
		<script src="assets/js/jquery.slimscroll.min.js"></script> 
		<script src="assets/js/parsley.min.js"></script>
		<script src="assets/js/lobibox.min.js"></script>  


		<script src="admin/js/main.js"></script>



		<script type="text/javascript">
			$(document).ready(function($) {
				$('body').bootstrapMaterialDesign();


				$("form.parsley").parsley({
					errorClass: 'has-danger',
					successClass: 'has-success',
					classHandler: function(ParsleyField) {
						return ParsleyField.$element.parents('.form-group');
					},
					errorsContainer: function(ParsleyField) {
						return ParsleyField.$element.parents('.form-group');
					},
					errorsWrapper: '<span class="invalid-feedback d-block">',
					errorTemplate: '<div></div>',
					trigger: 'change'
				});





			});
		</script>

	</body>

	</html>
