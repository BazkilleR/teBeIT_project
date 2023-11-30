<?php
require "server.php";

$sql = "SELECT * FROM order_list";
$result = $mysqli->query($sql);

if ($result) {
    while ($dbarr = $result->fetch_assoc()) {
        $id = $dbarr["id"];
        $product_name = $dbarr["product_name"];
        $amount = $dbarr["amount"];
        $price = $dbarr["price"];
        $sale_name = $dbarr["sale_name"];
        $date_time = $dbarr["date_time"];

        $status = $dbarr["status"];
        if ($status == "confirm") {
            $statusImg = "../src/img/pass.PNG";
        } else {
            $statusImg = "../src/img/wait.PNG";
        }

        echo <<<HTML
            <a href="managerOrderDetail.php?id=$id">
                <div
                    class="rounded-lg bg-sky-gradient p-4 hover:bg-red-gradient"
                >
                    <div class="flex items-center justify-between">
                    <div class="flex flex-col">
                        <div class="text-2xl font-bold">Order #$id</div>
                        <div class="text-gray-500">$date_time</div>
                        <div>$sale_name</div>
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
