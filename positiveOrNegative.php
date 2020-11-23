<?php
    include "conditionalFunctions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSITIVE OR NEGATIVE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-4 text-center mt-5">INPUT A NUMBER!:</h1>

    <div class="container w-50 mx-auto">
        <form action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="text" name="input_number" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="submit" name="submit" value="Submit" class="form-control btn btn-success">
                </div>
            </div>

        </form>
        <?php
            if(isset($_POST['submit'])){
                $input_number = $_POST['input_number'];

                checkPositiveOrNegative($input_number);
            }
        ?>

    </div>
</body>
</html>