function check(event){
event.preventDefault();
let givenage = document.getElementById("age").value;
let validage = "please enter a valid age";
let elegible = "you are elegible for voteing.";
let notelegible = "you are not elegible for voteing.";

let agecatagory;

if(givenage<=0){
    agecatagory='validage';
    //document.getElementById("validity-displaybox").innerHTML= validage;
}
else if(givenage<18){
    agecatagory='notelegible';
    //document.getElementById("validity-displaybox").innerHTML= notelegible;
}else{
    agecatagory='elegible';
    //document.getElementById("validity-displaybox").innerHTML= elegible;
}


switch(agecatagory) {
    case 'validage':
        document.getElementById("validity-displaybox").innerHTML= validage;
        break;
    case 'elegible':
        document.getElementById("validity-displaybox").innerHTML= elegible;
        break;
    case 'notelegible':
        document.getElementById("validity-displaybox").innerHTML= notelegible;
        break;
}
return false;
}