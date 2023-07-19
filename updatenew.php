<?php
include_once('functions-page.php');

?>


<?php
// Include config file
require_once "config.php";
// Define variables and initialize with empty values
$id = $name = $description = $stock = $status = $price = "";
$id_err = $name_err = $description_err = $stock_err = $status_err = $price_err  = "";
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
// Get hidden input value
$id = $_POST["id"];
// Validate id
$input_id = trim($_POST["id"]);
if(empty($input_id)){
$id_err = "Please enter an id.";
} else{
$id = $input_id;
}
// Validate image
//if(isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {

    //$img_name = $_FILES['pp']['name'];
    //$tmp_name = $_FILES['pp']['tmp_name'];
  //  $error = $_FILES['pp']['error'];

    //If($error === 0){
      //  $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        //$img_ex_to_lc = strtolower($img_ex);

        //$allowed_exs = array('jpg', 'jpeg', 'png');
        //if(in_array($img_ex_to_lc, $allowed_exs)){

          //  $new_img_name = uniqid($name, true).'.'.$img_ex_to_lc;
            //$img_upload_path = '../images/'.$new_img_name;
            //move_uploaded_file($tmp_name, $img_upload_path); 
        //}
    //}
//}
// Validate name
$input_name = trim($_POST["name"]);
if(empty($input_name)){
    $name_err = "Please enter a name.";
} elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP,
array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
$name_err = "Please enter a valid name.";
} else{
$name = $input_name;
}
// Validate address address
$input_description = trim($_POST["description"]);
if(empty($input_description)){
$description_err = "Please enter an description.";
} else{
$description = $input_description;
}
// Validate address address
$input_stock = trim($_POST["stock"]);
if(empty($input_stock)){
$stock_err = "Please enter an stock.";
} else{
$stock = $input_stock;
}
// Validate address address
$input_status = trim($_POST["status"]);
if(empty($input_status)){
$status_err = "Please enter an status.";
} else{
$status = $input_status;
}
// Validate salary
$input_price = trim($_POST["price"]);
if(empty($input_price)){
$price_err = "Please enter the price amount.";
} elseif(!ctype_digit($input_price)){
$price_err = "Please enter a positive integer value.";
} else{
$price = $input_price;
}


// Check input errors before inserting in database
if(empty($id_err) &&  empty($image_err) && empty($name_err) && empty($description_err) && empty($stock_err) && empty($status_err) && empty($price_err)){
// Prepare an update statement
$sql = "UPDATE products SET name=?, description=?, stock=?, status=?, price=? WHERE id=?";

if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sssssi", $param_name,
    
    $param_description, $param_stock, $param_status, $param_price, $param_id);
    
    // Set parameters
    //$param_image = $image;
    $param_name = $name;
    $param_description = $description;
    $param_stock = $stock;
    $param_status = $status;
    $param_price = $price;
    $param_id = $id;
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
    // Records updated successfully. Redirect to landing page
    header("location: inde.php");
    exit();
    } else{
    echo "Oops! Something went wrong. Please try again later.";
    }
    }
    // Close statement
    mysqli_stmt_close($stmt);
    }

    // Close connection
mysqli_close($link);
} else{
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
// Get URL parameter
$id = trim($_GET["id"]);
// Prepare a select statement
$sql = "SELECT * FROM products WHERE id = ?";
if($stmt = mysqli_prepare($link, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "i", $param_id);
// Set parameters
$param_id = $id;
// Attempt to execute the prepared statement
if(mysqli_stmt_execute($stmt)){
$result = mysqli_stmt_get_result($stmt);



if(mysqli_num_rows($result) == 1){
/* Fetch result row as an associative array. Since the result set
contains only one row, we don't need to use while loop*/

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// Retrieve individual field value
$id = $row["id"];
//$image = $row["image"];
$name = $row["name"];
$description = $row["description"];
$stock = $row["stock"];
$status = $row["status"];
$price = $row["price"];
} else{
    // URL doesn't contain valid id. Redirect to error page
header("location: error.php");
exit();
}
} else{
echo "Oops! Something went wrong. Please try again later.";
}
}
// Close statement
mysqli_stmt_close($stmt);
// Close connection
mysqli_close($link);
} else{
// URL doesn't contain id parameter. Redirect to error page
header("location: error.php");
exit();
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Panel</title>
<meta charset="utf-8">
<met http-equiv="X-UA-compatible" content="IEwedge">
<meta name="viewport" content="width=device-width, initial-scale=1.o">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
 <div class="side-menu">
    <div class="brand-name">
        <h1>Admin</h1>
    </div>
    <ul>
    <a href="dashboard.php"><li><img src="images/dashboard (2).png" alt="" >&nbsp; <span>Dashboard</span></li></a>
        <a href="inde.php"><li><img src="images/reading-book (1).png" alt="" >&nbsp; <span>Product Record</span></li></a>
        <a href="usernew.php"><li><img src="images/teacher2.png" alt="">&nbsp; <span>Users</span></li></a>
        <a href="load-page2.php"><li><img src="images/school.png" alt="">&nbsp; <span>Home Page</span></li></a>
        <a href="customersnew.php"><li><img src="images/payment.png" alt="">&nbsp; <span>Customers</span></li></a>
       
    </ul>
 </div>
 <div class="container">
    <div class="header">
        <div class="nav">
            <div class="search">
                <img src="images/logo.jpg" alt="" style="height: 60px;">
                
            </div>
            <div class="user">
            <a  href="index.php" button type="button" class="btn btn-primary">Logout</button></a>
            <a  href="adminReg.php" button type="button" class="btn btn-primary" >Register</button></a>    
                <div class="img-case">
                   
                    <a  href="update_profile.php" button type="button" class="btn btn-primary"><i class="fa fa-user-circle-o" style="font-size:18x"></i>Profile</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="cards">
            <div class="card" href="inde.php">
                <div class="box">
                
                       <h3>Product Record</h3>
                       <a  href="inde.php" button type="button" class="btn btn-primary">View</button></a>
              </div> 
              <div class="icon-case">
                <img src="images/students.png" alt="" style="height: 40px;">
                
              </div>
            </div>
            <div class="card">
                <div class="box">
                       
                       <h3>Users</h3>
                       <a  href="usernew.php" button type="button" class="btn btn-primary">View</button></a>
              </div> 
              <div class="icon-case">
                <img src="images/teachers.png" alt="">
              </div>
            </div>
            <div class="card">
                <div class="box">
                       
                       <h3>Customers</h3>
                       <a  href="customersnew.php" button type="button" class="btn btn-primary">View</button></a>
              </div> 
              <div class="icon-case">
                <img src="images/income.png" alt="">
              </div>
              </div>
              <div class="card">
                <div class="box">
                       
                       <h3>Home Page</h3>
                       <a  href="load-page2.php" button type="button" class="btn btn-primary">View</button></a>
              </div> 
              <div class="icon-case">
                <img src="images/schools.png" alt="">
              </div>
            </div>
            </div>
            </div>
           
       

            <div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<h2 class="mt-5" style="width: 40%;margin-left: 350px;">Update Record</h2>
<p style="width: 40%;margin-left: 350px;">Please edit the input values and submit to update the product record.</p>

<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
<div class="form-group">
<label style="width: 40%;margin-left: 350px;">id</label>
<input type="text" name="id" style="width: 40%;margin-left: 350px;" class="form-control <?php echo (!empty($id_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $id; ?>">
<span class="invalid-feedback" style="width: 40%;margin-left: 350px;"><?php echo $id_err;?></span>
</div>
<!--<div class="form-group">
<label>Image</label>
<input type="file" name="image" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>"
value="//">
</div>-->
<div class="form-group">
<label style="width: 40%;margin-left: 350px;">Name</label>
<input type="text" name="name" style="width: 40%;margin-left: 350px;" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>"
value="<?php echo $name; ?>">

<span class="invalid-feedback" style="width: 40%;margin-left: 350px;"><?php echo $name_err;?></span></div>

<div class="form-group">
<label style="width: 40%;margin-left: 350px;">Description</label>
<textarea name="description" style="width: 40%;margin-left: 350px;" class="form-control
<?php echo (!empty($description_err)) ? 'is-invalid' : ''; ?>"><?php echo $description; ?></textarea>
<span class="invalid-feedback" style="width: 40%;margin-left: 350px;"><?php echo $description_err;?></span>

</div>
<div class="form-group">
<label style="width: 40%;margin-left: 350px;">stock</label>
<input type="text" name="stock" style="width: 40%;margin-left: 350px;" class="form-control <?php echo (!empty($stock_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $stock; ?>">
<span class="invalid-feedback" style="width: 40%;margin-left: 350px;"><?php echo $stock_err;?></span>
</div>
<div class="form-group">
<label style="width: 40%;margin-left: 350px;">status</label>
<input type="text" name="status" style="width: 40%;margin-left: 350px;" class="form-control <?php echo (!empty($status_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $status; ?>">
<span class="invalid-feedback" style="width: 40%;margin-left: 350px;"><?php echo

$status_err;?></span>
</div>
<div class="form-group">
<label style="width: 40%;margin-left: 350px;">price</label>
<input type="text" name="price" style="width: 40%;margin-left: 350px;" class="form-control <?php echo (!empty($price_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $price; ?>">
<span class="invalid-feedback" style="width: 40%;margin-left: 350px;"><?php echo $price_err;?></span>
</div>
<input type="hidden" name="id" style="width: 40%;margin-left: 350px;" value="<?php echo $id; ?>"/>
<input type="submit" class="btn btn-primary" style="width: 40%;margin-left: 350px;" value="Submit">
<a href="inde.php" class="btn btn-secondary ml-2">Cancel</a>
</form>
</div>
</div>
</div>
</div>


            
               
            </div>
        </div>
    </div>
<body>
</body>
</html>