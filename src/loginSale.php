<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../dist/output.css" />
  <title>Sale Login</title>
</head>

<body>
  <div class="container m-auto flex h-screen flex-col items-center justify-center p-4">
    <form action="loginDb.php" method="post">
      <h1 class="my-4 text-center">Sale Login</h1>
      <?php if (isset($_GET['error'])) { ?>
        <p class="border border-red-500 bg-red-300">
          <?php echo $_GET['error']; ?>
        </p>
      <?php } ?>
      <div class="mb-4 flex flex-col gap-2">
        <label for="username">Username</label>
        <input type="text" name="username" class="border border-black" />
      </div>
      <div class="mb-4 flex flex-col gap-1">
        <label for="password">Password</label>
        <input type="password" name="password" class="border border-black" />
      </div>
      <div class="mb-4 flex flex-col gap-2">
        <input type="submit" value="Login" name="saleLogin" class="border border-black hover:bg-gray-500" />
      </div>
    </form>
  </div>
</body>

</html>