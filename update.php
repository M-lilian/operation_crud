<?php
include  'connect.php';
$id = $_GET['updateId'];
$sql = "select * from subscribers where id=$id";
$response = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($response);
$name = $row['name'];
$email = $row['email'];
$phoneNumber = $row['phone_number'];
$pword = $row['password'];
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $pword = $_POST['password'];
    $pword =Md5($pword );


    $sql = "update subscribers set  name='$name', email='$email', phone_number='$phoneNumber',password='$pword' where id='$id'";
    $response = mysqli_query($con,$sql);
    if ($response){
       header('location:display.php');
    // echo "update successfull";
    }else{
        echo "Updating  failed";
    }
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Crud operation</title>
</head>
<body>
  <form method="post" action="">
    <div class="container my-6">
        <h2 class="text-center">Registration form</h2>  
        
            <div class="mb-3">
              <label >Name:</label>
              <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value="<?php
              echo $name; ?>">
            </div>

            <div class="mb-3">
              <label >Email:</label>
              <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo $email; ?>">
            </div>

            <div class="mb-3">
              <label >Phone number:</label>
              <input type="text" class="form-control" placeholder="Enter your phone number" name="phone_number" autocomplete="off" value="<?php echo $phoneNumber; ?>">
            </div>

            <div class="mb-3">
              <label >Password:</label>
              <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value="<?php echo $pword; ?>">
            </div>
            
             <button type="submit" class="btn btn-danger" name="submit">Update</button>
    </div>
  </form>
</body>
</html>