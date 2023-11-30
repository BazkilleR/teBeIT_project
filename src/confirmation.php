<?php
session_start();

require "server.php";

if ($_POST["edit"]) {
    $id = $_GET["id"];
    $status = $_POST["status"];
    $confirmBy = $_SESSION["username"];

    $sql = "UPDATE order_list SET status='$status', confirmBy='$confirmBy' WHERE id=$id";
    $result = $mysqli->query($sql);

    if ($result) {
        header("Location: managerOrderDetail.php?id=$id&success=Change status succesfully.&changed=Status now : $status");
        exit();
    } else {
        header("Location: managerOrderDetail.php?error=Change status failure.");
        exit();
    }
}
$mysqli->close();
