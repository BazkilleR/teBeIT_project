<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../dist/output.css" />
  <title>Add order</title>
</head>

<body>
  <div class="container mx-auto p-4">
    <div class="m-auto flex h-screen flex-col rounded-xl border bg-sky-300 p-4">
      <form action="addOrderDb.php" method="post">
        <h1 class="mb-4 text-center text-4xl">Order</h1>
        <?php if (isset($_GET['success'])) { ?>
          <p class="border border-green-500 bg-green-300">
            <?php echo $_GET['success']; ?>
          </p>
        <?php } ?>
        <?php if (isset($_GET['error'])) { ?>
          <p class="border border-red-500 bg-red-300">
            <?php echo $_GET['error']; ?>
          </p>
        <?php } ?>
        <div class="mb-4 gap-2">
          <label for="products">Product :</label>
          <select name="product" class="border border-black">
            <option disabled selected value>-</option>
            <option value="lactasoy">Lactasoy</option>
            <option value="mirinda">Miranda</option>
            <option value="seven_up">Seven_up</option>
          </select>
        </div>
        <div class="mb-4 flex flex-col gap-1">
          <label for="amount">Amount</label>
          <input type="number" name="amount" class="border border-black" />
        </div>
        <div class="mb-4 flex flex-col gap-1">
          <p>Total price : <span class="text-right">xx</span> Baht</p>
        </div>
        <div class="mb-4 flex flex-col gap-1">
          <input type="reset" value="clear" class="border border-black bg-red-400 px-8 py-4 hover:bg-red-300" />
        </div>
        <div class="mb-4 flex flex-col gap-1">
          <input type="submit" value="order" name="submit" class="border border-black bg-sky-500 px-8 py-4 hover:bg-gray-400" />
        </div>
      </form>
    </div>
  </div>
</body>

</html>