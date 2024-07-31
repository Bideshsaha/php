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
        <form action="profile-action.php" method="post" enctype="multipart/form-data" class="profileform" id="profileform">
        <!-- profile-image-section -->
        <div class="image-part" id="image-part">
            <label for="profile_pic">Upload Profile Picture</label>
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
                        echo '<input type="tel" class="form-control start" id="phone" name="phone" placeholder="123-4545-678" pattern="\d{10}" required>';
                     }else{
                        echo '<div class="start">'.htmlspecialchars($row2['phone']).'</div>';
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
                <input type="submit" value="Save">
            </div>
           
        </form>
    </div>
    <script src="../JS/profile.js"></script>
</body>
</html>
