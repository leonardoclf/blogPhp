<?php

require_once "secret.php";


$conn = mysqli_connect($serverName, $dbUser, $dbPwd, $dbName);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}