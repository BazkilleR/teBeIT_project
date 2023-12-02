<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../build.css" />
  <link rel="stylesheet" href="../dist/output.css" />
  <title>Manager Home</title>
</head>

<body>
  <div class="bg-gradient-to-tr from-red-200 to-[#FF99AD] container m-auto h-screen gap-4 p-6">
    <div class="relative flex h-full w-full flex-col gap-4 overflow-y-auto rounded-2xl bg-white p-6">
      <a href="managerLogin.php" class="bg-gradient-to-tr from-red-200 to-[#FF99AD] hover:from-pink-500 hover:to-yellow-500 absolute left-3 top-3 z-50 rounded-full"><img src="../src/img/back_icon.png" alt="back_icon" width="50" height="50" /></a>
      <h1 class="mb-4 text-center text-4xl font-bold text-[#773051]">Orders list</h1>
      <?php require "managerOrderList.php"; ?>
    </div>
  </div>
</body>

</html>