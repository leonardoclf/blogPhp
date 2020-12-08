<?php
session_start();

if (isset($_POST["submit"])) {
    
    $pId = $_GET["pId"];
    $title = $_POST["postTitle"];
    $body = $_POST["postBody"];

    require_once 'dbcon.inc.php';
    require_once 'functions.inc.php';

    
    
    
    editPost($conn, $pId, $title, $body);
    


} else {
    header("location: ../escrever.php?error=invalidedit");
    exit();
}