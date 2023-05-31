<?php

include 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>

<body>
    <div class="container my-5">
        <button><a href="index.php" class="text-light  ">Add User</a></button>
        <table class="table">

            <tr>
                <th scope="col">orderNO</th>
                <th scope="col">productname</th>
                <th scope="col">quantity</th>
                <th scope="col">price</th>
                <th scope="col">dateofpurchase</th>
                <th scope="col">timeofpurchase</th>
                <th scope="col">options</th>
            </tr>

            <?php
            $sql = "select * from `q_info`";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $orderNO = $row['orderNO'];
                    $productname = $row['productname'];
                    $quantity = $row['quantity'];
                    $price = $row['price'];
                    $dateofpurchase = $row['dateofpurchase'];
                    $timeofpurchase = $row['timeofpurchase'];

                    echo '<tr>
                    <th scope="row">' . $orderNO . '</th>
                    <td>' . $productname . '</td>
                    <td>' . $quantity . '</td>
                   
                    <td>' . $price . '</td>

                    <td>' . $dateofpurchase . '</td>

                    <td>' . $timeofpurchase . '</td>
            
                    <td>
                    <button ><a href="update.php? updateid=' . $orderNO . '" class=>update</a></button>


                    <button ><a href="delete.php?   deleteid=' . $orderNO . '"class=>delete</a></button>
                    </td>

                  


                  </tr>';
                }
            }
            ?>











        </table>


    </div>



</body>

</html>