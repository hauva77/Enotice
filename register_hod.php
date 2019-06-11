<html>
	<head>
		<meta charset="UTF-8">
		<script src="./scripts/bootstrap.min.js"></script>
		<link rel="stylesheet" href="./styles/bootstrap.min.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<title>Registration</title>
	</head>
	<style>
		.login-panel {
			margin-top: 150px;
		}
	</style>
	<script>
			@import url(http://fonts.googleapis.com/css?family=Anaheim);
	</script>
	<body>
		<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
			<div class="row"><!-- row class is used for grid system in Bootstrap-->
				<div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
					<div class="login-panel panel panel-success">
						<div class="panel-heading">
							<center><h3 class="panel-title">Authority Registration</h3></center>
						</div>
						<div class="panel-body">
							<form role="form" method="post" action="register_student.php">
								<fieldset>
									<div class="form-group">
										<input class="form-control" placeholder="Name" name="name" type="text" autofocus>
									</div>


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

									<div class="form-group">
										<input class="form-control" placeholder="UserID" name="u_id" type="text" autofocus>
									</div>


									<div class="form-group">
										<input class="form-control" placeholder="Password" name="u_pass" type="password" autofocus>
									</div>

									<div class="form-group">
										<input class="form-control" placeholder="Verification Code" name="unique_code" type="password" autofocus>
									</div>
								
									<input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >
								</fieldset>
							</form>
							<center><h4><b>Already registered?</b></h4><h5><a href="login.php">Login here</a></h5></center><!--for centered text-->
							<center><h3><a href="index.php">Go home</a></h3></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
	include("database/db_conection.php");//make connection here
	if(isset($_POST['register'])){
		$name=$_POST['name'];//here getting result from the post array after submitting the form.
		$roll=$_POST['roll'];
		$year=$_POST['year'];
		$dept=$_POST['dept'];
		$user_name=$_POST['u_id'];
		$user_pass=$_POST['u_pass'];//same
		if($name==''){
        //javascript use for input checking
			echo"<script>alert('Please enter the name')</script>";
			exit();//this use if first is not work then other will not show
		}
		if($roll==''){
        //javascript use for input checking
			echo"<script>alert('Please enter roll number')</script>";
			exit();//this use if first is not work then other will not show
		}
		if($year==''){
        //javascript use for input checking
			echo"<script>alert('Please select year')</script>";
			exit();//this use if first is not work then other will not show
		}
		if($dept==''){
        //javascript use for input checking
			echo"<script>alert('Please select dept')</script>";
			exit();//this use if first is not work then other will not show
		}
		if($user_name==''){
        //javascript use for input checking
			echo"<script>alert('Please enter the UserID')</script>";
			exit();//this use if first is not work then other will not show
		}
		if($user_pass==''){
        //javascript use for input checking
			echo"<script>alert('Please enter the password')</script>";
			exit();//this use if first is not work then other will not show
		}
		//here query check weather if user already registered so can't register again.
		$check_ID_query="select * from student_data where user_name='$user_name'";
		$run_query=mysqli_query($dbcon,$check_ID_query);
	    if(mysqli_num_rows($run_query)>0){
			echo "<script>alert('UserID $user_name is already existing in our database, please try another one!')</script>";
			exit();
		}
		//insert the user into the database.
		$insert_user="insert into student_data (name,roll,year,dept,user_name,user_pass) VALUE ('$name','$roll','$year','$dept','$user_name','$user_pass')";
		if(mysqli_query($dbcon,$insert_user)){
			echo"<script>window.open('welcome.php','_self')</script>";
		}
	}
?>