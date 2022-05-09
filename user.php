<?php 
include "connect.php";
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $email=$_POST['email'];
//  $password=$_POST['password'];
 $mobile=$_POST['mobile'];
 $skill=$_POST['skill'];
 $location=$_POST['location'];
 $Texp=$_POST['Texp'];
 $Rexp=$_POST['Rexp'];
 $CTC=$_POST['CTC'];
 $ECTC=$_POST['ECTC'];
 $NP=$_POST['NP'];
 $offer=$_POST['offer'];



///file
$pname=rand(1000,10000)."_".$_FILES["file"]["name"];
$tname=$_FILES["file"]["tmp_name"];
$upload_dir='./images';
move_uploaded_file($tname,$upload_dir.'/'.$pname);


///file

 $sql="insert into `crud`(name,email,mobile,skill,location,Texp,Rexp,CTC,ECTC,NP,offer,file)values('$name','$email','$mobile','$skill','$location','$Texp','$Rexp','$CTC','$ECTC','$NP','$offer','$pname')";
  $result=mysqli_query($con,$sql);
  // print($result);
  // die();
  if($result){
    // echo"data inserted successfully";
    // die();
    header('location:ss.php');
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
  <h3 style="text-align:center">JOB APPLY FORM FOR CANDIDATE</h3>
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <!-- <label>Name</label> -->
        <input type="text" class="form-control" placeholder="Name" name="name" >
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Mobole" name="mobile">
      </div>

      <div class="form-group">
        <!-- <label>Email</label> -->
        <input type="email" class="form-control" placeholder="Email ID" name="email" >
      </div>
      <div class="form-group">
        <!-- <label>skill </label> -->
        <input type="text" class="form-control" placeholder="skill Set Expertise" name="skill">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Current Location" name="location">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Total Exp" name="Texp">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Relevant Exp" name="Rexp">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Current CTC" name="CTC">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Expected CTC" name="ECTC">
      </div>
      <div class="form-group">
        <!-- <label>mobile number</label> -->
        <input type="text" class="form-control" placeholder="Notice Period" name="NP">
      </div>
    
      <div class="form-group">
        <!-- <label>file</label> -->
        <input type="file" name="file" >
      </div>
      <div class="form-group">
        <!-- <label>file</label> -->
        
        Offer Holding if Any: <input type="radio" name="offer" value="yes" >YES
        <input type="radio" name="offer"  value="no">NO

      </div>
      <button type="submit" name='submit'class="btn btn-primary">Submit</button>
    </form>
  </div>


</body>

</html>