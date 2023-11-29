<?php
require "server.php";

if (!isset($_POST["delete"])) {
    header("Location: homeSale.php?error=Can't delete order.");
    exit();
}

$id = $_GET["id"];

$sql = "DELETE FROM order_list WHERE id=$id";
$result = $mysqli->query($sql);

if ($result) {
    header("Location: homeSale.php?success=Delete order succesfully.");
    exit();
} else {
    header("Location: homeSale.php?error=Can't delete order.");
    exit();
}
