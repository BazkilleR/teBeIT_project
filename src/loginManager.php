<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../dist/output.css" />
  <title>Manager Login</title>
</head>

<body>
  <div class="bg-blue-gradient container m-auto flex h-screen flex-col items-center justify-center p-6">
    <div class="relative flex h-full w-full flex-col items-center justify-center gap-16 rounded-2xl bg-white p-6">
      <a href="index.html" class="bg-sky-gradient hover:bg-red-gradient absolute left-3 top-3 z-50 rounded-full"><img src="../src/img/back_icon.png" alt="back_icon" width="50" height="50" /></a>
      <form action="loginDb.php" method="post" class="flex w-full flex-col items-center justify-center gap-12">
        <div>
          <h1 class="text-center text-5xl font-bold text-[#04466D]">
            Manager
          </h1>
          <h2 class="text-center text-3xl font-bold text-[#04466D]">Login</h2>
        </div>
        <div class="flex w-full flex-col gap-4">
          <?php if (isset($_GET['error'])) { ?>
            <p class="text-center font-bold text-red-500">
              <?php echo $_GET['error']; ?>
            </p>
          <?php } ?>
          <input type="text" name="username" placeholder="username" class="w-full rounded-lg border border-black p-2 text-xl focus:border-blue-500 focus:outline-none" />
          <input type="password" name="password" placeholder="password" class="w-full rounded-lg border border-black p-2 text-xl focus:border-blue-500 focus:outline-none" />
        </div>
        <input type="submit" value="LOGIN" name="managerLogin" class="bg-sky-gradient hover:bg-red-gradient rounded-xl px-4 py-2 text-center text-xl font-bold text-[#04466D]" />
      </form>
    </div>
  </div>
</body>

</html>