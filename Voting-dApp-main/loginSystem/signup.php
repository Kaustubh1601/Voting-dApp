<?php

 $showAlert ="false";
 $showError ="false";
 if($_SERVER["REQUEST_METHOD"]== "POST"){
  include 'partials/_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $exists=false;
  if(($password == $cpassword) && $exists == false){
    $sql= "INSERT INTO `voters` ( `username`, `Password`, `Date`) VALUES ( '$username', '$password', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if($result){
      $showAlert = true;
    }
  }
  else{
    $showError = "Passwords do not match";
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

    <title>Sign Up!</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>

    <?php
  //   if($showAlert){
  //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //       <strong>Successfully Registered!</strong> Your account is now created and you can login!
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
     <h1 class="text-center">SignUp to our website</h1>


     <form action="/loginSystem/signup.php" method="post">
       <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name">
       </div>

       <div class="form-group">
          <label for="username">username</label>
          <input type="text" class="form-control" id="username" name="username">
       </div>

  <div class="form-group">
     <label for="exampleInputEmail1">Email</label>
     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
     <label for="exampleInputPassword1">Mobile No.</label>
     <input type="tel" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group">
     <label for="exampleInputPassword1">PAN no.</label>
     <input type="text" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group">
     <label for="exampleInputPassword1">Aadhar No.</label>
     <input type="text" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group">
     <label for="password">Password</label>
     <input type="password" class="form-control" id="password" name="password">
  </div>

  <div class="form-group">
     <label for="cpassword">Confirm Password</label>
     <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div>
  <div class="form-group form-check">
     <input type="checkbox" class="form-check-input" id="exampleCheck1">
     <label class="form-check-label" for="exampleCheck1">T&C</label>
  </div>
  <button type="submit" class="btn btn-primary">SignUp</button>
     <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
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
