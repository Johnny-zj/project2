<?php

// 1. Open database connection
$dbhost = "localhost";
$dbuser = "zhang-jing";
$dbpass = "m87KM2OVk5Jg";
$dbname = "2201613130313";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Text if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed; " .
       mysqli_connection_errno() . 
       " (" . mysqli_connect_errno() . ")"
       );
}

?>