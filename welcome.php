<?php
	session_start();
	if(!$_SESSION['email']){
		header("Location: login.php");//redirect to login page to secure the welcome page without login access.
	}
?>
<html>
	<head>
		<title>
			Registration
		</title>
	</head>
	<body>
		<p align="justify"><h1>Welcome</h1></br>You have successfully Registered yourself. Logout now and Enjoy your Life!</br>
			<?php
				echo $_SESSION['email'];
			?>
			<h1><a href="logout.php">Logout here</a></h1>
		</p>
	</body>
</html>

