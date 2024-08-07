<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../JS/login.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body class="body">
    

    <div class="wrapper">
        <form id="loginform">
        <div id="message"></div>
            <label>Email </label>
            <input class="form-control" type="email" name="email" placeholder="Enter email" required>
            <label>Password</label>
            <div class="password-section">
                <input class="form-control" type="password" id="psw" name="psw" placeholder="*********" required>
             <div class="eye-section">
                <i id="close" class="fa-solid fa-eye-slash"></i>
                <i id="open" class="fa-solid fa-eye"></i>
             </div>
            </div>
            <input type="submit" name="login-btn" value="Submit">
            <p>New User ?<a href="signuppage.php">Sign up</a></p>
            <a href="home.php">Goto Home</a>
        </form>  
    </div>
    
</body>
</html>