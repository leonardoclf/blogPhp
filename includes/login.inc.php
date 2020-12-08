<?php 

if (!isset($_POST["login"])) {
    
    header("location: ../index.php?error=invalidsub");
    exit();
    
} else {
    
    $uIdEmail = $_POST["uIdEmail"];
    $uPwd = $_POST["uPwd"];
    

    require_once 'dbcon.inc.php';
    require_once 'functions.inc.php';

    
    // Criar validações
    // Dos pwds e etc..


    loginUser($conn, $uIdEmail, $uPwd);
}