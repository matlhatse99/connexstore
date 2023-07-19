<?php
include_once('functions-page.php');

?>

<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $id =  $description =  $stock = $price =  $status = $image = "";
$name_err = $id_err = $description_err =  $stock_err = $price_err =  $status_err = $image =  "";

// Processing form data when form is submitted 
if($_SERVER["REQUEST_METHOD"]  == "POST"){
    // Validate name
$input_name = trim($_POST["name"]);
if(empty($input_name)){
$name_err = "Please enter a name.";
} elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP,
array("options"=>array("regexp"=>" /^[a-zA-Z\s]+$/")))){
$name_err = "Please enter a valid name.";
} else{
    $name = $input_name;
}

// Validate description
$input_description = trim($_POST["description"]);
if(empty($input_description)){
$description_err = "Please enter an description.";
} else{
$description = $input_description;
}

// Validate stock
$input_stock = trim($_POST["stock"]);
if(empty($input_stock)){
$stock_err = "Please enter the stock amount.";
} elseif(!ctype_digit($input_stock)){
$stock_err = "Please enter a positive integer value.";
} else{
$stock = $input_stock;
}

// Validate price
$input_price = trim($_POST["price"]);
if(empty($input_price)){
$price_err = "Please enter the price amount.";
} elseif(!ctype_digit($input_price)){
$price_err = "Please enter a positive integer value.";
} else{
$price = $input_price;
}

// Validate id
$input_id = trim($_POST["id"]);
if(empty($input_id)){
$id_err = "Please enter the id amount.";
} elseif(!ctype_digit($input_id)){
$id_err = "Please enter a positive integer value.";
} else{
$id = $input_id;
}


// image
if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
         
    $img_name = $_FILES['pp']['name'];
    $tmp_name = $_FILES['pp']['tmp_name'];
    $error = $_FILES['pp']['error'];
    
    if($error === 0){
       $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
       $img_ex_to_lc = strtolower($img_ex);

       $allowed_exs = array('jpg', 'jpeg', 'png');
       if(in_array($img_ex_to_lc, $allowed_exs)){
          $new_img_name = uniqid($name, true).'.'.$img_ex_to_lc;
          $img_upload_path = '../images/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);

           // Insert into Database
        //    $sql = "INSERT INTO products (image) VALUES('$img_name')";
        //    $stmt = mysqli_query($link,$sql);
        //    if ($stmt){
            // echo "congtas";
        //    }

        // Check input errors before inserting in database
    }
 }
}
if(empty($name_err) && empty($description_err) && empty($stock_err) && empty($id_err)  && empty($image_err) && empty($price_err)&& empty($status_err)){
   
    // Prepare an insert statement
     $sql = "INSERT INTO products (id, price, description, stock, name, status, image) VALUES (?, ?, ?, ?, ?, ?,?)";
    // $sql = "INSERT INTO `products`(`id`, `name`, `description`, `price`) VALUES ('$id','$name','$description',$price)";
    
    
    if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt,  "sssssss", $param_id,  $param_price, $param_description, $param_stock,  $param_name, $param_status, $param_img_name);
    
    // Set parameters
    $param_id = $id;
    $param_price = $price;
    $param_description = $description;
    $param_stock = $stock;
    $param_name = $name;
    $param_status = "Old";
    $param_img_name = $img_name;
    
    // Attempt to execute the prepared statement 
    if(mysqli_stmt_execute($stmt)){
    // Records created successfully. Redirect to landing page 
   
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
<h2 class="mt-5">Create Record</h2>
<p>Please fill this form and submit to add product record to the database.</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"  enctype="multipart/form-data">  
<div class="form-group">
    <label>id</label>
    <input type="text" name="id" class="form-control <?php echo (!empty($id_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $id; ?>">
    <span class="invalid-feedback"><?php  echo $id_err;?></span>
</div>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
    <span class="invalid-feedback"><?php  echo $name_err;?></span>
</div>
<div class="form-group">
    <label>Description</label>
    <input type="text" name="description" class="form-control <?php echo (!empty($description_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $description; ?>">
    <span class="invalid-feedback"><?php  echo $description_err;?></span>
</div>
<div class="form-group">
    <label>stock</label>
    <input type="text" name="stock" class="form-control <?php echo (!empty($stock_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $stock; ?>">
    <span class="invalid-feedback"><?php echo $stock_err;?></span>
</div>
 <div class="form-group">
    <label>status</label>
    <input type="text" name="status" class="form-control <?php echo (!empty($status_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $status; ?>">
    <span class="invalid-feedback"><?php  echo $description_err;?></span>
</div>
<div class="form-group">
    <label>Price</label>
    <input type="text" name="price" class="form-control <?php echo (!empty($price_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $price; ?>">
    <span class="invalid-feedback"><?php echo $price_err;?></span>
</div>
<div class="mb-3">
		    <label class="form-label"></label>
		    <input type="file" 
		           class="form-control"
		           name="pp">
		  </div>
            <br>
<input type="submit" class="btn btn-primary" value="submit">
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