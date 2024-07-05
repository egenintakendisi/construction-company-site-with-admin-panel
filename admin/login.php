<?php
require "functions.php";
        if(isset($_COOKIE['login'])){
            header("location:admin.php");
        }


        if(isset($_POST['login'])){
            $username = input_control($_POST['username']);
            $password = input_control($_POST['password']);
            authcontrol($username,$password);
        }
?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container">
    <div class="row mt-5">
        <div class="col-2">

        </div>
        <div class="col-8">
        <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Username</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary " name="login">Submit</button>
</form>
        </div>
        <div class="col-2">

        </div>
    </div>
</div>