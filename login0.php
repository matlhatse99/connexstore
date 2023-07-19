<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

$email = mysqli_real_escape_string($link, $_POST['email']);
$pass = mysqli_real_escape_string($link, md5($_POST['password']));

$select = mysqli_query($link, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

if(mysqli_num_rows($select) > 0){
	$row = mysqli_fetch_assoc($select);

	$name = $row['name'];
	if ($name === "Admin" || $name === "admin"){

		$_SESSION['Admin_name'] = $row['name'];
		header('location: dashboard.php');
	}
	else{
		$_SESSION['user_id'] = $row['id'];
		header('location:logout.php');
	}
}else{
	$message[] = 'incorrect email or password!';
}

}

	?>

<!DOCTYPE html>
<html lang="en">
<head>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="font" rel="preload" as="font" type="font/woff2" crossorigin href="https://connexstore.co.za/themes/AngarTheme/assets/css/fonts/material_icons.woff2" />
    <link rel="font" rel="preload" as="font" type="font/woff2" crossorigin href="https://connexstore.co.za/themes/AngarTheme/assets/css/fonts/fontawesome-webfont.woff2?v=4.7.0" />
   

    <link rel="stylesheet" href="css/style.css" type="text/css">
 

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatilble" content="IE=edge">
	<meta name="viewport" content="Width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>login</title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data">
    <a href="#Home" style="width: 40%;margin-left: 400px;"><img class="logo img-responsive" src="images/logo.jpg" alt="Connex Store"></a>
		<h3 style="width: 40%;margin-left: 400px;">login now</h3>
		<?php
		if(isset($message)){
			foreach($message as $message){
				echo '<div class="message">'.$message.'</div>';
			}
		}

	?>
		<input type="text" name="email" placeholder="enter email" class="box" style="width: 40%;margin-left: 400px;" required>
		<input type="password" name="password" placeholder="enter password" class="box" style="width: 40%;margin-left: 400px;" required>
		<input type="submit" value="login now" name="submit" class="btn" style="width: 40%;margin-left: 400px;">
		<p style="width: 40%;margin-left: 400px;">don't have an account? <a href="register0.php">register now</a></p>
	</form>
</div>

</body>

</html>
