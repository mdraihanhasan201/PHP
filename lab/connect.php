<?php
$conn = new mysqli('localhost','root','','question');

if ($conn){
    echo "dabase connected";
}
else{
    die(mysqli_errno($conn));
}



?>