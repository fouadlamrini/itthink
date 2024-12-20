<?php
include "database/connextion.php";
  if (isset($_POST["login"])){
    // bach jbna data
    $email = $_POST["email"];
    $pass = $_POST["password"];
    // ndiro data fdatabase
   $query = "SELECT email, mot_de_passe from utilisateurs where email = '$email' AND mot_de_passe = '$pass'";
   $apply = $connect -> query($query); // hadi bach tb9 dk lquery wttsifto ldatabase
   $arraydata = $apply -> fetch_all(); // hadi bach data lijbna mn query tji 3La chkl array
   if (count($arraydata) == 1) { //bach tchof wach mot pass s7i7
    
    header("location: dashboardUser.html"); // ila kan s7i7 dih ldashboard
   } else {   
    echo "ghalat";
   }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>
<body>
  <!-- login -->
    

  <div class="flex justify-center items-center py-20 bg-blue-200 h-screen">
          <div class="form bg-gray-800 lg:w-4/12 md:w-8/12 sm:10/12 w-full  px-12 py-16   font-medium shadow-2xl">
          <h1 class="text-white uppercase text-2xl text-center pb-12">Admin Login</h1>
          <form action="login.php" method="POST">
           
            <span class="">
              <input type="email" name="email" id="email" class="rounded outline-none bg-gray-700 p-2 pl-4 mb-10 w-full  "placeholder="Email">
             
            </span>
             <span>
              <input type="password" name="password" id="pass" class="rounded outline-none bg-gray-700 p-2 pl-4 w-full mb-6" placeholder="Password">
              
            </span>
            <input type="submit" class="bg-blue-400 px-6 text-white rounded py-1" name="login" value="Login">
          </form>
        </div>
        </div>
</body>
</html>