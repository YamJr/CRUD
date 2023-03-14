<?php 
include './connect.php';
  $id = $_GET['id'];
  $sql = "DELETE FROM `crud` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
    if($result){
      header("Location:index.php?msg=Record deleted successfully");
    }
    else{
      echo "failed:" .mysql_error($conn);
    }
?>