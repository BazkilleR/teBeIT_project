<?php
require "server.php";

$sql = "SELECT * FROM order_list LIMIT 5";
$result = $mysqli->query($sql);

if ($result) {
    while ($dbarr = $result->fetch_assoc()) {
        $id = $dbarr["id"];
        $product_name = $dbarr["product_name"];
        $amount = $dbarr["amount"];
        $price = $dbarr["price"];
        $sale_name = $dbarr["sale_name"];
        $status = $dbarr["status"];
        echo <<<HTML
            <a href="managerOrderDetail.php?id=$id">
                <div class="bg-sky-400 p-4 border border-black hover:bg-sky-600">
                    <h1>order $id</h1>
                    <p>product : $product_name</p>
                    <p>price : $price Baht</p>
                    <p>from : $sale_name</p>
                    <p>status : $status</p>
                </div>
            </a>
        HTML;
    }
}
