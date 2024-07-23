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
                <svg xmlns="http://www.w3.org/2000/svg" id="close" width="30px" height="30px" viewBox="0 0 24 24" fill="none">
<path d="M2.99902 3L20.999 21M9.8433 9.91364C9.32066 10.4536 8.99902 11.1892 8.99902 12C8.99902 13.6569 10.3422 15 11.999 15C12.8215 15 13.5667 14.669 14.1086 14.133M6.49902 6.64715C4.59972 7.90034 3.15305 9.78394 2.45703 12C3.73128 16.0571 7.52159 19 11.9992 19C13.9881 19 15.8414 18.4194 17.3988 17.4184M10.999 5.04939C11.328 5.01673 11.6617 5 11.9992 5C16.4769 5 20.2672 7.94291 21.5414 12C21.2607 12.894 20.8577 13.7338 20.3522 14.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  id="open" fill="#000000" version="1.1" id="Capa_1" width="30px" height="30px" viewBox="0 0 442.04 442.04" xml:space="preserve">
<g>
	<g>
		<path d="M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203    c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219    c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367    c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021    c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212    c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071    c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z"/>
	</g>
	<g>
		<path d="M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188    c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993    c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5    s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z"/>
	</g>
	<g>
		<path d="M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z"/>
	</g>
</g>
</svg>
                    <!-- <i id="close" class="fa-solid fa-eye-slash"></i> -->
                    <!-- <i id="open" class="fa-solid fa-eye"></i> -->
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