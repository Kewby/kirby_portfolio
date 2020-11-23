<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="first_name">
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $first_name = $_POST['first_name'];

            displayMessage($first_name);
        }
    ?>

</body>
</html>


<?php

    // $number_1 = 5;
    // $number_2 = 25;

    // function functionName($number_1, $number_2){   
    //     $sum = $number_1 + $number_2;
        
    //     return $sum;
    // }
    
    // echo functionName($number_1, $number_2);

    // if(isset($_POST['submit'])){

    // }
?>