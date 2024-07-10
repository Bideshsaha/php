<?php

$host ="localhost";
$user_name = "root";
$password = "";
$database = "blog";

$conn = mysqli_connect($host,$user_name,$password,$database);
if(!$conn){
    echo 'connection is not done.';
}else{
    echo 'connection done sucessfully';
}
$query = mysqli_query($conn,"INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `cpassword`) VALUES ('Bidesh', 'Saha', 'sahabidesh523@gmail.com', 'Bidesh@124', 'Bidesh@124')");