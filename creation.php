<?php
include  'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $pword = $_POST['password'];
    $pword =Md5($pword );

    $sql = "insert into subscribers(name, email, phone_number, password)
    values('$name', '$email', '$phoneNumber','$pword' )";
    $response = mysqli_query($con,$sql);
    if ($response){
        // echo "Data inserted successfully";
        header('location:display.php');
    }else{
        echo "Data insertion failed";
    }
    $con->close();
}
?>