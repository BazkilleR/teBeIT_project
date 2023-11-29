<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product detail</title>
</head>

<body>
    <div class="container flex flex-col mx-auto h-screen p-4 bg-gray-400 gap-4">
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
                <div class="bg-sky-400 p-4 border border-black hover:bg-sky-600">
                    <h1>order $id</h1>
                    <p>product : $product_name</p>
                    <p>price : $price Baht</p>
                    <p>from : $sale_name</p>
                    <p>status :</p>
                    <form action="confirmation.php?id=$id" method="post">
                        <select name="status" class="border border-black" >
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
                        <input type="submit" value="edit" name="edit">
                    </form>
                </div>
            HTML;
        }
        ?>
    </div>
</body>

</html>