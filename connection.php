<?php
$servername="localhost";
$username="root";
$password="";
$dbname="student";
$dbcon=new mysqli($servername,$username,$password,$dbname);
//var_dump($dbcon);
if($dbcon->connect_error){
    die($dbcon->connect_error);
    exit;
}
// else{
//     echo "Success";
// }


?>