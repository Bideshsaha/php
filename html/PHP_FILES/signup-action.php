<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $fName = $_POST["fn"];
    $lName = $_POST["ln"];
    $Email = $_POST["email"];
    $pass = $_POST["pwd"];
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    $len = strlen($pass);
    if($len<8){
        echo 'Please enter password atleast 8-10 charecter';
    }else if($len>=11){
        echo 'Not possible! please enter 8-10 charecter';
    }else{

        if($Email != "") {
            $result = mysqli_query($conn,"SELECT * FROM users where email='".$Email."'");
            $num_rows = mysqli_num_rows($result);
            if($num_rows >= 1){
                echo "email exist";
            }
            else{
                echo 'Signed up successfully';
                $query = mysqli_query($conn,"INSERT INTO `users` (`fname`, `lname`, `email`, `password`) 
                VALUES ('$fName', '$lName', '$Email', '$hashed_password')");
            }
        }


        
    }
}