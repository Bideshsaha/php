console.log("hi");

// function myfunc(){
//     alert("this is your first alert!");
// }
// function myfunc1(){
//     let detail = prompt("please enter your first name","");

//     document.getElementById("demo").innerHTML="your first name is "+ detail;
// }
// function myfunc2(){
//     let text = "press a button!\nEither OK or Cancel.";
//     if(confirm(text)==true){
//         text = "You pressed OK!";
//     }else {
//         text = "You Canceled!";
//     }
//     document.getElementById("demo").innerHTML = text;
// }

// function myfunc3(event){
//     event.preventDefault();//prevent the default submit method

//     let len = document.getElementById("pwd").value.length;
    
//     if(len<8){
//         document.getElementById("error-message1").style.display='block';
        
//     }else if(len>=11){
//         document.getElementById("error-message2").style.display='block';
        
//     }else{
//         document.getElementById("success-message").style.display='block';
//     }
//     return false;
// }


//jquery codes for signup
$(document).ready(function(){

    function validatePassword() {
        var password = $("#psw").val();
        var validity = true;
        if(password.length >= 8) {
            $("#perror").removeClass("invalid").addClass("valid");
        }else {
            $("#perror").removeClass("valid").addClass("invalid");
            validity = false;
        }
        if(password.match(/[a-z]/)) {
            $("#perror").removeClass("invalid").addClass("valid");
        }else {
            $("#perror").removeClass("valid").addClass("invalid");
            validity = false;
        }
        if(password.match(/[A-Z]/)) {
            $("#perror").removeClass("invalid").addClass("valid");
        }else {
            $("#perror").removeClass("valid").addClass("invalid");
            validity = false;
        }
        if(password.match(/[0-9]/)) {
            $("#perror").removeClass("invalid").addClass("valid");
        }else {
            $("#perror").removeClass("valid").addClass("invalid");
            validity= false;
        }
        if(password.match(/[!@#$%^&*]/)) {
            $("#perror").removeClass("invalid").addClass("valid");
        }else {
            $("#perror").removeClass("valid").addClass("invalid");
            validity = false;
        }
        if (validity) {
            $("#perror").removeClass("invalid").addClass("valid").text("Password is valid");
        } else {
            $("#perror").removeClass("valid").addClass("invalid").text("Password is invalid");
        }
        return validity;
    }
    
    $("#pwd").on("keyup", validatePassword);
    
    
    $("#cpwd").on('keyup', function(){
        var password = $("#pwd").val();
        var confirm = $("#cpwd").val();
        if(password != confirm){
            $("#msg1").html("Passwords do not match!").css("color", "red");
        }else{
            $("#msg1").html("Passwords match.").css("color", "green");
        }
    });

    //Eye for confirm password section
    $("#open").hide();
    $("#close,#open").click(function(){
        $("#close, #open").toggle();
    var type = $('#cpwd').attr('type') === 'password' ? 'text' : 'password';
    $('#cpwd').attr('type', type);
    });
    //End of Eye section for confirm password 

    $('#signupform').submit(function(event){
        console.log("inside signupform");
        event.preventDefault();
        $.ajax({
            url:"signup-action.php",
            method: "POST",
            data: $("#signupform").serialize(),
            success: function(response) {
                $("#signup-message").text(response);
            },
            error: function(xhr, status, error) {
                $("#signup-message").text("An error occurred: " + error);
            }
        })
    })
    $('#email').on("blur",function(){
        $.ajax({
            url:"email-unique-action.php",
            method:"POST",
            data: {email: $("#email").val()},
            success: function(response) {
                $("#signup-message").text(response);
            },
            error: function(xhr, status, error) {
                $("#signup-message").text("An error occurred: " + error);
            }
        })
    })
});