<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../dist/output.css" />
    <title>Manager Login</title>
</head>

<body>
    <div class="container m-auto flex h-screen flex-col items-center justify-center bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-100 to-[#004AAD] p-6">
        <div class="flex h-full w-full flex-col items-center justify-center gap-16 rounded-2xl bg-white p-6">
            <form action="loginDb.php" method="post" class="flex w-full flex-col items-center justify-center gap-12">
                <div>
                    <h1 class="text-center text-5xl font-bold text-[#04466D]">Manager</h1>
                    <h2 class="text-center text-3xl font-bold text-[#04466D]">Login</h2>
                </div>
                <div class="flex w-full flex-col gap-4">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="text-red-500 font-bold text-center"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <input type="text" name="username" placeholder="username" class="w-full rounded-lg border border-black p-2 text-xl focus:border-blue-500 focus:outline-none" />
                    <input type="password" name="password" placeholder="password" class="w-full rounded-lg border border-black p-2 text-xl focus:border-blue-500 focus:outline-none" />
                </div>
                <input type="submit" value="LOGIN" name="managerLogin" class="rounded-xl bg-gradient-to-tr from-blue-100 to-[#20A3BF] px-4 py-2 text-center text-xl font-bold text-[#04466D] hover:from-pink-500 hover:to-yellow-500" />
            </form>
        </div>
    </div>
</body>

</html>