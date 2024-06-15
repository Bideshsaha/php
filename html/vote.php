<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST["age"];

        function check($age) {
            if ($age <= 0) {
                echo "Please enter a valid age.";
            } elseif ($age < 18) {
                echo "You are not eligible for voting.";
            } else {
                echo "You are eligible for voting.";
            }
        }

        check($age);
    }
?>



  