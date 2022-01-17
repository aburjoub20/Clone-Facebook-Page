<?php error_reporting(0); ?>
<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email-mobile'];
$password = $_POST['up-password'];
$birthday = $_POST['birth-day'];
$birthmonth = $_POST['birth-month'];
$birthyear = $_POST['birth-year'];
$gender = $_POST['gen'];

if(isset($_POST['register'])){
    echo "Your First Name is: $firstName <br>";
    echo "Your Last Name is: $lastName<br>";
    echo "Your email or mobile is: $email <br>";
    echo "Your password is: $password <br>";
    echo "Your birth day is: $birthday <br>";
    echo "Your birth month is: $birthmonth <br>";
    echo "Your birth year is: $birthyear <br>";
    echo "Your gender is: $gender <br>";
    echo "Welcome! <br>";

}
else
echo "error 404!";




?>