<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<script src="assets/js/lib/aws-cognito-sdk.min.js"></script>
    	<script src="assets/js/lib/amazon-cognito-identity.min.js"></script>
    	
</head>
<body>
	
	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="alert alert-danger" role="alert" id="error_msg_login" style="display:none">
						<strong>Error!</strong> Incorrect username or password.
					</div>
					<div class="alert alert-danger" role="alert" id="error_msg_register" style="display:none">
						<strong>Error!</strong> Invalid Credential.
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" onsubmit="return validateForm();" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" onsubmit="return validateForm();" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="regusername" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="regemail" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="tel" name="phonenumber" id="phnum" tabindex="1" class="form-control" placeholder="+15555555555" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="regpassword" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		      <!-- Modal content-->
		      	<div class="modal-content">
			        <div class="modal-header">
			          	<h4 class="modal-title">Verify your Registered Email</h4>
			        </div>
			        <div class="modal-body">
			          	<form id="verify-form" onsubmit="return validateForm();">
							<div class="form-group">
								<input type="number" name="verifycode" id="verifycode" tabindex="1" class="form-control" placeholder="6-Digit Code" value="">
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6 col-sm-offset-3">
										<input type="submit" name="verify-submit" id="verify-submit" tabindex="4" class="form-control btn btn-login" value="verify">
									</div>
								</div>
							</div>
						</form>
						
			        </div>
			        <div class="modal-footer">
			        	<button type="button" id="resend-verify-code" class="btn ">Resend code</button>
			          	<button type="button" id="delete-user" class="btn ">Close</button>
			          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
		      	</div> 
		    </div>
		</div>
	</div>
	<script src="assets/js/index.js"></script>
</body>
</html>
