<?php 
include "connect.php";
$id=$_GET['updateId'];

$sql="select * from `admin` where job_title='$id'";
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



print_r($salary);
die();
?>