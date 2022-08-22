<?php session_start();
include('connect.php');
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email-mobile'];
$gender = $_POST['gen'];
$id=$_GET['id'];

if(isset($_POST['update'])){

    $userUpdate="UPDATE users SET 
    firstName='$firstName',
    lastName='$lastName',
    contact='$email',
    gender='$gender'
    where id=$id
    ";

    if(mysqli_query($conn,$userUpdate)){
        $_SESSION['action']='user is updated';
        header('location: ../users.php');
    }else {
        echo mysqli_error($conn);
    }
}
?>