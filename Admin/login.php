<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: login.php?error=Lietotājvārds ir obligāts");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Parole ir obligāta");
        exit();
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
        $stmt->bind_param("ss", $uname, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if ($row['username'] === $uname && $row['password'] === $pass) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['user_id'] = $row['user_id'];
                header("Location: home.php");
                exit();
            } else {
                header("Location: login.php?error=Nepareizs lietotājvārds vai parole");
                exit();
            }
        } else {
            header("Location: login.php?error=Nepareizs lietotājvārds vai parole");
            exit();
        }
        $stmt->close();
    }
} else {
    header("Location: login.php");
    exit();
}
