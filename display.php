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

</head>
<body>
  <div class="container">
  <button class="btn btn-primary my-5"><a href="user.php" class="text-light">add user</a></button>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">s.no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">mobile</th>
      <th scope="col">operations</th>

    </tr>
  </thead>
  <tbody>
    <?php 
    $sql="select * from crud";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
   $id=$row['id'];
   $name=$row['name'];
   $email=$row['email'];
   $password=$row['password'];
   $mobile=$row['mobile'];
   echo'
   <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
      <td>'.$mobile.'</td>
      <td><button class="btn btn-primary "><a href="update.php?updateid='.$id.'" class="text-light">update</a></button>
      <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"class="text-light">Delete</a></button></td>
    </tr>
   
   
   ';

       }

    }
    
    
    
    
    ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
  </div>
  
</body>
</html>