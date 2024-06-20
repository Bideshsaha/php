function check(event){
event.preventDefault();
let givenage = document.getElementById("age").value;
let max_age = "The machine can evaluate upto age 125 max"


// let agecatagory;
if(givenage<=125){
if(givenage<=0){
    document.getElementById("validAge").display = "block";
    document.getElementById("validity-displaybox").innerHTML= document.getElementById("validAge").innerHTML;
}else if(givenage<18){
    document.getElementById("notEligible").display = "block";
    document.getElementById("validity-displaybox").innerHTML= document.getElementById("notEligible").innerHTML;
}else{
    document.getElementById("Eligible").display = "block";
    document.getElementById("validity-displaybox").innerHTML= document.getElementById("Eligible").innerHTML;
}
}else{
    document.getElementById("validity-displaybox").innerHTML= max_age;
}














// let validage = "please enter a valid age";
// let elegible = "you are elegible for voteing.";
// let notelegible = "you are not elegible for voteing.";

// let agecatagory;
// if(givenage<=0){
//     agecatagory='validage';
// }
// else if(givenage<18){
//     agecatagory='notelegible';   
// }else{
//     agecatagory='elegible';
// }
// switch(agecatagory) {
//     case 'validage':
//         document.getElementById("validity-displaybox").innerHTML= validage;
//         break;
//     case 'elegible':
//         document.getElementById("validity-displaybox").innerHTML= elegible;
//         break;
//     case 'notelegible':
//         document.getElementById("validity-displaybox").innerHTML= notelegible;
//         break;
// }
 return false;
}