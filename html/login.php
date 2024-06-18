<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Email = "sahabidesh523@gmail.com";
    $password = "123456789";

    $email = $_POST["email"];
    $pass = $_POST["psw"];

if($email==$Email and $pass==$password){
    echo 'Login successfully';
}else if($email==$Email and $pass!=$password){
    echo 'Invalid password';
}else if($email!=$Email and $pass==$password){
    echo 'invalid email id';
}else{
    echo 'please enter valid details';
}
}

