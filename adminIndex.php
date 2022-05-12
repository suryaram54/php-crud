
<?php 
include "connect.php";
if(isset($_POST['submit']))
{
 $job_title=$_POST['job_title'];
 $experience=$_POST['experience'];
//  $password=$_POST['password'];
 $skills=$_POST['skills'];
 $salary=$_POST['salary'];
 $location=$_POST['location'];
 $summary=$_POST['summary'];
 





 $sql="insert into `admin`(job_title,experience,skills,salary,location,summary)values('$job_title','$experience','$skills','$salary','$location','$summary')";
  $result=mysqli_query($con,$sql);
  // print($result);
  // die();
  if($result){
    // echo"data inserted successfully";
    // die();
    header('location:admindisplay.php');
  }else{
    die(mysqli_error($con));
  }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <title>Admin</title>
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
  
<div class="container my-5 " autocomplete="off"style="font-family: Source Sans Pro;">
  <h3 style="text-align:center">JOB POST FORM FOR ADMIN</h3>
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <!-- <label>Name</label> -->
        <input type="text" class="form-control" placeholder="job_title" name="job_title" >
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Experience" name="experience">
      </div>

      <div class="form-group">
        <!-- <label>Email</label> -->
        <input type="text" class="form-control" placeholder="Skills" name="skills" >
      </div>
      <div class="form-group">
        <!-- <label>skill </label> -->
        <input type="text" class="form-control" placeholder="Salary" name="salary">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Location" name="location">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <textarea rows = "4" cols = "67" name = "summary">
          
         </textarea>
      </div>
      
      <button type="submit" style="text-align:center  !important"name='submit'class="btn btn-primary" >Submit</button>
    </form>
  </div>



</body>
</html>