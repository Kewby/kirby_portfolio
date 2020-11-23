<?php
    include "salesFunction.php"; //to connect the function file.
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container w-50 mx-auto">
        <form action="" method="post" class="mt-3">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <h2>T-shirts</h2>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="shirt_price">Price:</label>
                    <input type="text" name="shirt_price" class="form-control">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="shirt_quantity">Number of Items:</label>
                    <input type="text" name="shirt_quantity" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <h2>Pants</h2>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pants_price">Price:</label>
                    <input type="text" name="pants_price" class="form-control">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="pants_quantity">Number of Items:</label>
                    <input type="text" name="pants_quantity" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <h2>Shoes</h2>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="shoes_price">Price:</label>
                    <input type="text" name="shoes_price" class="form-control">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="shoes_quantity">Number of Items:</label>
                    <input type="text" name="shoes_quantity" class="form-control">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-outline-success form-control mt-3">Submit</button>
        </form>

        <?php
            if(isset($_POST['submit'])){
                $shirt_price = $_POST['shirt_price'];
                $shirt_quantity = $_POST['shirt_quantity'];
                $pants_price = $_POST['pants_price'];
                $pants_quantity = $_POST['pants_quantity'];
                $shoes_price = $_POST['shoes_price'];
                $shoes_quantity = $_POST['shoes_quantity'];

                $shirts_total = computeShirtsTotal($shirt_price, $shirt_quantity);

                echo $shirts_total;
            }
        ?>
    </div>
</body>
</html>