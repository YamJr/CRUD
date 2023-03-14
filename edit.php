<!DOCTYPE html>
<html lang="en">
<?php
include './connect.php';

$id = $_GET['id'];

$query = "SELECT * FROM crud where id ='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['Submit'])) {
    $name = $email = $password = $mobile = '';
    $error = [];

    // checking existence of name
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $error['name'] = "enter a valid name";
    }

    // checking existence of email
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $error['email'] = "enter a valid email";
    }

    // checking existence of password
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $error['password'] = "enter a valid password";
    }

    // checking existence of mobile
    if (isset($_POST['mobile']) && !empty($_POST['mobile'])) {
        $mobile = $_POST['mobile'];
    } else {
        $error['mobile'] = "enter a valid mobile";
    }


    // if the field is not empty then updating into the database
    $update= "UPDATE crud set name='$name',email='$email',password='$password',mobile='$mobile' where id='$id'";

    if (mysqli_query($conn, $update)) {
        // echo 'Data updated successfully';
         header('location:index.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

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
            <input type="text" name="name" id="name" value=<?php echo  $row['Name'];?> />
            <label for="Email">Email</label>
            <input type="email" name="email" id="email" value=<?php echo  $row['Email'];?> />
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value=<?php echo  $row['password']; ?>>
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile" value=<?php echo  $row['mobile'];?>>
            <input type="submit" value="Edit" name="Submit">
        </form>
    </div>
</body>

</html>

