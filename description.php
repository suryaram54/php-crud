
<?php 
include "connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid" style="background-color:#293649;color:aliceblue">
<?php
$id=$_GET['updateId'];

$sql="select * from `admin` where id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$job_title=$row['job_title'];
$location=$row['location'];
$experience=$row['experience'];

 echo'<h2 style="text-align:center;font-family: Source Sans Pro;">'.$job_title.'</h2>';
 echo'<h2 style="text-align:center;font-family: Source Sans Pro;
 ">'.$location.'|'.$experience.' years of experience</h2>';




?>
</div>
<div class="container"style="font-family: Source Sans Pro;font-size:18px;">
<h1 style="color: #0bbff2 !important;font-size:28px;
">Job Description</h1>
<?php 
$id=$_GET['updateId'];

$sql="select * from `admin` where id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$job_title=$row['job_title'];
$experience=$row['experience'];
$skills=$row['skills'];
$salary=$row['salary'];
$location=$row['location'];
$summary=$row['summary'];


echo'<p>'.$job_title.'</p>';
echo'<p>'.$experience.'</p>';
echo'<p>'.$skills.'</p>';
echo'<p>'.$salary.'</p>';
echo'<p>'.$location.'</p>';
echo'<p>'.$summary.'</p>';




   
    
   



// <?php 
// $id=$_GET['updateId'];

// $sql="select * from `admin` where job_title='$id'";
// $result=mysqli_query($con,$sql);
// $row=mysqli_fetch_assoc($result);
// $job_title=$row['job_title'];
// $experience=$row['experience'];
// $skills=$row['skills'];
// $salary=$row['salary'];
// $location=$row['location'];
// $summary=$row['summary'];


// echo'<p>'.$job_title.'</p>';
// echo'<p>'.$experience.'</p>';
// echo'<p>'.$skills.'</p>';
// echo'<p>'.$salary.'</p>';
// echo'<p>'.$location.'</p>';
// echo'<p>'.$summary.'</p>';




// ?>

<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Apply</a></button>

</div>

  

</body>
</html>
