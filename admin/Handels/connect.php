<?php 
/* 1 
$conn=mysqli_connect('localhost','root','','fb');

if($conn){
    echo "connected";
}else {
    die("Error".mysqli_connect_error());
}

*/
define('SERVERNAME','localhost');
define('USERNAME','root');
define('USERPASS','');
define('DBNAME','fb');

$conn=mysqli_connect(SERVERNAME,USERNAME,USERPASS,DBNAME);
if($conn){
    
}else {
    die("Error".mysqli_connect_error());
}


?>