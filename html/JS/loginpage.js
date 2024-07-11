console.log("loaded home");

$(document).ready(function(){
    //code to toggle the eye icon for the password visibility
    $("#open").hide();
    $("#close,#open").click(function(){
        $("#close, #open").toggle();
    var type = $('#psw').attr('type') === 'password' ? 'text' : 'password';
    $('#psw').attr('type', type);
    });
    //section for login action
    $("#loginform").submit(function(event){
        console.log("inside submit working");
        event.preventDefault();
        $.ajax({
            url: "login.php",
            method: "POST",
            data: $("#loginform").serialize(),

            success: function(response) {
                console.log(response);
                $("#message").text(response);
            },
            error: function(xhr, status, error) {
                $("#message").text("An error occurred: " + error);
            }
        });
    });

});


            // 'success':$("#message").text("Login successfully"),
            // 'error':$("#message").text("please enter valid details"),