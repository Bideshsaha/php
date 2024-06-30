<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Email = "sahabidesh523@gmail.com";
    $password = "123456789";

    $email = $_POST["email"];
    $pass = $_POST["psw"];

if($email==$Email and $pass==$password){
    echo 'Login successfully';
}else if($email==$Email and $pass!=$password){
    echo 'Invalid password';
}else if($email!=$Email and $pass==$password){
    echo 'invalid email id';
}else{
    echo 'please enter valid details';
}
}

// // php array
// // $array=["bid","bide","bidesh"];
// // print_r($array);
// // echo $array['1'];
// $arr = ["color1"=>"red","color2"=>"green","color3"=>"blue"];
// // print_r($arr);
// echo "<ul>";
// foreach($arr as $color){
//     echo "<li>";
//     echo $color;
//     echo"</li>";
// }
// echo "</ul>";
