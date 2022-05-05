<?php 
include "connect.php";
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
$mobile=$row['mobile'];
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $mobile=$_POST['mobile'];

 $sql="update `crud` set id=$id,name='$name',email='$email',password='$password',mobile='$mobile' where id=$id";
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
  <div class="container my-5">

    <form method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="off" value="<?php  echo $name;?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="enter your email" name="email" autocomplete="off" value="<?php  echo $email;?>">
      </div>
      <div class="form-group">
        <label>password</label>
        <input type="password" class="form-control" placeholder="enter your password" name="password" autocomplete="off" value="<?php  echo $password;?>">
      </div>
      <div class="form-group">
        <label>mobile number</label>
        <input type="text" class="form-control" placeholder="enter your number" name="mobile"autocomplete="off" value="<?php  echo $mobile;?>">
      </div>
      

      <button type="submit" name='submit'class="btn btn-primary">update</button>
    </form>
  </div>


</body>

</html>