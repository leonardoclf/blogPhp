<?php 

if (!isset($_POST["register"])) {
    
    header("location: ../index.php?error=invalidsub");
    exit();
    
} else {
    
    $userName = $_POST["userName"];
    $userUid = $_POST["Uid"];
    $userEmail = $_POST["userEmail"];
    $userPwd = $_POST["userPwd"];
    $userPwdRpt = $_POST["userPwdRpt"];

    require_once 'dbcon.inc.php';
    require_once 'functions.inc.php';

    
    // Criar validações
    // Dos pwds e etc..


    createUser($conn, $userName, $userEmail, $userUid, $userPwd);
}