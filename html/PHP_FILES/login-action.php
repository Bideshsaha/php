<?php
// print_r($_POST); if it was open then the passed data is displayed in the page
include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST"){


    $email = $_POST["email"];
    $pass = $_POST["psw"];

    $loginMessage = verifyLogin($email, $pass);
    echo $loginMessage;

   

// if($email==$Email and $pass==$password){
//     echo 'Login successfully';
// }else if($email==$Email and $pass!=$password){
//     echo 'Invalid password';
// }else if($email!=$Email and $pass==$password){
//     echo 'invalid email id';
// }else{
//     echo 'please enter valid details';
// }
}



// $Email = "sahabidesh523@gmail.com";
// $password = "123456789";

// Function to verify email and password
function verifyLogin($email, $pass) {
    global $conn;
    
    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    
    // Execute the statement
    $stmt->execute();
    
    // Bind result variables
    $stmt->bind_result($dbEmail, $hashed_password);
    
    // Fetch the results
    if ($stmt->fetch()) {
        // Close statement
        $stmt->close();

        // Verify the password
        if (password_verify($pass, $hashed_password)) {
            return "Login successfully";
        } else {
            return "Invalid password";
        }
    } else {
        // Close statement
        $stmt->close();
        return "Invalid email id";
    }
}