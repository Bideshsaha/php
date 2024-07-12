<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../JS/signup.js"></script>

</head>
<body class="body">
    
    <div class="pagecontainer">
 
        
        <p id="signup-message"></p>
        <header id="heading">Signup</header>
        <form id="signupform">
     
            
            <label>FirstName</label>
            <input type="text" placeholder="Enter your Firstname" id="fn" name="fn" required>
            <label>LastName</label>  
            <input type="text" placeholder="Enter your Lastname" id="ln" name="ln">
            <label>Email Id</label>
            <input type="email" placeholder="Enter your email here" id="email" name="email" required>
            <label>Password</label>
            <input type="password" placeholder="******" id="pwd" name="pwd" required>
            <label>Confirm Password</label>
            <input type="password" placeholder="******" id="cpwd" name="cpwd" required><br>
            <input type="submit" value="Submit" id="btn1" name="btn1">
        <p>Already have a account ?<a href="loginpage.php">Login</a></p>
    </form>

</div>
</body>
</html>