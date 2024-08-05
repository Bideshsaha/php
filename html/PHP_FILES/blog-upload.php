<?php
session_start();
include 'connection.php';
if(!isset($_SESSION["email"])){
    header("location:loginpage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/blog-upload.css">
    <title>Blog Upload</title>
</head>
<body>
    <h1>Upload Blog</h1>
    <div class="blog-page">
        <form class="blog-form" id="blog-form">
                <div class="blog-image">
                    <!-- <label for="profile_pic">Featured Image</label> -->
                    <span id="error-message"></span>
                    <input type="file" name="fetured_pic" id="fetured_pic" required>
                    <div id="fetured-image"><img src="" id="fetured-img" ></div>
                </div>
                <div class="textarea-section">
                    <textarea type="textarea" name="textarea" class="textarea" id="textareaid"></textarea>
                </div>
                <div class="upload-button">
                    <button type="submit" name="upload" class="btn-pink" id="btn-top">Upload</button>
                </div>
        </form>
    </div>
    <script src="../JS/blog-upload.js"></script>
</body>
</html>
