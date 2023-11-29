<?php
session_start();

require "server.php";

if (!isset($_POST["submit"])) {
    header("Location: addOrder.php?error=error #1");
    exit();
}

if (empty($_POST["product"]) || empty($_POST["amount"])) {
    header("Location: addOrder.php?error=error #2");
    exit();
}

$prices = array(
    "lactasoy" => 6,
    "mirinda" => 16,
    "seven_up" => 18
);

$product = $_POST["product"];
$amount = $_POST["amount"];
$calculated_price = $amount * $prices["$product"];
$sale_name = $_SESSION["username"];

$sql = "INSERT INTO order_list VALUES (NULL, '$product', $amount, $calculated_price, '$sale_name', 'unconfirm', NOW())";
$result = $mysqli->query($sql);

if ($result) {
    header("Location: addOrder.php?success=Add order successfully.");
    exit();
} else {
    header("Location: addOrder.php?error=error #3");
    exit();
}

$mysqli->close();
