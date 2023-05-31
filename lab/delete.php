<?php
include 'connect.php';
if (isset($_GET['deleteid'])){
$orderNO = $_GET['deleteid'];
$sql = "DELETE FROM q_info WHERE orderNO = '$orderNO'";
$result = mysqli_query($conn, $sql);
if ($result) {
    header('location:show.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        }
        
}


?>