<?php
require "server.php";

if ($_POST["edit"]) {
    $id = $_GET["id"];
    $status = $_POST["status"];

    $sql = "UPDATE order_list SET status='$status' WHERE id=$id";
    $result = $mysqli->query($sql);

    if ($result) {
        header("Location: homeManager.php");
        exit();
    }
}
$mysqli->close();
