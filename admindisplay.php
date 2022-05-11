<?php 
   
include 'connect.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>user data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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
  <div class="container-fluid"style="font-family: Source Sans Pro;">
  <button class="btn btn-primary my-5"><a href="adminIndex.php" class="text-light">Add Jobs</a></button>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">job_title</th>
      <th scope="col">Experience</th>
      <th scope="col">Skills</th>
      <th scope="col">Salary</th>
      <th scope="col">Location</th>
      <th scope="col">Summary</th>
      
      
      <th scope="col">Actions</th>
      <!-- <th scope="col">operations</th> -->

    </tr>
  </thead>
  <tbody>
    <?php 
    $sql="select * from admin";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
   $id=$row['id'];
   $job_title=$row['job_title'];
   $experience=$row['experience'];
   $skills=$row['skills'];
    
   $salary=$row['salary'];
   $location=$row['location'];
   $summary=$row['summary'];
  
  //  print( $image);
  //  die();
  //  echo "<img src='images/".$row['imagename']."' >";   

   echo'
   <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$job_title.'</td>
      <td>'.$experience.'</td>
      <td>'.$skills.'</td>
      
      <td>'.$salary.'</td>
      <td>'.$location.'</td>
      <td>'.$summary.'</td>
     
      <td><button class="btn btn-primary "><a href="adminupdate.php?updateid='.$id.'" class="text-light">update</a></button>
      <button class="btn btn-danger"><a href="admindelete.php? deleteid='.$id.'"class="text-light">Delete</a></button></td>
      
    </tr>
   
   
   ';

       }

    }
    
    
    
    
    ?>
    
  </tbody>
</table>
  </div>
  
</body>
</html>