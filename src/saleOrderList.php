<?php
session_start();
require "server.php";

$username = $_SESSION["username"];

$sql = "SELECT * FROM order_list WHERE sale_name='$username' LIMIT 5";
$result = $mysqli->query($sql);

if ($result) {
    while ($dbarr = $result->fetch_assoc()) {
        $id = $dbarr["id"];
        $product_name = $dbarr["product_name"];
        $amount = $dbarr["amount"];
        $price = $dbarr["price"];
        $sale_name = $dbarr["sale_name"];

        $status = $dbarr["status"];
        if ($status == "confirm") {
            $statusImg = "../src/img/pass.PNG";
        } else {
            $statusImg = "../src/img/wait.PNG";
        }

        echo <<<HTML
            <a href="saleOrderDetail.php?id=$id">
                <div
                    class="rounded-lg bg-gradient-to-tr from-blue-100 to-[#20A3BF] p-4 hover:from-pink-500 hover:to-yellow-500"
                >
                    <div class="flex items-center justify-between">
                    <div class="flex flex-col">
                        <div class="text-2xl font-bold">Order #$id</div>
                        <div>Date : 18/5/2549</div>
                        <div>From : $sale_name</div>
                    </div>
                    <div class="">
                        <img
                        src="$statusImg"
                        width="75"
                        height="75"
                        />
                    </div>
                    </div>
                </div>
            </a>
        HTML;
    }
}
