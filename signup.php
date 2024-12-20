<?php
include "database/connextion.php";
  if (isset($_POST["signUp"])){
    // bach jbna data
    $name = $_POST["nomComplet"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $phone = $_POST["phone"];
    // ndiro data fdatabase
   $query = "INSERT INTO utilisateurs(nom_utilisateur, mot_de_passe, email, phone, Role) values ('$name', '$pass', '$email', '$phone', 'user')";
   $apply = $connect -> query($query);

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
  <!-- sign up -->
    

  <div class="flex justify-center items-center py-20 bg-blue-200 h-screen">
          <div class="form bg-gray-800 lg:w-4/12 md:w-8/12 sm:10/12 w-full  px-12 py-16   font-medium shadow-2xl">
          <h1 class="text-white uppercase text-2xl text-center pb-12">Admin signUp</h1>
          <form action="signup.php" method="POST">
            <span class="">
              <input type="text" name="nomComplet" id="nom" class="rounded outline-none bg-gray-700 p-2 pl-4 mb-10 w-full  "placeholder="nom">
             
            </span>
            <span class="">
              <input type="text" name="phone" id="phone" class="rounded outline-none bg-gray-700 p-2 pl-4 mb-10 w-full  "placeholder="nom">
             
            </span>
            <span class="">
              <input type="email" name="email" id="email" class="rounded outline-none bg-gray-700 p-2 pl-4 mb-10 w-full  "placeholder="Email">
             
            </span>
             <span>
              <input type="password" name="password" id="pass" class="rounded outline-none bg-gray-700 p-2 pl-4 w-full mb-6" placeholder="Password">
              
            </span>
            <input type="submit" class="bg-blue-400 px-6 text-white rounded py-1" name="signUp" value="Sign Up">
          </form>
        </div>
        </div>
</body>
</html>