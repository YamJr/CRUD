
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operations</title>
    <style>
        *,
        ::before,
        ::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 700px;
            margin: 10px auto;

        }
.btn{
     background-color:lightblue;
    color:blue;
    padding:10px; 
     margin:5px;
    border-radius:1em;
   text-decoration:none;
   font-size:14px;
}
.a{
    padding:10px;
}
 .table, th, td {
  /* border: 1px solid grey; */
  padding:10px;
} 
    </style>
</head>

<body>
    <div class="container">
        <a href ="user.php" class="btn">Add new</a>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Mobile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connect.php";
                        $sql = "SELECT * FROM `crud`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)){
                            ?>
                             <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td><?php echo $row['password'] ?></td>
                            <td><?php echo $row['mobile'] ?></td>
                            <td><a href="edit.php?id=<?php echo $row['id'] ?>" class="btn">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn">Delete</a>
                    </td>
                        </tr>
                            <?php
                        }
                    ?>
            </tbody>
        </table>
    </div>
</body>

</html>
