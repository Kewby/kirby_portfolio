<?php
    function checkPositiveOrNegative($input_number){
        if($input_number === "0"){
            echo $input_number." is Zero";
        }elseif($input_number < 0){
            echo $input_number." is Negative :(";
        }elseif($input_number > 0){
            echo $input_number." is Positive!";
        }else{
            echo $input_number." is not a number";
        }
    }
?>