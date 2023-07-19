<?php

include 'config.php';

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$pass = mysqli_real_escape_string($link, md5($_POST['password']));
$cpass = mysqli_real_escape_string($link, md5($_POST['cpassword']));
//$image = $_FILES['image']['name'];
//$image_size = $_FILES['image']['size'];
//$image_tmp_name = $_FILES['image']['tmp_name'];
//$image_folder = 'uploaded_img/'.$image;

$select = mysqli_query($link, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

if(mysqli_num_rows($select) > 0){
	$message[] = 'user already exist';
}else{
	if($pass != $cpass){
		$message[] = 'confirm password not matched!';
	}//elseif($image_size > 2000000){
		//$message[] = 'image size is to large!';
	//}
	else{ 
		$insert = mysqli_query($link, "INSERT INTO `user_form`(name, email, password) VALUES('$name','$email','$pass')") or die('query failed');

		if($insert){
			move_uploaded_file($image_tmp_name, $image_folder);
			$message[] = 'registered successfully!';
			header('location:login0.php');
		}else{
			$message[] = 'registeration failed!';
		}
	}
}

}

	?>

<!DOCTYPE html>
<html lang="en">
<head>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
   
    <link rel="stylesheet" rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Poppins:400,600&amp;subset=latin,latin-ext&display=block" type="text/css" media="all" />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatilble" content="IE=edge">
	<meta name="viewport" content="Width=device-width, initial-scale=1.0">
	<title>register</title>

	<link rel="stylesheet" href="css/style.css">
</head>

<body>
                   
                               
                           
                        
                       

<div class="form-container"  style="position: absolute;">
<a href="#Home" style="width: 40%;margin-left: 400px;"><img class="logo img-responsive" src="images/logo.jpg" alt="Connex Store"></a>
	<form action="" method="post" enctype="multipart/form-data">
		<h3 style="width: 40%;margin-left: 400px;">register now</h3>
		<?php
		if(isset($message)){
			foreach($message as $message){
				echo '<div class="message">'.$message.'</div>';
			}
		}

	?>
		<input type="text" name="name" placeholder="enter username" class="box" style="width: 40%;margin-left: 400px;" required>
		<input type="text" name="email" placeholder="enter email" class="box" style="width: 40%;margin-left: 400px;" required>
		<input type="password" name="password" placeholder="enter password" class="box" style="width: 40%;margin-left: 400px;" required>
		<input type="password" name="cpassword" placeholder="confirm password" class="box" style="width: 40%;margin-left: 400px;" required>
		<!--<input type="file" name="image" accept="image/jpg, image/jpeg, image/png"> -->
		<input type="submit" value="register now" name="submit" class="btn" style="width: 40%;margin-left: 400px;">
		<p style="width: 40%;margin-left: 400px;">already have an account? <a href="login0.php">login now</a></p>
	</form>
</div>




    
</body>

</html>