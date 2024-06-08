
function myfunc(){
    alert("this is your first alert!");
}
function myfunc1(){
    let detail = prompt("please enter your first name","");

    document.getElementById("demo").innerHTML="your first name is "+ detail;
}
function myfunc2(){
    let text = "press a button!\nEither OK or Cancel.";
    if(confirm(text)==true){
        text = "You pressed OK!";
    }else {
        text = "You Canceled!";
    }
    document.getElementById("demo").innerHTML = text;
}
function myfunc3(event){
    event.preventDefault();//prevent the default submit method

    let len = document.getElementById("pwd").value.length;
    
    if(len<8){
        document.getElementById("error-message1").style.display='block';
        
    }else if(len>=11){
        document.getElementById("error-message2").style.display='block';
        
    }else{
        document.getElementById("success-message").style.display='block';
    }
    return false;
}