<?php
if (isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];

$host ='localhost';
$user = 'root';
$pasword ='';
$dbname ='rit';

$conn = mysqli_connect($host,$user,$pasword,$dbname);

$sql = "INSERT INTO s_info(name,email) values('$name','$email')" ;

mysqli_query($conn,$sql);







}




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
    <form action="#" method="POST" >
        <div class="container">
            <label for="text">name</label>
            <input type="text"name="name"> <br>
            <br>
            <label for="email">email</label>
            <input type="email"  name="email"> <br>

            <input type="submit" name="submit" >
        </div>
    </form>
</body>
</html>