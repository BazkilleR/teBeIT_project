<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../dist/output.css" />
    <title>Manager Home</title>
</head>

<body>
    <div class="container m-auto h-screen gap-4 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-100 to-[#004AAD] p-6">
        <div class="flex h-full w-full flex-col gap-4 overflow-y-auto rounded-2xl bg-white p-6">
            <h1 class="mb-4 text-center text-4xl font-bold">Orders list</h1>
            <?php require "managerOrderList.php"; ?>
        </div>
    </div>
</body>

</html>