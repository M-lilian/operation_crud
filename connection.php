<?php
$server = 'localhost'; 
$dbname = 'student_db';
$username = 'root';
$password = '';
$conn = new mysqli($server,$username,$password, $dbname);

if (! $conn){
    echo "connection failed";
}else{
    echo "connection successful";
}
?>