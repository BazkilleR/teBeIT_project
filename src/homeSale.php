<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../dist/output.css" />
  <title>Sale Home</title>
</head>

<body>
  <div class="container m-auto h-screen gap-4 bg-gradient-to-tr from-red-200 to-[#FF99AD] p-6">
    <div class="flex h-full w-full flex-col gap-4 overflow-y-auto rounded-2xl bg-white p-6 relative">
      <a href="loginSale.php" class="absolute top-3 left-3 z-50 rounded-full bg-gradient-to-tr from-red-200 to-[#FF99AD] hover:from-pink-500 hover:to-yellow-500"><img src="../src/img/back_icon.png" alt="back_icon" width="50" height="50"></a>
      <h1 class="mb-4 text-center text-4xl font-bold text-[#773051]">Orders list</h1>
      <?php if (isset($_GET['success'])) { ?>
        <p class="bg-green-300 border-2 border-green-600 rounded-lg w-full py-2 font-bold text-center"><?php echo $_GET['success']; ?></p>
      <?php }
      if (isset($_GET['error'])) { ?>
        <p class="bg-red-300 border-2 border-red-600 rounded-lg w-full py-2 font-bold text-center"><?php echo $_GET['error']; ?></p>
      <?php }
      require "saleOrderList.php"; ?>
      <a href="addOrder.php" class="flex items-center justify-center rounded-xl bg-red-200 p-4 hover:bg-red-gradient"><img src="../src/img/plus.png" alt="plus.png" /></a>
    </div>
  </div>
</body>

</html>