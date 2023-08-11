<?php

 $login ="false";
 $showError ="false";
 if($_SERVER["REQUEST_METHOD"]== "POST"){
  include 'partials/_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];



    $sql= "select * from voters where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num= mysqli_num_rows($result);
    if($num==1){
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      header("location: welcome.php");

    }

  else{
    $showError = "Invalid Credentials";
  }
}

 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>LogIn!</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>

    <?php
  //   if($login){
  //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //       <strong>Successfully Registered!</strong> You are logged in!
  //       <button type="button" class="close" date-dismiss="alert" aria-label="close">
  //         <span aria-hidden="true">&times;</span>
  //       </button>
  //       </div>
  //    ';
  //  }
  //
  //  if($showError){
  //    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  //      <strong>Error!</strong> '.$showError.'
  //      <button type="button" class="close" date-dismiss="alert" aria-label="close">
  //        <span aria-hidden="true">&times;</span>
  //      </button>
  //      </div>
  //   ';
  // }
      ?>


   <div class="container">
     <h1 class="text-center">LogIn to our website</h1>


     <form action="/loginSystem/login.php" method="post">

       <div class="form-group">
          <label for="username">username</label>
          <input type="text" class="form-control" id="username" name="username">
       </div>

     <div class="form-group">
     <label for="password">Password</label>
     <input type="password" class="form-control" id="password" name="password">
  </div>

  <button type="submit" class="btn btn-primary">LogIn</button>
  </form>
   </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
