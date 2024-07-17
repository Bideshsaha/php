<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../JS/signup.js"></script>

</head>
<body class="body">
    
    <div class="pagecontainer">
 
        
        <p id="signup-message"></p>
        <p id="email-message"></p>
        <header id="heading">Signup</header>
        <form id="signupform">
     
            
            <label>FirstName</label>
            <input class="form-control" type="text" placeholder="Enter your Firstname" id="fn" name="fn" required>
            <span class="error"></span>

            <label>LastName</label>  
            <input class="form-control" type="text" placeholder="Enter your Lastname" id="ln" name="ln">
            <span class="error"></span>

            <label>Email Id</label>
            <input class="form-control" type="email" placeholder="Enter your email here" id="email" name="email" required>
            <span class="error"></span>

            <label>Password</label>
            <input class="form-control" type="password" placeholder="******" id="pwd" name="pwd" required>
            <span id="perror" class="invalid"></span>

            <label>Confirm Password</label>
            <div class="cpassword-section">
            <input class="form-control" type="password" placeholder="******" id="cpwd" name="cpwd" required>
                <div class="eye-section">
                    <i id="close" class="fa-solid fa-eye-slash"></i>
                    <i id="open" class="fa-solid fa-eye"></i>
                </div>
            </div>
            
           
            <span id="msg1" class="message"></span>
            <span class="error"></span>

            <input type="submit" value="Submit" id="btn1" name="btn1">
            <p id="msg2" class="message"></p>

        <p>Already have a account ?<a href="loginpage.php">Login</a></p>
    </form>

</div>
</body>
</html>