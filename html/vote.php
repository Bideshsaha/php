<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST["age"];
        $validage = "please enter a valid age";
        $elegible = "you are elegible for voteing.";
        $notelegible = "you are not elegible for voteing.";
        $catagory;
        function check($age) {
            global $validage,$elegible,$notelegible,$catagory;
            
            if ($age <= 0) {
                $catagory= '$validage';
            } elseif ($age < 18) {
                $catagory= '$notelegible';
            } else {
                $catagory= '$elegible';
            }
            switch($catagory){
                case '$validage':
                    echo"<P>" . $validage . "</P>";
                    break;
                case '$notelegible':
                    echo"<P>" . $notelegible . "</P>";
                    break;
                case '$elegible':
                    echo"<P>" . $elegible . "</P>";
                    break;
            }

        }

        check($age);
    }
?>



  