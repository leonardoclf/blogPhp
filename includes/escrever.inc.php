<?php

if (isset($_POST["submit"])) {
    
    $title = $_POST["postTitle"];
    $body = $_POST["postBody"];

    require_once 'dbcon.inc.php';
    require_once 'functions.inc.php';

    
    if (emptyPost($title, $body) !== false) {
        header("location: ../escrever.php?error=campovazio");
        exit();
    }
    
    createPost($conn, $title, $body);
    


} else {
    header("location: ../escrever.php?error=invalidsub");
    exit();
}