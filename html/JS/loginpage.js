console.log("loaded home");

// $(document).ready(function(){
//     $("#open").hide();
//     $("#close").click(function(){
//         $("#close").hide();
//         $("#open").show();
//         $('#psw').attr('type', 'text');
//     });
//     $("#open").click(function(){
//         $("#open").hide();
//         $("#close").show();
//         $('#psw').attr('type', 'password');
//     });
// });

$(document).ready(function(){
    $("#open").hide();
    $("#close,#open").click(function(){
        $("#close, #open").toggle();
    var type = $('#psw').attr('type') === 'password' ? 'text' : 'password';
    $('#psw').attr('type', type);
    });

    $("#loginform").submit(function(event){
        console.log("insite submit working");
        event.preventDefault();
        $.ajax({
            'url':"login.php",
            'method':"POST",
            'data':$("#loginform").serialize(),
            'success':$("#success_message").text("ajax running"),
            'error':$("#success_message").text("ajax not running"),
        })
    })

});

