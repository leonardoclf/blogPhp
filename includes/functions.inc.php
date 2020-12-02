<?php

function emptyPost($title, $body){
    $res = NULL;

    if (empty($title) || empty($body)) {
        $res = true;
    } else {
        $res = false;
    }
    return $res;
}

function createPost($conn, $title, $body) {

    $sql = "INSERT INTO posts (title, body) VALUES (?, ?);";
    
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../escrever.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $title, $body);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php");
    exit();


}

