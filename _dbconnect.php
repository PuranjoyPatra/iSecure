<?php
$server="localhost";
$username="root";
$password="";
$dbname="loginsys";

$conn=mysqli_connect($server,$username,$password,$dbname);

if (!$conn) {
    die("Unable to connect ".mysqli_connect_error());
}

?>