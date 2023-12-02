<?php
session_start();

require "server.php";

// Sale login
if ($_POST["saleLogin"]) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        header("Location: saleLogin.php?error=Username or Password are invalid");
        exit();
    }

    $sql = "SELECT * FROM sale_acc WHERE username='$username' AND password='$password'";
    $result = $mysqli->query($sql);

    if ($result) {
        $dbarr = $result->fetch_assoc();

        if ($dbarr && $username == $dbarr["username"] && $password == $dbarr["password"]) {
            $_SESSION["username"] = $username;
            header("Location: homeSale.php");
            exit();
        } else {
            header("Location: saleLogin.php?error=Username or Password are invalid");
            exit();
        }
    } else {
        header("Location: saleLogin.php?error=Username or Password are invalid");
        exit();
    }
}

// Manager login
if ($_POST["managerLogin"]) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        header("Location: managerLogin.php?error=Username or Password are invalid");
        exit();
    }

    $sql = "SELECT * FROM manager_acc WHERE username='$username' AND password='$password'";
    $result = $mysqli->query($sql);

    if ($result) {
        $dbarr = $result->fetch_assoc();

        if ($dbarr && $username == $dbarr["username"] && $password == $dbarr["password"]) {
            $_SESSION["username"] = $username;
            header("Location: homeManager.php");
            exit();
        } else {
            header("Location: managerLogin.php?error=Username or Password are invalid");
            exit();
        }
    } else {
        header("Location: managerLogin.php?error=Username or Password are invalid");
        exit();
    }
}
