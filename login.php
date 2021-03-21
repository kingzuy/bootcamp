<?php
//cek session
session_start();
if (isset($_SESSION['login'])) {
  echo "<script>alert('anda telah login')</script>";
  echo "<script>window.location.href='home.php'</script>";
}else{
  //belom login
}


// cek adakah req post
if(isset($_POST['email'])){
  //jalankan kode ini
  $email = $_POST['email'];
  $password = $_POST['password'];
  if ($email == "paradox@gmail.com"){
    //lanjut
    if ($password == "12345"){
      $_SESSION['login'] = "ok";
      echo "<script>alert('berhasil login sebagai $email')</script>";
    }else{
      echo "<script>alert('password salah')</script>";
    }
  }
  elseif ($email == "babe@gmail.com"){
      //lanjut
    if ($password == "54321"){
      $_SESSION['login'] = "ok";
      echo "<script>alert('berhasil login sebagai $email')</script>";
    }else{
      echo "<script>alert('password salah')</script>";
    }
  }
  else{
    //gagal
    echo "<script>alert('email salah!')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login Form</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .label-email-password{
        margin-top: 50px;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/floating-labels/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" method="POST">
  <div class="text-center mb-4">
    <img class="mb-4" src="https://cdn.dribbble.com/users/748803/screenshots/4939890/musaba_technopark_fix.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login Form</h1>
    <p>Halaman login musaba technopark</p>
  </div>
<div class="label-email-password">
  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
    <label for="inputEmail">Email address</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
    <label for="inputPassword">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
</div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2020</p>
</form>
</body>
</html>