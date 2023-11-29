<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../dist/output.css">
    <title>Manager Home</title>
</head>

<body>
    <div class="container flex flex-col mx-auto h-screen p-4 bg-gray-400 gap-4">
        <h1 class="text-center text-4xl font-bold">All Order</h1>
        <?php require "managerOrderList.php"; ?>
    </div>
</body>

</html>