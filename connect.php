<?php

$con = new mysqli("localhost", "root", "", "crude_operations");
if($con->connect_error){
 die("Connection failed: " . $con->connect_error);
}

// $con->close();

?>