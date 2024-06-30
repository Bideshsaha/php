console.log("loaded home js");

$(document).ready(function(){
    $("#open").hide();
    $("#close").click(function(){
        $("#close").hide();
        $("#open").show();
        $('#psw').attr('type', 'text');
    });
    $("#open").click(function(){
        $("#open").hide();
        $("#close").show();
        $('#psw').attr('type', 'password');
    });
});