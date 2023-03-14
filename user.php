<?php 
include './connect.php';

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $password = $_POST['password'];
   $sql="INSERT INTO `crud`(`id`, `Name`, `Email`, `Mobile`, `Password`) VALUES ('Null','$name','$email','$mobile','$password')";
   $result = mysqli_query($conn, $sql);
   if($result){
    header("Location:index.php?msg=New record created successfully");
   }
   else{
    echo "Failed:",mysqli_error($conn);
   }
}
?>

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

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input {
            padding: 10px;
        }

        input:last-child {
            all: unset;
            text-align: center;
            padding: 10px;
            border: 1px solid;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile">
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>

</html>
