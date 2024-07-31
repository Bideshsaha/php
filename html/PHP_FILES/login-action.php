<?php
session_start();
// print_r($_POST); if it was open then the passed data is displayed in the page
include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST"){


    $email = $_POST["email"];
    $pass = $_POST["psw"];
    
    $loginMessage = verifyLogin($email, $pass);
    echo $loginMessage;
}
//New logic for login
function verifyLogin($email, $pass){
    global $conn;

        // Sanitize user input to prevent SQL Injection
        $email = mysqli_real_escape_string($conn, $email);
        $pass = mysqli_real_escape_string($conn, $pass);

        // Query to check email and password
        $sql = "SELECT password FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 0) {
            $response = [
                'status'=> 400,
                'message'=>"Invalid email"  
            ];
        } else {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];
            // Verify the entered password with the stored hashed password
            if (password_verify($pass, $hashed_password)) {
                $response = [
                    'status'=>200,
                    'message'=>'Login successful'
                ];
                $_SESSION["email"] = $email;
                // header("location:profile.php");
            } else {
                $response = [
                    'status'=>400,
                    'message'=>'Invalid password'
                ];
            }
        }      

        // Close the connection
        mysqli_close($conn);

        // Return the status
        return json_encode($response);
}
