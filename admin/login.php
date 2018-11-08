<?php

/**
 * @Author: indran
 * @Date:   2018-10-23 17:00:27
 * @Last Modified by:   indran
 * @Last Modified time: 2018-11-08 06:44:34
 */

include_once('../global.php'); ?>
<?php include_once('../root/functions.php'); ?>


<?php



include_once('../root/connection.php'); 

$db=new Database();
$error='';

$message=array(
	null,
	null
);






if( isset( $_SESSION[SYSTEM_NAME . 'userid'] ) ) {
	if( $_SESSION['type'] == 'admin' ) {
		header('Location: ' . PATH . 'admin');
	}         

	exit();
}



if(isset($_POST['login'])){

	$username = $_POST['username'];
	$password = $_POST['password'];


	$stmnt='select * from login where username = :username and password = :password';
	$params=array( 
		':username'  =>  $username,
		':password'  =>  $password
	);


	$user = $db->display($stmnt,$params);
	
	if($user){

		$_SESSION[SYSTEM_NAME . 'userid']=$username;


		$_SESSION[SYSTEM_NAME . 'type']='admin'; 
		setLocation(  DIRECTORY_ADMIN );






		exit();
	} else{ 

		$message [0] = 3;
		$message [1] = 'Incorrect username or password'; 


	}


}



?>




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


<style type="text/css">

@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
	width: 360px;
	padding: 8% 0 0;
	margin: auto;
}
.form {
	position: relative;
	z-index: 1;
	background: #FFFFFF;
	max-width: 360px;
	margin: 0 auto 100px;
	padding: 45px;
	text-align: center;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
	font-family: "Roboto", sans-serif;
	outline: 0;
	background: #f2f2f2;
	width: 100%;
	border: 0;
	margin: 0 0 15px;
	padding: 15px;
	box-sizing: border-box;
	font-size: 14px;
}
.form button {
	font-family: "Roboto", sans-serif;
	text-transform: uppercase;
	outline: 0;
	background: #4CAF50;
	width: 100%;
	border: 0;
	padding: 15px;
	color: #FFFFFF;
	font-size: 14px;
	-webkit-transition: all 0.3 ease;
	transition: all 0.3 ease;
	cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
	background: #43A047;
}
.form .message {
	margin: 15px 0 0;
	color: #b3b3b3;
	font-size: 12px;
}
.form .message a {
	color: #4CAF50;
	text-decoration: none;
}
.form .register-form {
	display: none;
}
.container {
	position: relative;
	z-index: 1;
	max-width: 300px;
	margin: 0 auto;
}
.container:before, .container:after {
	content: "";
	display: block;
	clear: both;
}
.container .info {
	margin: 50px auto;
	text-align: center;
}
.container .info h1 {
	margin: 0 0 15px;
	padding: 0;
	font-size: 36px;
	font-weight: 300;
	color: #1a1a1a;
}
.container .info span {
	color: #4d4d4d;
	font-size: 12px;
}
.container .info span a {
	color: #000000;
	text-decoration: none;
}
.container .info span .fa {
	color: #EF3B3A;
}
body {
	background: #76b852; /* fallback for old browsers */
	background: -webkit-linear-gradient(right, #76b852, #8DC26F);
	background: -moz-linear-gradient(right, #76b852, #8DC26F);
	background: -o-linear-gradient(right, #76b852, #8DC26F);
	background: linear-gradient(to left, #76b852, #8DC26F);
	font-family: "Roboto", sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;      
}
</style>
<body>



	<div class="login-page">
		<div class="form">
			<form class="register-form">
				<input type="text" placeholder="name"/>
				<input type="password" placeholder="password"/>
				<input type="text" placeholder="email address"/>
				<button>create</button>
				<!-- <p class="message">Already registered? <a href="#">Sign In</a></p> -->
			</form>
			<form class="login-form" action="" method="post" data-parsley-validate>
				<input type="text" placeholder="username" required name="username" />
				<input type="password" placeholder="password" required name="password" />



				<?php echo show_error($message); ?>
				<button name="login">login</button>
				<!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
			</form>
		</div>
	</div>

	<!-- <div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
				<div class="row w-100">
					<div class="col-lg-4 mx-auto">
						<div class="auto-form-wrapper">
							<form action="#">
								<div class="form-group">
									<label class="label">Username</label>
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
									<label class="label">Password</label>
									<div class="input-group">
										<input type="password" class="form-control" placeholder="*********">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="mdi mdi-check-circle-outline"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<button class="btn btn-primary submit-btn btn-block">Login</button>
								</div>
								<div class="form-group d-flex justify-content-between">
									<div class="form-check form-check-flat mt-0">
										<label class="form-check-label"> 
										</div>
										<a href="#" class="text-small forgot-password text-black">Forgot Password</a>
									</div>
									<div class="form-group">
										<button class="btn btn-block g-login">
											Log in with Google<img class="ml-3" src="https://www.bootstrapdash.com/demo/star-admin-pro/src/assets/images/file-icons/icon-google.svg" alt=""></button>
										</div>
										<div class="text-block text-center my-3">
											<span class="text-small font-weight-semibold">Not a member ?</span>
											<a href="register.html" class="text-black text-small">Create new account</a>
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
			</div> -->








			<script src="assets/js/popper.min.js"></script>  
			<script src="assets/js/bootstrap-material-design.min.js"></script> 
			<script src="assets/js/jquery.slimscroll.min.js"></script> 
			<script src="assets/js/parsley.min.js"></script>
			<script src="assets/js/lobibox.min.js"></script>  


			<script src="admin/js/main.js"></script>



			<script type="text/javascript">
				$(document).ready(function($) {
					$('body').bootstrapMaterialDesign();


					$("[data-parsley-validate]").parsley({
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


					$('.message a').click(function(){
						$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
					});


				});


			</script>

		</body>

		</html>
