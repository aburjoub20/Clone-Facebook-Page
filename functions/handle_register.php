<?php
include('connect.php');
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email-mobile'];
$password = password_hash($_POST['up-password'],PASSWORD_DEFAULT);
$gender = $_POST['gen'];
if(isset($_POST['register'])){
    $userRegister="INSERT INTO users(`firstName`,`lastName`,`contact`,`password`,`gender`) 
    VALUES('$firstName','$lastName','$email','$password','$gender')";
   if(mysqli_query($conn,$userRegister)){
        echo "done";
    }else {
        die(mysqli_error($conn));
    }
}
else
echo "error 404!";
?>