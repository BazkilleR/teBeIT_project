<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../build.css" />
  <link rel="stylesheet" href="../dist/output.css" />
  <title>Add order</title>
</head>

<body>
  <div class="bg-blue-gradient container m-auto h-screen gap-4 p-6">
    <div class="relative flex h-full w-full flex-col gap-4 overflow-y-auto rounded-2xl bg-white p-6">
      <a href="homeSale.php" class="absolute left-3 top-3 z-50 rounded-full bg-gradient-to-tr from-red-200 to-[#FF99AD] hover:from-pink-500 hover:to-yellow-500"><img src="../src/img/back_icon.png" alt="back_icon" width="50" height="50" /></a>
      <form action="addOrderDb.php" method="post">
        <h1 class="mb-4 text-center text-4xl font-bold text-[#773051]">
          Add order
        </h1>
        <div class="mb-4 flex flex-col gap-2">
          <?php if (isset($_GET['error'])) { ?>
            <p class="w-full rounded-lg border-2 border-red-600 bg-red-300 py-2 text-center font-bold">
              <?php echo $_GET['error']; ?>
            </p>
          <?php } ?>
        </div>
        <div class="mb-4 flex flex-col gap-2">
          <label for="products" class="text-lg">Product</label>
          <select name="product" class="h-10 rounded-lg border border-black p-1 text-lg">
            <option disabled selected value>-</option>
            <option value="lactasoy">Lactasoy</option>
            <option value="mirinda">Miranda</option>
            <option value="seven_up">Seven_up</option>
          </select>
        </div>
        <div class="mb-8 flex flex-col gap-1">
          <label for="amount" class="text-lg">Amount</label>
          <input type="number" name="amount" placeholder="-" class="h-10 rounded-lg border border-black p-[.60rem] text-lg" />
        </div>
        <div class="mb-4 flex flex-col gap-1">
          <input type="reset" value="CLEAR" class="flex items-center justify-center rounded-xl bg-gradient-to-tr from-red-200 to-[#FF99AD] p-4 text-xl font-bold text-[#773051] hover:from-pink-500 hover:to-yellow-500" />
        </div>
        <div class="mb-4 flex flex-col gap-1">
          <input type="submit" value="ORDER" name="submit" class="flex items-center justify-center rounded-xl bg-gradient-to-tr from-red-200 to-[#FF99AD] p-4 text-xl font-bold text-[#773051] hover:from-pink-500 hover:to-yellow-500" />
        </div>
      </form>
    </div>
  </div>
</body>

</html>