<?php 

$server="localhost";
$user="root";
$password="";
$db="php_test1";

$con= mysqli_connect($server,$user,$password,$db);

if($con)
{
   /*  echo "connect";  */ 
}
else{
    echo "no connect";
}
?>