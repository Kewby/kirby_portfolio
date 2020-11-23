<?php
    //CONDITIONAL OPERATORS:
    // < ~~ less than
    // > ~~ greater than
    // <= ~~ less than or equal to
    // >= ~~ greater than or equal to
    // == ~~ equal to
    // === ~~ equal to and it has to be the same data type (integer, float, string, etc.)
    // != ~~ not equal


    // = ~~ assignment operator

    //if statement
    $number1 = 5;
    $number2 = 50;

    if($number1 != 10){
        echo $number1." is not equal to 10<br>"; 
    }

    //if...else statement
    if($number1 >= 50){
        echo $number1." is greater than 50<br>";
    }else{
        echo $number1." is less than 50<br>";
    }

    //if...elseif...else statement
    if($number1 == 500){
        echo $number1." is equals to 500<br>";
    }elseif($number1 > 500){
        echo $number1." is greater than 500<br>";
    }elseif($number1 < 500){
        echo $number1." is less than 500<br>";
    }else{
        echo $number1." is not a number<br>";
    }

    $check_num = "zero";

    if($check_num === "zero"){
        echo $check_num." is zero<br>";
    }elseif($check_num > 0){
        echo $check_num." is greater than zero";
    }elseif($check_num < 0){
        echo $check_num." is less than zero";
    }else{
        echo $check_num." is not a number!";
    }

    //LOGICAL OPERATORS
    // && ~~ AND
    // || ~~ OR
    $logic_num = 5;
    $logic_num2 = 10;

    if($logic_num >= 0 && $logic_num <= 10){
        echo $logic_num." is in between 0 - 10<br>";
    }elseif($logic_num > 10 && $logic_num <= 20){
        echo $logic_num." is in between 11 - 20<br>";
    }elseif($logic_num > 20){
        echo $logic_num." is too big<br>";
    }else{
        echo $logic_num." is not a number<br>";
    }

    if($logic_num == 50 && $logic_num2 == 10){
        echo "SUCCESS<br>";
    }else{
        echo "FAILED<br>";
    }

    if($logic_num == 50 || $logic_num2 == 10){
        echo "SUCCESS<br>";
    }else{
        echo "FAILED<br>";
    }

?>