<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){ 
	$update_name = mysqli_real_escape_string($link, $_POST['update_name']);
	$update_email = mysqli_real_escape_string($link, $_POST['update_email']);

	mysqli_query($link, "UPDATE `user_form` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

	$old_pass = $_POST['old_pass'];
	
	$update_pass = mysqli_real_escape_string($link, md5($_POST['update_pass']));
	$new_pass = mysqli_real_escape_string($link, md5($_POST['update_pass']));
	$confirm_pass = mysqli_real_escape_string($link, md5($_POST['update_pass']));

	if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)) {
		if($update_pass != $old_pass){
			$message[] = 'old password not matched!';
		}elseif($new_pass != $confirm_pass){
			$message[] ='confirm passwordnot matched!';
			// code...
		}else{
			mysqli_query($link, "UPDATE `user_form` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
			$message[] = 'password update successfully!';
		}
		// code...
	}

	//$update_image = $_FILES['image']['name'];
	//$update_image_size = $_FILES['image']['size'];
	//$update_image_tmp_name = $_FILES['image']['tmp_name'];
	//$update_image_folder = 'uploaded_img/'.$image;

	if(!empty($update_image)){
		if($update_image_size > 2000000){
			$message[] = 'image is to large';
		}else{
			$image_update_query = mysqli_query($link, "UPDATE `user_form` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
			if($image_update_query){
				move_uploaded_file($update_image_tmp_name, $update_image_folder);
			}
		}
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatilble" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>update profile</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<div class="update-profile">
	<img src="images/logo.jpg" alt="" style="height: 60px;">
		<?php
		$select = mysqli_query($link, "SELECT * FROM `user_form` WHERE id = '$user_id'")or die('query failed');
			if(mysqli_num_rows($select) > 0){
				$fetch = mysqli_fetch_assoc($select);
			}
			?>
			<form action="" method="post" enctype="multipart/form-data">
				<?php
                 //if($fetch['image'] == ''){
					//echo '<img src="images/default-avatar.png">';
				//}else{
				//	echo '<img src="uploaded_img/'.$fetch['image'].'">';
				//}
				//if(isset($message)){
				//	foreach($message as $message){
				//		echo '<div class="message">'.$message. '</div>';
				//	}
				//}


				?>
				<div class="flex">
					<div class="inputBox"  style=" box-sizing: border-box; width: 1300px; ">
						<span>username :</span>
						<input type="text" name="update_name" value="<?php echo $fetch['name'] ?>" class="box">
						<span>your email :</span>
						<input type="text" name="update_email" value="<?php echo $fetch['email'] ?>" class="box">
						<!--<span>update your pic :</span>
						<input type="file" name="update_image"
						accept="image/jpg, image/jpeg, image/png" class="box">-->
				</div>
				<div class="inputBox"  style=" box-sizing: border-box; width: 1300px; ">
					<input type="hidden" name="old_pass" value="<?php echo $fetch['password'] ?>">
					<span>old password :</span>
					<input type="password" name="update_pass" placeholder="enter previous password" class="box">
					<span>new password :</span>
					<input type="password" name="update_pass" placeholder="enter new password" class="box">
					<span>confirm password :</span>
					<input type="password" name="update_pass" placeholder="confirm password" class="box">
				</div>

			</div>
			<input type="submit" value="update profile" name="update_profile" class="btn">
			

		</form>

	</div>

</body>