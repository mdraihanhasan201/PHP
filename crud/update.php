<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $age = $_POST['age'];
    $name = $_POST['name'];
    $id = $_POST['id'];

   $sql = " update s_i  set id='$id',name='$name',email='$email',age='$age' where id=$id" ; 

   $result=mysqli_query($con,$sql);
if ($result){
   
    header('location:display.php');

}
else{
    die(mysqli_error($con));
}



}



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="mb-3" >
                <label for="Email1" class="form-label">Email address:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="enter your email">
                
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">age:</label>
                <input type="age" class="form-control" id="exampleInputEmail1" name="age" placeholder="enter your age">
                
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="enter your name">
                
            </div>
            <div class="mb-3">
                <label for="id" class="form-label">id:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="id" placeholder="enter your id">
                
            </div>



            
            <button type="submit" class="btn btn-primary" name="submit">update</button>
        </form>

    </div>


</body>

</html>