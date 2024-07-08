<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $fName = $_POST["fn"];
    $lName = $_POST["ln"];
    $Email = $_POST["email"];

    $pass = $_POST["pwd"];
    $len = strlen($pass);
    if($len<8){
        echo 'Please enter password atleast 8-10 charecter';
    }else if($len>=11){
        echo 'Not possible! please enter 8-10 charecter';
    }else{
        echo 'Signed up successfully';
    }
}