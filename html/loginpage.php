<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./JS/loginpage.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<body>
<div id="message"><?php include 'login.php';?></div>
    <div class="wrapper">
        <form  method="post">
            <label>Email </label>
            <input type="email" name="email" placeholder="Enter your registered email" required>
            <label>Password </label>
            <div>
                <input type="password" id="psw" name="psw" placeholder="*********" required>
             
                    <i id="close" class="fa-solid fa-eye-slash"></i>
                    <i id="open" class="fa-solid fa-eye"></i>
 
            </div>
            <input type="submit" name="login-btn" value="Submit">
        </form>  
    </div>
</body>
</html>