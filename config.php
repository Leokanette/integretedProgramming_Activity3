<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "task_management";

$conn = mysqli_connect("$host", "$username", "$password", "$database");

if(!$conn)
{
    die("". mysqli_connect_error());
}


?>