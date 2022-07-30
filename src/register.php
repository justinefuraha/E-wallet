<?php
include_once("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Wallet System | Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50">
    <div class="container mx-10 my-10">
        <nav class="">
            <div class="flex justify-center items-center border-4 border-green-500 p-5 shadow-2xl shadow-green-500/50 mb-10">
                <a href="../index.html" class="flex-1">
                    <h1 class="text-4xl font-bold text-green-500 text-center hover:text-green-800">Home</h1>
                </a>
                <a href="#" class="flex-1">
                    <h1 class="text-4xl font-bold text-green-800 text-center hover:text-green-500">Register</h1>
                </a>
                <a href="login.php" class="flex-1 ">
                    <h1 class="text-4xl font-bold text-green-500 hover:text-green-800 text-center">Login</h1>
                </a>
            </div>
        </nav>
           <h1 class="text-3xl text-green-800 font-bold text-center mb-10">Register Form</h1>
           <form action="" method="POST">
            <table class="justify-center flex " gap>  
                    <tr>
                        <td><label for="name" class="text-lg font-bold text-green-800">Full name</label></td>
                        <td><input type="text" name="name" id="name" class="bg-green-100 border-2 border-green-500 shadow-lg shadow-green-500/50 rounded-md mx-5 p-1 text-green-800 mb-2"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email" class="text-lg font-bold text-green-800">E-mail</label>
                        </td>
                        <td>
                            <input type="text" name="email" id="email" class="bg-green-100 border-2 border-green-500 shadow-lg shadow-green-500/50 rounded-md mx-5 p-1 text-green-800 mb-2">
                        </td>
                    </tr>
                    <tr>
                        <td> <label for="username" class="text-lg font-bold text-green-800">Username</label></td>
                        <td> <input type="text" name="username" id="username" class="bg-green-100 border-2 border-green-500 shadow-lg shadow-green-500/50 rounded-md mx-5 p-1 text-green-800 mb-2"></td>
                    </tr>
                    <tr>
                        <td><label for="password" class="text-lg font-bold text-green-800">Password</label></td>
                        <td><input type="password" name="password" id="password" class="bg-green-100 border-2 border-green-500 shadow-lg shadow-green-500/50 rounded-md mx-5 p-1 focus:border-green-800 text-green-800"></td>
                    </tr>
            </table>
            
            <div class="form-control justify-center flex mt-5">
                <input type="submit" value="Submit" name="submit" class="text-sm font-bold text-gray-200 py-3 px-5 hover:bg-blue-600 bg-blue-500 shadow-lg shadow-blue-500/50 rounded-md">
            </div>
           </form>

    </div>
</body>
</html>
<?php
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
if(isset($_POST['submit'])){
    try {
        $sql = "INSERT INTO users (name, username, email, password)
        VALUES ('$name','$username','$email','$password')";
        // use exec() because no results are returned
        $sql1="INSERT INTO balance (username,balance) VALUES('$username','1000')";
        $conn->exec($sql);
        $conn->exec($sql1);
        echo "<script>alert('New record created successfully');</script>";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      $conn = null;
}


?>
