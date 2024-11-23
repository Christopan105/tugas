<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in || Sign up from</title>
    <!-- css stylesheet -->
    <link rel="stylesheet" href="login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link
  href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css"
  rel="stylesheet"
/>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
  <body>
    <div class="container" id="main">
      <div class="sign-up">
        <form action="" method="post">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="www.facebook.com" target="_blank" class="social">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="mail.google.com" class="social">
              <i class="fab fa-google-plus-g"></i>
            </a>
            <a href="www.linkedin.com" class="social">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <p>or use your email for registration</p>
          <input type="email" name="emailreg" placeholder="email" required />
          <input
            type="password"
            name="passwordreg"
            placeholder="password"
            required />
            <input
            type="password"
            name="repasswordreg"
            placeholder="re-type password"
            required />
          <button type="submit" name="register">Sign Up</button>
        </form>
      </div>
      <div class="sign-in">
        <form action="" method="post">
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="https://www.facebook.com" target="_blank" class="social">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://mail.google.com" target="_blank" class="social">
              <i class="fab fa-google-plus-g"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" class="social"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </div>
          <p>or use your account</p>
          <input type="email" name="email" placeholder="email" required />

          <input
            type="password"
            name="password"
            placeholder="password"
            required />
          <a href="#" class="forgot">Forgot your password?</a>
          <button type="submit" name="login">Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-left">
            <h1>Welcome Back!</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button id="signIn">Sign In</button>
          </div>
          <div class="overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    <!-- js code -->
    <script>
      const signUpButton = document.getElementById("signUp");
      const signInButton = document.getElementById("signIn");
      const main = document.getElementById("main");
      signUpButton.addEventListener("click", () => {
        main.classList.add("right-panel-active");
      });
      signInButton.addEventListener("click", () => {
        main.classList.remove("right-panel-active");
      });
    </script>
  </body>
</html>


<?php

session_start();
if(isset($_SESSION['email'])){
header("location:dashboard.php");
}

require "koneksi.php";
if(isset($_POST['register'])){
$email = $_POST['emailreg'];
$passwordreg = $_POST['passwordreg'];
$repasswordreg = $_POST['repasswordreg'];
if($passwordreg == $repasswordreg){
$query = "INSERT INTO account(id_account, email, password, akses)
VALUES ('','$email',md5('$passwordreg'),'2')";
if (mysqli_query($conn, $query)){
  echo "<script>
  Swal.fire({
    title: 'Pendaftaran Berhasil',
    icon: 'success',
    confirmButtonText: 'OK'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = 'index.php';
    }
  });
  </script>";
}else{
  echo "<script>
    Swal.fire({
      title: 'Pendaftaran Gagal',
      icon: 'Error',
      confirmButtonText: 'OK'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = 'index.php';
      }
    });
    </script>";
  }
  }else{
  echo "<script>
    Swal.fire({
      title: 'Password Tidak Sama',
      icon: 'Error',
      confirmButtonText: 'OK'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = 'index.php';
      }
    });
    </script>";
  }
  }

  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query2 = mysqli_query($conn, "SELECT * from account WHERE email =
    '$email' AND password = '$password'");
    if(mysqli_num_rows($query2) != 0){
    $row = mysqli_fetch_assoc($query2);
    session_start();
    if($row['akses']==1){
    $_SESSION['id'] = $row['id_account'];
    $_SESSION['email'] = $row['email'];
    echo "<script>
    Swal.fire({
      title: 'Login Berhasil!',
      icon: 'success',
      confirmButtonText: 'OK'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = 'Dashboard.php';
      }
    });
    </script>";
    }else if($row['akses']==2){
    $_SESSION['id'] = $row['id_account'];
    $_SESSION['email'] = $row['email'];
    echo "<script>
Swal.fire({
  title: 'Login Berhasil!',
  icon: 'success',
  confirmButtonText: 'OK'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = 'Dashboard.php';
  }
});
</script>";
}
}else{
  echo "<script>
  Swal.fire({
    title: 'Gagal!',
    icon: 'error',
    confirmButtonText: 'OK'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = 'index.php';
    }
  });
  </script>";
}
}
?>