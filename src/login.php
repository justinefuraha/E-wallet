<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Wallet System | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50">
    <div class="container mx-10 my-10">
        <nav class="">
            <div class="flex justify-center items-center border-4 border-green-500 p-5 shadow-2xl shadow-green-500/50 mb-10">
                <a href="../index.html" class="flex-1">
                    <h1 class="text-4xl font-bold text-green-500 text-center hover:text-green-800">Home</h1>
                </a>
                <a href="register.php" class="flex-1">
                    <h1 class="text-4xl font-bold text-green-500 text-center hover:text-green-800">Register</h1>
                </a>
                <a href="#" class="flex-1 ">
                    <h1 class="text-4xl font-bold text-green-800 hover:text-green-500 text-center">Login</h1>
                </a>
            </div>
        </nav>
           <h1 class="text-3xl text-green-800 font-bold text-center mb-10">Login Form</h1>
           <form action="" class="">
            <div class="form-control justify-center flex">
                <label for="username" class="text-lg font-bold text-green-800">Username</label>
                <input type="text" name="username" id="username" class="bg-green-100 border-2 border-green-500 shadow-lg shadow-green-500/50 rounded-md mx-5 p-1 text-green-800">
            </div>
            <div class="form-control justify-center flex mt-5">
                <label for="username" class="text-lg font-bold text-green-800">Password</label>
                <input type="password" name="username" id="username" class="bg-green-100 border-2 border-green-500 shadow-lg shadow-green-500/50 rounded-md mx-5 p-1 focus:border-green-800 text-green-800">
            </div>
            <div class="form-control justify-center flex mt-5">
                <input type="submit" value="Submit" class="text-sm font-bold text-gray-200 py-3 px-5 hover:bg-blue-600 bg-blue-500 shadow-lg shadow-blue-500/50 rounded-md">
            </div>
           </form>

    </div>
</body>
</html>