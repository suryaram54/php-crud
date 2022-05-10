<?php 
   
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
<?php 
    $sql="select * from admin";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];

   $job_title=$row['job_title'];
 
   
   echo'
   <ul><li><a href="description.php?updateId='.$id.'">'.$job_title.'</a></p></li></ul>
   ';
       }
      }
     
?>

</body>
</html>