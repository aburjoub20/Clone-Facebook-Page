<?php 

// define('SERVERNAME','localhost');
// define('USERNAME','root');
// define('USERPASS','');
// define('DBNAME','fb');

// $conn=mysqli_connect(SERVERNAME,USERNAME,USERPASS,DBNAME);
// if($conn){
    
// }else {
//     die("Error".mysqli_connect_error());
// }
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','fb');

$conn = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DATABASE);
if($conn){
    echo("hello".mysqli_connect_error());
    
}

?>