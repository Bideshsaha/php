<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables
    $maxFileSize = 1 * 1024 * 1024; // 1 MB
    $allowedTypes = ['image/jpeg'];
    $isValid = true;
    $errorMessage = '';

    // Check for file upload errors
    if ($_FILES['profile_pic']['error'] === 0) {
        // Get file size and type
        $fileSize = $_FILES['profile_pic']['size'];
        $fileType = $_FILES['profile_pic']['type'];

        // Validate file size
        if ($fileSize > $maxFileSize) {
            $errorMessage .= "Error: File size should be less than 1 MB.<br>";
            $isValid = false;
        }

        // Validate file type
        if (!in_array($fileType, $allowedTypes)) {
            $errorMessage .= "Error: Only JPG files are allowed.<br>";
            $isValid = false;
        }

        // If file is valid, move it to the upload directory
        if ($isValid) {
            $profilePicture = time() . '-' . basename($_FILES['profile_pic']['name']);
            $destination = '../uploads/' . $profilePicture;

            if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $destination)) {
                $profilePicturePath = $profilePicture;
            } else {
                $errorMessage .= "Error: File could not be uploaded.<br>";
                $isValid = false;
            }
        }
    } else {
        $errorMessage .= "Error: There was a problem with the file upload.<br>";
        $isValid = false;
    }

    // If file is valid, proceed with database query
    if ($isValid) {
        // Fetch user ID from the users table
        $email = $_SESSION["email"];
        $query = "SELECT ID FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        $user_id = mysqli_fetch_assoc($result);

        // Prepare data for insertion
        $dob = $_POST["datemax"];
        $contact = $_POST["phone"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];

        // Insert data into profile table
        $query = "INSERT INTO `profile` (`user_id`, `profile_pic`, `datemax`, `phone`, `address`, `city`, `state`) 
                  VALUES ('".$user_id["ID"]."', '".$profilePicturePath."', '".$dob."', '".$contact."', '".$address."', '".$city."', '".$state."')";

        if (mysqli_query($conn, $query)) {
            header("location:home.php");
            // echo "Profile updated successfully.";
        } else {
            echo "Error: Could not execute the query. " . mysqli_error($conn);
        }
    } else {
        echo $errorMessage;
    }
}


//session_start(); 
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
// include 'connection.php';
// if ($_SERVER["REQUEST_METHOD"] == "POST"){
//     // No erros 
//     if($_FILES['profile_pic']['error'] === 0){
//         //Validations for file type and size should be less than 2 mb
//         $isValid = true;

//         if($isValid){
//             move_uploaded_file($_FILES['profile_pic']['tmp_name'], '../uploads/'.time().'-'.$_FILES['profile_pic']['name']);
//         }
//     }
  

    //FETCHING THE USERID FROM USER TABLE
//     $email = $_SESSION["email"];
//     $query = "SELECT ID FROM users WHERE email = '$email'";
//     $userid = mysqli_query($conn,$query);
//     $user_id = mysqli_fetch_assoc($userid);
    

//     $profilePicture = time().'-'.$_FILES['profile_pic']['name'];
//     $dob = $_POST["datemax"];
//     $contact = $_POST["phone"];
//     $address = $_POST["address"];
//     $city =  $_POST["city"];
//     $state =  $_POST["state"];

//      $query = mysqli_query($conn,"INSERT INTO `profile` (`user_id`,`profile_pic`, `datemax`, `phone`, `address`,`city`,`state`) 
//                  VALUES ('".$user_id["ID"]."','".$profilePicture."', '".$dob."', '".$contact."', '".$address."','".$city."','".$state."')");
// }