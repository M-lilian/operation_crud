<?php
include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Crud operation</title>

    <style>
    .custom-margin {
        margin: 15px auto;
    }
    </style>

</head>
<body>
    <div class="container">
        <a class=" btn btn-primary custom-margin text-light" href="user.php"> ADD USER</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone number</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>

  <tbody>
  <?php
$sql = "select * from subscribers";
$response = mysqli_query($con,$sql);
if($response){
    while($row=mysqli_fetch_assoc($response)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $phoneNumber = $row['phone_number'];
        $password = $row['password'];

        echo '  <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$phoneNumber.'</td>
        <td>'.$password.'</td>
        <td><a class=" btn btn-primary text-light" href="update.php ? updateId='.$id.' ">Update</a></td>
        <td><a  class=" btn btn-danger text-light" href="delete.php? deleteId='.$id.'">Delete</a></td>
      </tr>';
    }
}


   ?>
  
 
  </tbody>
</table>
    </div>
</body>
</html>