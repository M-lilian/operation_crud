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
  <form method="post" action="creation.php">
    <div class="container my-6">
        <h2 class="text-center">Registration form</h2>  
        
            <div class="mb-3">
              <label >Name:</label>
              <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>

            <div class="mb-3">
              <label >Email:</label>
              <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>

            <div class="mb-3">
              <label >Phone number:</label>
              <input type="text" class="form-control" placeholder="Enter your phone number" name="phone_number" autocomplete="off">
            </div>

            <div class="mb-3">
              <label >Password:</label>
              <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>
            
             <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
  </form>
</body>
</html>