<?php

$host ="localhost";
$user_name = "root";
$password = "";
$database = "blog";

$conn = mysqli_connect($host,$user_name,$password,$database);
if(!$conn){
    echo 'connection is not done.';
}
