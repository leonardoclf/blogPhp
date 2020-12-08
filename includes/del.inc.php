<?php

if (isset($_POST["del"])) {
    
    $pId = $_GET["pId"];
    
    
    require_once 'dbcon.inc.php';
    require_once 'functions.inc.php';
    
    
    
    delPost($conn, $pId);
    
    


} else {
    header("location: ../dasboard.php?error=invalidDel");
    exit();
}