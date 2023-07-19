<?php
include_once('functions-page.php');

?>


<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
// Include config file
require_once "config.php";
// Prepare a delete statement
$sql = "DELETE FROM products WHERE id = ?";
if($stmt = mysqli_prepare($link, $sql)){
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "i", $param_id);
// Set parameters
$param_id = trim($_POST["id"]);
// Attempt to execute the prepared statement
if(mysqli_stmt_execute($stmt)){
// Records deleted successfully. Redirect to landing page
header("location: inde.php");

exit();
} else{
echo "Oops! Something went wrong. Please try again later.";
}
}
// Close statement
mysqli_stmt_close($stmt);
// Close connection
mysqli_close($link);

} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
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
           
       

            <div class="wrapper0">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<h2 class="mt-5 mb-3">Delete Record</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="alert alert-danger">
<input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
<p>Are you sure you want to delete this product record?</p>
<p><input type="submit" value="Yes" class="btn btn-danger">
<a href="inde.php" class="btn btn-secondary">No</a>
</p>
</div>
</form>
</div>
</div>
</div>

            
               
            </div>
        </div>
    </div>
<body>
</body>
</html>