<?php
error_reporting(0);
session_start();

require_once('config.php');
// username and password sent from form
if(isset($_POST['authority'])){
$myusername=$_POST['unique_id'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);


$myusername = mysqli_real_escape_string($conn ,$myusername);
$mypassword = mysqli_real_escape_string($conn ,$mypassword);


$sql="SELECT * FROM appliances_authority WHERE Unique_Id='$myusername' and Password='$mypassword'";
$result=mysqli_query($conn , $sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count>=1){
	$r=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$_SESSION['username']=$r['Unique_Id'];
	$_SESSION['name']=$r['First_Name']." ".$r['Last_Name'];
	$_SESSION['auth_type']=$r['Authority_Type'];
	header('Location: ./appliances.php');
}else {
header('Location: ./appliances_login_fail.php');
}
}
else if (isset($_POST['fac_reg'])) {
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uid=$_POST['uid'];
$pass=$_POST['pass'];

// To protect MySQL injection (more detail about MySQL injection)
$fname = stripslashes($fname);
$lname = stripslashes($lname);


$fname = mysqli_real_escape_string($conn ,$fname);
$lname = mysqli_real_escape_string($conn ,$lname);

$sql="INSERT INTO faculty VALUES ('','$fname','$lname','','$uid','$pass','','','')";
$result=mysqli_query($conn , $sql);
// Mysql_num_row is counting table row
	# code...
header('Location: ./attendance_home.php');
}
else if (isset($_POST['student_login'])) {
$myusername=$_POST['unique_id'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);


$myusername = mysqli_real_escape_string($conn ,$myusername);
$mypassword = mysqli_real_escape_string($conn ,$mypassword);


$sql="SELECT * FROM seventh_sem_cse WHERE Unique_Id='$myusername'";
$result=mysqli_query($conn , $sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count>=1){
	$r=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$_SESSION['username']=$r['Unique_Id'];
	$_SESSION['name']=$r['Name'];
	$_SESSION['roll_no']=$r['Roll_No'];
	header('Location: student_details.php');
}	# code...
else {
header('Location: ./attendance_home_login_fail.php');
}
}
else if (isset($_POST['fac_login'])) {
$myusername=$_POST['unique_id'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);


$myusername = mysqli_real_escape_string($conn ,$myusername);
$mypassword = mysqli_real_escape_string($conn ,$mypassword);


$sql="SELECT * FROM faculty WHERE Unique_Id='$myusername' and Password='$mypassword'";
$result=mysqli_query($conn , $sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count>=1){
	$r=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$_SESSION['username']=$r['Unique_Id'];
	$_SESSION['name']=$r['First_Name']." ".$r['Last_Name'];
	$_SESSION['class_incharge']=$r['Class_Incharge'];
	header('Location: faculty_attendance.php');
}	# code...
else {
header('Location: ./attendance_home_login_fail.php');
}
}
else {
echo '<form action="attendance_home_login_fail.php" method="post" >';
echo "<div align='center'><font size='5' color='white'> Wrong Username or Password</div>";
echo "<div align='center' ><input type='submit' name='back' value='Back'></div>";
echo '</form>';
}
mysqli_close($conn);

?>