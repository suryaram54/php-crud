<?php 
include "connect.php";
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $mobile=$_POST['mobile'];

 $sql="insert into `crud`(name,email,password,mobile)values('$name','$email','$password','$mobile')";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo"data inserted successfully";
    header('location:display.php');
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
</head>

<body>
  <div class="container my-5 " autocomplete="off">

    <form method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="enter your name" name="name" >
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="enter your email" name="email" >
      </div>
      <div class="form-group">
        <label>password</label>
        <input type="password" class="form-control" placeholder="enter your password" name="password" >
      </div>
      <div class="form-group">
        <label>mobile number</label>
        <input type="text" class="form-control" placeholder="enter your number" name="mobile">
      </div>
      

      <button type="submit" name='submit'class="btn btn-primary">Submit</button>
    </form>
  </div>


</body>

</html>