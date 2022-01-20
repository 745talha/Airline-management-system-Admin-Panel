<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";


$conn = new mysqli($servername,$username,$password,$dbname);
if($conn){
    // echo "Connection Done";
}else{
    echo "Not connectes";
}

?>