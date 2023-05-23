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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container my-5">
    <button class="btn-primary"><a href="index.php" class="text-light  ">Add User</a></button>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">SNO</th>
          <th scope="col">Email</th>
          <th scope="col">Age</th>
          <th scope="col">Name</th>
          <th scope="col">ID</th>
          <th scope="col">options</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "select * from `s_i`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $sno = $row['sno'];
            $email = $row['email'];
            $age = $row['age'];
            $name = $row['name'];
            $id = $row['id'];

            echo '<tr>
                    <th scope="row">' . $sno . '</th>
                    <td>' . $email . '</td>
                    <td>' . $age . '</td>
                    <td>' . $name . '</td>
                    <td>' . $id . '</td>
            
                    <td>
                    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">update</a></button>


                    <button class="btn btn-danger"><a href="delete.php?   deleteid='.$id.'"class="text-light">delete</a></button>
                    </td>

                  


                  </tr>';
          }
        }
        ?>




  </div>
</body>

</html>