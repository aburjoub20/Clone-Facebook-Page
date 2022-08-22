<?php session_start();
include('connect.php');
$id=$_GET['id'];

$deleteUser="DELETE FROM users where id=$id";
if(mysqli_query($conn,$deleteUser)){
    $_SESSION['action']='user is deleted';
   header('location: ../users.php');
}else {
    echo mysqli_error($conn);
}
?>