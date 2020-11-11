<!-- Conexão com o DB -->
<?php

// var com o nome do host do db
$servername = "localhost";
// vars com o login e senha do db
$dbUserName = "root";
$dbPassWord = "password";
// var com o nome do db que será usado
$dbName = "blogPhp";

// conectando na db usando as infos superiores 
$conn = mysqli_connect($servername, $dbUserName, $dbPassWord, $dbName);

// se tiver algum problema relatará o problema
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
