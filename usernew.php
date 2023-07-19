<?php
include_once('functions-page.php');

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
<div class="mt-5 mb-3 clearfix">
<h2 class="pull-left">Users/Admin</h2>

</div>
<?php
// Include config file
require_once "config.php";

// Attempt select query execution
$sql = "SELECT * FROM user_form";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
echo'<table class="table table-bordered table-striped">';
echo"<thead>";
echo"<tr>";

echo"<th>Email</th>";
echo"<th>Name</th>";
echo"<th>password</th>";
echo"<th>Action</th>";
echo"</tr>";
echo"</thead>";
echo"<tbody>";
while($row = mysqli_fetch_array($result)){
  $email = $row['email'];
echo "<tr>";


echo "<td>" . $row['email'] ."</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['password'] ."</td>";


echo "<td>";
echo '<a href="read2new.php?id='.$row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
echo '<a href="delete2new.php?id='.$row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
echo "</td>";
echo "</tr>";
}
echo "</tbody>";
echo "</table>";
// Free result set
mysqli_free_result($result);
} else{
echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
}
} else{
    echo "Oops! Something went wrong. Please try again later.";
    
    }
    // Close connection
    mysqli_close($link);
    ?>
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