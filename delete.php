<?php
include 'connect.php';
if(isset($_GET['deleteId'])){
$id = $_GET['deleteId'];

$sql = "delete from subscribers where id = $id";
$response = mysqli_query($con,$sql);
if ($response){
  header('location:display.php');
}else{
    "Deletion of data failed";
}

}


?>