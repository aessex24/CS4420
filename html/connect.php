<?php
$connection = mysqli_connect('localhost', 'admin', 'Rebelution3');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'ski_slopes_excuse');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>