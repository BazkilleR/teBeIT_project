<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../build.css" />
    <link rel="stylesheet" href="../dist/output.css" />
    <title>product detail</title>
</head>

<body>
    <div class="container m-auto h-screen gap-4 bg-gradient-to-tr from-red-200 to-[#FF99AD] p-6">
        <?php
        require "server.php";

        $id = $_GET["id"];

        $sql = "SELECT * FROM order_list WHERE id=$id";
        $result = $mysqli->query($sql);

        while ($dbarr = $result->fetch_assoc()) {
            $id = $dbarr["id"];
            $product_name = $dbarr["product_name"];
            $amount = $dbarr["amount"];
            $price = $dbarr["price"];
            $sale_name = $dbarr["sale_name"];
            $status = $dbarr["status"];
            echo <<<HTML
                <div class="flex h-full w-full flex-col gap-4 overflow-y-auto rounded-2xl bg-white relative">
                    <a href="homeManager.php" class="absolute top-3 left-3 z-50 rounded-full bg-gradient-to-tr from-red-200 to-[#FF99AD] hover:from-pink-500 hover:to-yellow-500"><img src="../src/img/back_icon.png" alt="back_icon" width="50" height="50"></a>
                    <h1 class="mb-4 mt-4 text-center text-4xl font-bold text-[#773051]">Order #$id</h1>
                    <div class="flex justify-between gap-4 bg-gray-300 p-4">
                        <img src="../src/img/$product_name.png" alt="$product_name" class="object-contain w-[20%] h-20" />
                        <div class="w-full">
                            <p class="text-left capitalize">$product_name</p>
                            <p class="text-right"><span class="opacity-50">x</span> $amount</p>
                            <p class="text-right">฿$price</p>
                        </div>
                    </div>
                    <div class="mx-4 flex items-center justify-between text-lg">
                        <p>From :</p>
                        <p>$sale_name</p>
                    </div>
                    <hr />
                    <div class="mx-4 flex items-center justify-between text-lg">
                        <p>Total price :</p>
                        <p class="font-bold text-blue-500">฿$price</p>
                    </div>
                    <hr />
                    <div class="mx-4 flex items-center justify-between text-lg">
                        <p>status :</p>
                        <form action="confirmation.php?id=$id" method="post" class="h-full flex gap-2">
                            <select name="status" class="border border-black rounded-lg p-1 focus:border-blue-500 focus:outline-none" >
            HTML;
            $options = array("confirm", "unconfirm");
            foreach ($options as $option) {
                if ($status == $option) {
                    echo "<option selected='selected' value='$option'>$option</option>";
                } else {
                    echo "<option value='$option'>$option</option>";
                }
            }
            echo <<<HTML
                            </select>
                            <input type="submit" value="edit" name="edit" class="font-bold rounded-lg bg-gradient-to-tr from-red-200 to-[#FF99AD] h-full px-4 hover:from-pink-500 hover:to-yellow-500">
                        </form>
                    </div>
            HTML;
            if (isset($_GET['success'])) {
                $success_msg = $_GET['success'];
                $changed = $_GET['changed'];
                echo <<<HTML
                    <hr>
                    <div class="mx-4 flex items-center justify-between text-lg">
                        <p class="bg-green-300 border-2 border-green-600 rounded-lg w-full py-2 font-bold text-center">$success_msg<br>$changed</p>
                        
                    </div>
            HTML;
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>