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
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">skil</th>
      <th scope="col"> current location</th>
      <th scope="col">Total EXP</th>
      <th scope="col">Relevant EXP</th>
      <th scope="col">Current CTC</th>
      <th scope="col">Expected CTC</th>
      <th scope="col">NOtice Period</th>
      <th scope="col">REsume</th>
      <th scope="col">Offer</th>
      <!-- <th scope="col">operations</th> -->

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
   $mobile=$row['mobile'];
    
   $skill=$row['skill'];
   $location=$row['location'];
   $Texp=$row['Texp'];
   $Rexp=$row['Rexp'];

   $CTC=$row['CTC'];
   $ECTC=$row['ECTC'];
   $NP=$row['NP'];
   $offer=$row['offer'];
   $file=$row['file'];
  //  print( $image);
  //  die();
  //  echo "<img src='images/".$row['imagename']."' >";   

   echo'
   <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      
      <td>'.$skill.'</td>
      <td>'.$location.'</td>
      <td>'.$Texp.'</td>
      <td>'.$Rexp.'</td>
      <td>'.$CTC.'</td>
      <td>'.$ECTC.'</td>
      <td>'.$NP.'</td>
      <td>'.$file.'</td>
      <td>'.$offer.'</td>

      
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