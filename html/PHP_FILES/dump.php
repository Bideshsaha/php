
<?php
session_start();
include 'connection.php';
if(!isset($_SESSION["email"])){
    header("location:loginpage.php");
}
// echo 'profile page';
$email = $_SESSION["email"];

                                                      //Data fetching from user table
$query = "SELECT fname ,lname,email FROM users WHERE email = '$email'";
$result = mysqli_query($conn,$query);
if($result){
    $row = mysqli_fetch_assoc($result);
}

                                                      //Data fetching from profile table
$query = "SELECT ID FROM users WHERE email = '$email'";
$userid = mysqli_query($conn,$query);
$user_id = mysqli_fetch_assoc($userid);
$query2 = "SELECT profile_pic,datemax, phone, address,city,state FROM profile WHERE user_id = '".$user_id["ID"]."'";
$result2 = mysqli_query($conn,$query2);
if($result2){
    $row2 = mysqli_fetch_assoc($result2);
}

// echo '<pre>';
// print_r($row2);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/profile.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>profile</title>
</head>
<body>
<div class="form-container"> 
        <!-- Logout form -->
        <form action="logout.php" method="get" class="logoutform" id="logoutform">
            <input type="submit" value="Logout">
        </form> 
        
        <!-- Profile form -->
         <form  method="post" enctype="multipart/form-data" class="profileform" id="profileform"> 
        <!-- profile-image-section -->
         <div class="image-part" id="image-part">
            <label for="profile_pic">Upload Profile Picture</label>
            <span id="error-message"></span>
             <?php if(!isset($row2['profile_pic'])){
                        echo '<input type="file" name="profile_pic" id="profile_pic" style="display: none;" required>
                        <div class="profile-image" id="profile-image"><img src="" alt="" id="profile-img"></div>';
                     }else{
                        echo '<div class="profile-image" id="profile-image"><img src="../uploads/'.$row2["profile_pic"].'" alt="" id="profile-img"></div>';
                     }
            ?> 
        </div>
            <!-- profile-info-section -->
           <div class="info-part" id="info-part">
                <div class="oneline">
                    <label for="fname">First Name</label>
                    <div class="start"><?php echo $row['fname']; ?></div>
                </div>
                <div class="oneline">
                    <label for="lname">Last Name</label>
                    <div class="start"><?php echo $row['lname']; ?></div>
                </div>
                <div class="oneline email">
                    <label for="email">Email</label>
                    <div class="start"><?php echo $row['email']; ?></div>
                </div>
                <div class="oneline">
                    <label for="datemax">D.O.B</label>
                     <?php if(!isset($row2['datemax'])){
                        echo '<input type="date" class="form-control start" id="datemax" name="datemax" max="2014-12-31" required>';
                     }else{
                        echo '<div class="start">'.$row2['datemax'].'</div>';
                     }
                    ?>
                </div>
                <!-- contact-info -->
                <div class="oneline">
                    <label for="phone">Contact No</label>
                    <?php if(!isset($row2['phone'])){
                        echo '<input type="text" class="form-control start" id="phone" name="phone" placeholder="123-4545-678" pattern="\d{10}" required>';
                     }else{
                        echo '<div class="start">'.$row2['phone'].'</div>';
                     }
                    ?> 
                </div>
                <!-- Address-part -->
                <div class="oneline">
                    <label for="address">Address</label>
                    <?php if(!isset($row2['address'])){
                        echo '<textarea class="form-control start" id="address" name="address" required></textarea>';
                     }else{
                        echo '<div class="start">'.$row2['address'].'</div>';
                     }
                    ?>   
                </div>
                <!-- city-section -->
                <div class="oneline">
                    <label for="city">City</label>
                    <?php if(!isset($row2['city'])){
                        echo '<select class="form-control start" id="city" name="city" required>
                        <option value="" disabled selected>Select a city</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="Indore">Indore</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <!-- Add more options as needed -->
                        </select>';
                     }else{
                        echo '<div class="start">'.$row2['city'].'</div>';
                     }
                    ?> 

                </div>
                <!-- state-section -->
                <div class="oneline">
                    <label for="state">State</label>
                    <?php if(!isset($row2['state'])){
                echo '<select class="form-control start" id="state" name="state" required>
                    <option value="" disabled selected>Select your state</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                    </select>';
                     }else{
                        echo '<div class="start">'.$row2['state'].'</div>';
                     }
                    ?>
                    
                 </div>

 
                <?php if(!isset($row2)){
                        echo '<input type="submit" value="Save" id="save" name="save">';
                     }else{
                        //  edit button added 
                        echo ' <input type="submit" value="Edit" id="edit" name="edit">';
                     }
                    ?>   

                <a href="home.php">Goto Home</a>
            </div>
           
        </form>
    </div>
    <script src="../JS/profile.js"></script>
</body>
</html>
<!-- end of profile.php -->

<?php
session_start();
include 'connection.php';

header('Content-Type: application/json');

$response = array('success' => false, 'message' => '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables
    $maxFileSize = 1 * 1024 * 1024; // 1 MB
    $allowedTypes = ['image/jpeg'];
    $isValid = true;

    // Check for file upload errors
    if ($_FILES['profile_pic']['error'] === 0) {
        // Get file size and type
        $fileSize = $_FILES['profile_pic']['size'];
        $fileType = $_FILES['profile_pic']['type'];

        // Validate file size
        if ($fileSize > $maxFileSize) {
            $response['message'] .= "Max file size 1 MB";
            $isValid = false;
        }

        // Validate file type
        if (!in_array($fileType, $allowedTypes)) {
            $response['message'] .= "Only JPG files are allowed.<br>";
            $isValid = false;
        }

        // If file is valid, move it to the upload directory
        if ($isValid) {
            $profilePicture = time() . '-' . basename($_FILES['profile_pic']['name']);
            $destination = '../uploads/' . $profilePicture;

            if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $destination)) {
                $profilePicturePath = $profilePicture;
            } else {
                $response['message'] .= "File could not be uploaded.<br>";
                $isValid = false;
            }
        }
    } else {
        $response['message'] .= "There was a problem with the file upload.<br>";
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
                  VALUES ('".$user_id["ID"]."', '".$profilePicturePath."', '".$dob."', ".$contact.", '".$address."', '".$city."', '".$state."')";

        if (mysqli_query($conn, $query)) {
            $response['success'] = true;
            $response['message'] = "Profile updated successfully.";
        } else {
            $response['message'] .= "Error: Could not execute the query. " . mysqli_error($conn);
        }
    }

    echo json_encode($response);
}


//  <!-- end of profile-action.php -->

// {/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
// <script> */}

// $(document).ready(function() {
//     $('#profile-image').on('click', function() {
//         $('#profile_pic').click();
//     });

//     $('#profile_pic').on('change', function(event) {
//         var file = event.target.files[0];
//         if (file) {
//             var reader = new FileReader();
//             reader.onload = function(e) {
//                 $('#profile-img').attr('src', e.target.result);
//             };
//             reader.readAsDataURL(file);
//         }
//     });
//     // $("#edit").hide();
//     $('#profileform').on('submit', function(e) {
//         e.preventDefault();
//         var formData = new FormData(this);
//         console.log("Form :", formData);

//         $.ajax({
//             url: 'profile-action.php',
//             type: 'POST',
//             data: formData,
//             processData: false,
//             contentType: false,
//             success: function(response) {
//                 console.log("Response :", response)
//                 if (response.success) {
//                     window.location.reload();
//                 } else {
//                     $('#error-message').html(response.message).css("color", "#9e291c",).css("font-size","24px");
//                 }
//             }
//         });
//     });

// });

//  <!-- end of profile.js -->



// important part of profile.php

<span id="error-message"></span>
<?php if (!isset($row2['profile_pic'])): ?>
    <input type="file" name="profile_pic" id="profile_pic" style="display: none;">
    <div class="profile-image" id="profile-image"><img src="" alt="" id="profile-img"></div>
<?php else: ?>
    <div class="profile-image" id="profile-image"><img src="../uploads/<?php echo $row2['profile_pic']; ?>" alt="" id="profile-img"></div>
<?php endif; ?> 


<!-- // important part of profile.php -->

<span id="error-message"></span>
            <?php if (isset($row2['profile_pic']) && !empty($row2['profile_pic'])): ?>
        <div class="profile-image" id="profile-image">
            <input type="file" name="profile_pic" id="profile_pic" style="display: none;">
            <img src="../uploads/<?php echo htmlspecialchars($row2['profile_pic']); ?>" alt="Profile Picture" id="profile-img">
        </div>
    <?php else: ?>
        <div class="profile-image" id="profile-image">
        <img src="../uploads/<?php $row2["profile_pic"] ?>" alt="" id="profile-img">
            <img src="" alt="" id="profile-img">
        </div>
    <?php endif; ?>
    
<!-- 
    // important part of profile.php -->
    <span id="error-message"></span>
             <?php if(!isset($row2['profile_pic']) && !empty($row2['profile_pic'])){
                        echo '<input type="file" name="profile_pic" id="profile_pic" style="display: none;" required>
                        <div class="profile-image" id="profile-image"><img src="" alt="" id="profile-img"></div>';
                     }else{
                        echo '<div class="profile-image" id="profile-image"><img src="../uploads/'.$row2["profile_pic"].'" alt="" id="profile-img"></div>';
                     }
            ?> 

<!-- city -->

<?php if(!isset($row2['city'])){ ;?>
                    <select class="form-control start" id="city" name="city" required>
                        <option value="" disabled selected>Select a city</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="Indore">Indore</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <!-- Add more options as needed -->
                    </select>
                    <!-- Add more options as needed -->
                    </select>
                <?php } else{ ;?>
                    <select class="form-control start" id="city" name="city" disabled>
                    <option value="" disabled>Select a city</option>
                    <option value="Kolkata" <?php if ($row2['city'] == 'Kolkata') echo 'selected'; ?>>Kolkata</option>
                    <option value="Bangalore" <?php if ($row2['city'] == 'Bangalore') echo 'selected'; ?>>Bangalore</option>
                    <option value="Indore" <?php if ($row2['city'] == 'Indore') echo 'selected'; ?>>Indore</option>
                    <option value="Hyderabad" <?php if ($row2['city'] == 'Hyderabad') echo 'selected'; ?>>Hyderabad</option>
                    <!-- Add more options as needed -->
                    </select>
                <?php };?>


<!-- city -->
<!-- state -->
<?php if(!isset($row2['state'])){ ;?>
                <select class="form-control start" id="state" name="state" required>
                    <option value="" disabled selected>Select your state</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
                <?php }else{ ;?>
                <select class="form-control start" id="state" name="state" disabled>
                    <option value="" disabled>Select your state</option>
                    <option value="Andhra Pradesh" <?php if ($row2['state'] == 'Andhra Pradesh') echo 'selected'; ?>>Andhra Pradesh</option>
                    <option value="Arunachal Pradesh" <?php if ($row2['state'] == 'Arunachal Pradesh') echo 'selected'; ?>>Arunachal Pradesh</option>
                    <option value="Assam" <?php if ($row2['state'] == 'Assam') echo 'selected'; ?>>Assam</option>
                    <option value="Bihar" <?php if ($row2['state'] == 'Bihar') echo 'selected'; ?>>Bihar</option>
                    <option value="Chhattisgarh" <?php if ($row2['state'] == 'Chhattisgarh') echo 'selected'; ?>>Chhattisgarh</option>
                    <option value="Goa" <?php if ($row2['state'] == 'Goa') echo 'selected'; ?>>Goa</option>
                    <option value="Gujarat" <?php if ($row2['state'] == 'Gujarat') echo 'selected'; ?>>Gujarat</option>
                    <option value="Haryana" <?php if ($row2['state'] == 'Haryana') echo 'selected'; ?>>Haryana</option>
                    <option value="Himachal Pradesh" <?php if ($row2['state'] == 'Himachal Pradesh') echo 'selected'; ?>>Himachal Pradesh</option>
                    <option value="Jharkhand" <?php if ($row2['state'] == 'Jharkhand') echo 'selected'; ?>>Jharkhand</option>
                    <option value="Karnataka" <?php if ($row2['state'] == 'Karnataka') echo 'selected'; ?>>Karnataka</option>
                    <option value="Kerala" <?php if ($row2['state'] == 'Kerala') echo 'selected'; ?>>Kerala</option>
                    <option value="Madhya Pradesh" <?php if ($row2['state'] == 'Madhya Pradesh') echo 'selected'; ?>>Madhya Pradesh</option>
                    <option value="Maharashtra" <?php if ($row2['state'] == 'Maharashtra') echo 'selected'; ?>>Maharashtra</option>
                    <option value="Manipur" <?php if ($row2['state'] == 'Manipur') echo 'selected'; ?>>Manipur</option>
                    <option value="Meghalaya" <?php if ($row2['state'] == 'Meghalaya') echo 'selected'; ?>>Meghalaya</option>
                    <option value="Mizoram" <?php if ($row2['state'] == 'Mizoram') echo 'selected'; ?>>Mizoram</option>
                    <option value="Nagaland" <?php if ($row2['state'] == 'Nagaland') echo 'selected'; ?>>Nagaland</option>
                    <option value="Odisha" <?php if ($row2['state'] == 'Odisha') echo 'selected'; ?>>Odisha</option>
                    <option value="Punjab" <?php if ($row2['state'] == 'Punjab') echo 'selected'; ?>>Punjab</option>
                    <option value="Rajasthan" <?php if ($row2['state'] == 'Rajasthan') echo 'selected'; ?>>Rajasthan</option>
                    <option value="Sikkim" <?php if ($row2['state'] == 'Sikkim') echo 'selected'; ?>>Sikkim</option>
                    <option value="Tamil Nadu" <?php if ($row2['state'] == 'Tamil Nadu') echo 'selected'; ?>>Tamil Nadu</option>
                    <option value="Telangana" <?php if ($row2['state'] == 'Telangana') echo 'selected'; ?>>Telangana</option>
                    <option value="Tripura" <?php if ($row2['state'] == 'Tripura') echo 'selected'; ?>>Tripura</option>
                    <option value="Uttar Pradesh" <?php if ($row2['state'] == 'Uttar Pradesh') echo 'selected'; ?>>Uttar Pradesh</option>
                    <option value="Uttarakhand" <?php if ($row2['state'] == 'Uttarakhand') echo 'selected'; ?>>Uttarakhand</option>
                    <option value="West Bengal" <?php if ($row2['state'] == 'West Bengal') echo 'selected'; ?>>West Bengal</option>
                </select>
                <?php  } ;?>

<!-- state -->