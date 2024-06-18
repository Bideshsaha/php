<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<body>
<div id="message"><?php include 'login.php';?></div>
    <div class="wrapper">
    
        <form  method="post">
            <label>Email </label>
            <input type="email" name="email" placeholder="Enter your registered email" required>
            <label>Password </label>
            <input type="password" name="psw" placeholder="*********" required>
            <input type="submit" name="login-btn" value="Submit">
        </form>
      
        
      
        
    </div>
</body>
</html>