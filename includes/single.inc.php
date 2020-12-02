<?php 

require_once 'includes/dbcon.inc.php';
require_once 'includes/functions.inc.php';



if (!isset($_GET['pId'])) {
    header("location: ../index.php?pId=null");
    exit();
} else {
    $pId = $_GET['pId'];
}

$post = readOnePost($conn, $pId);
