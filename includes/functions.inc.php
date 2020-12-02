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

function readPosts($conn) {
    $sql = "SELECT * FROM posts";

    // prepare statment - proibir o mysql inject;
    $stmt = mysqli_stmt_init($conn);
    // checagem por error
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    
    // executa
    mysqli_stmt_execute($stmt);
    
    $resData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_all($resData)) {
        return $row;
    } else {
        $res = false;
        return $res;
    }
    mysqli_stmt_close($stmt);
}

function readOnePost($conn, $pId) {
    $sql = "SELECT * FROM posts WHERE idP = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?pId=null");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $pId);
    mysqli_stmt_execute($stmt);
    
    $resData = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($resData)) {
        return $row;
    } else {
        $res = false;
        return $res;
    }

    mysqli_stmt_close($stmt);


}