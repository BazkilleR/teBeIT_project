<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../dist/output.css" />
  <title>Add order</title>
</head>

<body>
  <div class="container m-auto h-screen gap-4 bg-blue-gradient p-6">
    <div class="flex h-full w-full flex-col gap-4 overflow-y-auto rounded-2xl bg-white p-6 relative">
      <a href="homeSale.php" class="absolute top-3 left-3 z-50 rounded-full bg-sky-gradient hover:bg-red-gradient"><img src="../src/img/back_icon.png" alt="back_icon" width="50" height="50"></a>
      <form action="addOrderDb.php" method="post">
        <h1 class="mb-4 text-center text-4xl">Add order</h1>
        <div class="mb-4 gap-2 flex flex-col">
          <?php if (isset($_GET['error'])) { ?>
            <p class="bg-red-300 border-2 border-red-600 rounded-lg w-full py-2 font-bold text-center"><?php echo $_GET['error']; ?></p>
          <?php } ?>
        </div>
        <div class="mb-4 gap-2 flex flex-col">
          <label for="products" class="text-lg">Product</label>
          <select name="product" class="border border-black rounded-lg h-10 text-lg p-1 focus:border-blue-500 focus:outline-none">
            <option disabled selected value>-</option>
            <option value="lactasoy">Lactasoy</option>
            <option value="mirinda">Miranda</option>
            <option value="seven_up">Seven_up</option>
          </select>
        </div>
        <div class="mb-8 flex flex-col gap-1">
          <label for="amount" class="text-lg">Amount</label>
          <input type="number" name="amount" placeholder="-" class="border border-black rounded-lg h-10 text-lg p-[.60rem] focus:border-blue-500 focus:outline-none" />
        </div>
        <div class="mb-4 flex flex-col gap-1">
          <input type="reset" value="CLEAR" class="font-bold flex items-center justify-center rounded-xl bg-sky-gradient p-4 hover:bg-red-gradient" />
        </div>
        <div class="mb-4 flex flex-col gap-1">
          <input type="submit" value="ORDER" name="submit" class="font-bold flex items-center justify-center rounded-xl bg-sky-gradient p-4 hover:bg-red-gradient" />
        </div>
      </form>
    </div>
  </div>
</body>

</html>