<?php
	session_start();//session starts here
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href=".\styles\bootstrap.css">
		<title>Login</title>
	</head>
	<style>
		.login-panel {
			margin-top: 150px;
		}
	</style>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">Authority Sign In</h3>
						</div>
						<div class="panel-body">
							<form role="form" method="post" action="login.php">
								<fieldset>
									<div class="form-group">
										<label for="desg">Designation</label>
										<select class="form-control" id="desg" name="desg" type="text" autofocus>
											<option>CEO</option>
											<option>Principal</option>
											<option>Vice Principal</option>
											<option>Dean (Academics)</option>
											<option>Dean (Admissions)</option>\
											<option>Head of Department (First Year)</option>
											<option>Head of Department (CSE)</option>
											<option>Head of Department (IT)</option>
											<option>Head of Department (Mechanical)</option>
											<option>Head of Department (ETC)</option>
											<option>Head of Department (Electrical)</option>
											<option>Head of Department (Civil)</option>
										</select>
										
									</div>
									<div class="form-group"  >
										<input class="form-control" placeholder="UserID" name="email" type="email" autofocus>
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="Password" name="pass" type="password" value="">
									</div>
									<input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
									<!-- Change this to a button or input when using this as a form -->
									<!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<center><h3><a href="index.php">Go home</a></h3></center>
	</body>
</html>
<?php
	include("database/db_conection.php");
		if(isset($_POST['login'])){
			$user_email=$_POST['email'];
			$user_pass=$_POST['pass'];
			$check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";
			$run=mysqli_query($dbcon,$check_user);
			if(mysqli_num_rows($run)){
				echo "<script>window.open('welcome.php','_self')</script>";
				$_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.
			}else{
				echo "<script>alert('Email or password is incorrect!')</script>";
			}
	}
?>