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
    // ERROR HANDLES
    if (emptyField($userName, $userEmail, $userUid, $userPwd, $userPwdRpt) !== false) {
        header("location: ../registro.php?error=campovazio");
        exit();
    }
    if (invalidUid($userUid) !== false) {
        header("location: ../registro.php?error=invalidouser");
        exit();
    }
    if (invalidEmail($userEmail) !== false) {
        header("location: ../registro.php?error=invalidoemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRpt) !== false) {
        header("location: ../registro.php?error=pwdnotmatch");
        exit();
    }
    if (uidExists($conn, $userUid, $userEmail) !== false) {
        header("location: ../registro.php?error=usertaken");
        exit();
    }


    createUser($conn, $userName, $userEmail, $userUid, $userPwd);
}