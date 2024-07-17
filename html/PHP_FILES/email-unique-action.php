<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Email = $_POST["email"];
    $result = mysqli_query($conn,"SELECT * FROM users where email='".$Email."'");
    $num_rows = mysqli_num_rows($result);
    if($num_rows >= 1){
        echo "Email exist";
    }
}