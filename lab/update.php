<?php
include 'connect.php';
$id = $_GET['updateid'];
if (isset($_POST['submit'])) {
    $orderNO = $_POST['orderNO'];
    $productname = $_POST['productname'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $dateofpurchase = $_POST['dateofpurchase'];
    $timeofpurchase = $_POST['timeofpurchase'];
    $sql = " update q_info  set orderNO='$orderNO',productname='$productname',quantity='$quantity' , price = '$price',dateofpurchase='$dateofpurchase',timeofpurchase='$timeofpurchase'
   where orderNO=$orderNO";

    $result = mysqli_query($conn, $sql);
    if ($result) {

        header('location:show.php');
    } else {
        die(mysqli_error($conn));
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="POST">

        <div class="container">
            <label for="orderNO">orderNO</label>
            <input type="order" name="orderNO">
            <br>

        </div>

        <label for="productname">productname</label>
        <input type="text" name="productname">
        <br>

        <label for="quantity">quantity</label>
        <input type="quantity" name="quantity">
        <br>

        <label for="price">price</label>
        <input type="price" name="price">
        <br>

        <label for="dateofpurchase">dateofpurchase</label>
        <input type="date" name="dateofpurchase">
        <br>

        <label for="time">timeofpurchase</label>
        <input type="time" name="timeofpurchase">


        </div>

        <div>
            <input type="submit" value="submit" name="submit">


        </div>








    </form>






</body>

</html>