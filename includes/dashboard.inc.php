<?php


require_once 'includes/dbcon.inc.php';
require_once 'includes/functions.inc.php';

if($_SESSION == null) {
    header("location: ../index.php?login=fail");
}

$posts = readPosts($conn);

