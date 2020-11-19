<?php ob_start();
$connection = mysqli_connect("localhost", "root", "", "mojcms");



$query = "SET NAMES utf8";
mysqli_query($connection, $query);

// if ($connection) {

//     echo "We are connected";
// }
