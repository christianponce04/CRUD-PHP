<?php 

session_start();

define("HOSTNAME", "localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","crud");

$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if(!$conn){
    die("conncetion failed");
}

?>