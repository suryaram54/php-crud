<?php 
include "connect.php";
$id=$_GET['updateid'];
$sql="select * from `admin` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$job_title=$row['job_title'];
$experience=$row['experience'];
$skills=$row['skills'];
$salary=$row['salary'];
$location=$row['location'];
$summary=$row['summary'];
if(isset($_POST['submit']))
{
 $job_title=$_POST['job_title'];
 $experience=$_POST['experience'];
 $skills=$_POST['skills'];
 $salary=$_POST['salary'];
 $location=$_POST['location'];
 $summary=$_POST['summary'];
 

 $sql="update `admin` set id=$id,job_title='$job_title',experience='$experience',skills='$skills',salary='$salary',location='$location',summary='$summary' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo"data inserted successfully";
    header('location:admindisplay.php');
  }else{
    die(mysqli_error($con));
  }
}

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <title>crud operations!</title>
  <style>
/* 
body {
    text-align: center;
} */
/* form {
    display: inline-block;
} */
form {
    margin-left: 25%;
    margin-right:25%;
    width: 50%;
}
  </style>
</head>

<body>
<div class="container my-5 " autocomplete="off">
  <h3 style="text-align:center">JOB POST FORM FOR ADMIN</h3>
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <!-- <label>Name</label> -->
        <input type="text" class="form-control" placeholder="job_title" name="job_title" value="<?php  echo $job_title;?>">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Experience" name="experience" value="<?php  echo $experience;?>">
      </div>

      <div class="form-group">
        <!-- <label>Email</label> -->
        <input type="text" class="form-control" placeholder="Skills" name="skills" value="<?php  echo $skills;?>">
      </div>
      <div class="form-group">
        <!-- <label>skill </label> -->
        <input type="text" class="form-control" placeholder="Salary" name="salary" value="<?php  echo $salary;?>">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Location" name="location" value="<?php  echo $location;?>">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Summary" name="summary" value="<?php  echo $summary;?>">
      </div>
      
      <button type="submit" style="text-align:center  !important"name='submit'class="btn btn-primary" >Update</button>
    </form>
  </div>


</body>

</html>