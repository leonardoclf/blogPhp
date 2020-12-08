<?php


// Validações

function emptyPost($title, $body){
    $res = NULL;

    if (empty($title) || empty($body)) {
        $res = true;
    } else {
        $res = false;
    }
    return $res;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";

    // prepare statment - proibir o mysql inject;
    $stmt = mysqli_stmt_init($conn);
    // checagem por error
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registro.php?error=stmtfailed");
        exit();
    }
    // ss = 2 strings
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    // executa
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

function emptyField($name, $email, $username, $pwd, $pwdRepeat){
    $res = NULL;

    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $res = true;
    } else {
        $res = false;
    }
    return $res;
}

function invalidUid($username) {
    $res = NULL;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $res = true;
    } else {
        $res = false;
    }
    return $res;
}

function invalidEmail($email) {
    $res = NULL;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $res = true;
    } else {
        $res = false;
    }
    return $res;
}

function pwdMatch($pwd, $pwdRpt) {
    $res = NULL;
    
    if ($pwd == $pwdRpt) {
        $res = true;
    } else {
        $res = false;
    }
    return $res;
}


// Posts

function createPost($conn, $title, $body) {

    $sql = "INSERT INTO posts (title, body, author) VALUES (?, ?, ?);";
    
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../escrever.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $title, $body, $_SESSION['uName']);
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

function delPost($conn, $pId) {
    $sql = "DELETE FROM posts WHERE idP = ?;";
    
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?pId=null");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "s", $pId);
    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_close($stmt);
    header("location: ../dashboard.php?del=success");
}

function editPost($conn, $pId, $title, $body) {
    $sql = "UPDATE posts SET title = ?, body= ? WHERE idP = ?;";
    
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?pId=null");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sss", $title, $body, $pId);
    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_close($stmt);
    header("location: ../dashboard.php?edit=success");
}



// Users 


function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";

    // prepare statment - proibir o mysql inject;
    $stmt = mysqli_stmt_init($conn);
    // checagem por error
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registro.php?error=stmtfailed");
        exit();
    }
    

    // hashear os pwd;
    $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);


    // ss = x strings
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashpwd);
    // executa
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?register=success");   
}

function loginUser($conn, $username, $pwd) {
    
    // pergunta nos dois lugares;
    $uidExist = uidExists($conn, $username, $username);

    // error handler;
    if ($uidExist === false) {
        header("location: ../login.php?error=erroruid");
        exit();
    }

    // por causa do $rows
    $pwdhash = $uidExist["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdhash);

    if ($checkPwd === false) {
        header("location: ../login.php?error=errorpwd");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION['uName'] = $uidExist['usersName'];
        header("location: ../index.php?login=success");
        exit();
    }
}
