<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../dist/output.css" />
  <title>Sale Login</title>
</head>

<body>
  <div class="container m-auto flex h-screen flex-col items-center justify-center bg-blue-gradient p-6">
    <div class="flex h-full w-full flex-col items-center justify-center gap-16 rounded-2xl bg-white p-6 relative">
      <a href="index.html" class="absolute top-3 left-3 z-50 rounded-full bg-sky-gradient hover:bg-red-gradient"><img src="../src/img/back_icon.png" alt="back_icon" width="50" height="50"></a>
      <form action="loginDb.php" method="post" class="flex w-full flex-col items-center justify-center gap-12">
        <div>
          <h1 class="text-center text-5xl font-bold text-[#04466D]">Sales</h1>
          <h2 class="text-center text-3xl font-bold text-[#04466D]">Login</h2>
        </div>
        <div class="flex w-full flex-col gap-4">
          <?php if (isset($_GET['error'])) { ?>
            <p class="text-red-500 font-bold text-center"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          <input type="text" name="username" placeholder="username" class="w-full rounded-lg border border-black p-2 text-xl focus:border-blue-500 focus:outline-none" />
          <input type="password" name="password" placeholder="password" class="w-full rounded-lg border border-black p-2 text-xl focus:border-blue-500 focus:outline-none" />
        </div>
        <input type="submit" value="LOGIN" name="saleLogin" class="rounded-xl bg-sky-gradient px-4 py-2 text-center text-xl font-bold text-[#04466D] hover:from-pink-500 hover:to-yellow-500" />
      </form>
    </div>
  </div>
</body>

</html>