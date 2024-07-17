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
            url: "login-action.php",
            method: "POST",
            data: $("#loginform").serialize(),

            success: function(response) {
                console.log(response);
                $("#message").html(response);
            },
            error: function(xhr, status, error) {
                $("#message").html("An error occurred: " + error);
            }
        });
    });

});
