<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Wallet System | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-green-50">
    <div class="container mx-10 my-10">
        <div class="flex justify-center items-center">
            <h1 class="text-4xl text-green-800 font-bold">Dashboard</h1>
        </div>
        <div class=" mx-40 justify-center items-center">
            <div class="mt-10 justify-center items-center p-10 bg-green-300 shadow-2xl shadow-green-500/50 rounded-2xl">
                <h1 class="text-4xl text-center text-green-800">Balance</h1>
                <p class="text-2xl text-center text-green-900 font-thin">30,000 RWF</p>
            </div>
            
        </div>
        <div class="flex justify-center items-center mt-10">
            <form action="#" method="post">
                <H1 class="text-2xl text-green-800 font-bold ">Send Form</H1>
                <p class="text-green-800 mb-5">Please enter the receiver's username to send them money from your balance</p>
              <table class="table-auto">
                <tr>
                    <td> <p class="text-xl text-green-800" >Username: </p></td>
                    <td><input type="text" name="amount" id="amount" class="text-xl text-green-800 font-thin border-2 border-green-500 bg-green-100 rounded-md"></td>
                </tr>
                <tr>
                    <td><p class="text-xl text-green-800 mt-5">Amount: </p></td>
                    <td> <input type="number" name="amount" id="amount" class="text-xl text-green-800 font-thin border-2 border-green-500 bg-green-100 rounded-md mt-5"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" value="Send" class="bg-indigo-500 shadow-xl shadow-indigo-500/50 text-lg py-2 px-4 rounded-xl mt-5 text-gray-200 hover:bg-indigo-600"></td>
                        </center>
                </tr>
              </table>
            </form>
        </div>
        <a href="" class="text-red-700 underline hover:text-red-500">Logout</a>
    </div>
  </body>
</html>
