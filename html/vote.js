function check(event){
event.preventDefault();
let givenage = document.getElementById("age").value;
let validage = "please enter a valid age";
let elegible = "you are elegible for voteing.";
let notelegible = "you are not elegible for voteing.";

if(givenage<=0){

    document.getElementById("validity-displaybox").innerHTML= validage;
}
else if(givenage<18){
    document.getElementById("validity-displaybox").innerHTML= notelegible;
}else{
    document.getElementById("validity-displaybox").innerHTML= elegible;
}
return false;
}