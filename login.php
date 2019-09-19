<!DOCTYPE html>
<html>
<head>    
  <title>7-Del Mundo | Login</title>
  <link href="css/freelancer.min.css" rel="stylesheet">
  <link href="img/favicon.png" rel="icon">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Blinker&display=swap" rel="stylesheet">
  <link href="css/freelancer.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Blinker&display=swap" rel="stylesheet">
  <?php 
  session_start();
  $connect = mysqli_connect("localhost", "root", "", "delmonte");
  if(isset($_POST['log'])){
    $username = mysqli_real_escape_string($connect,$_POST['username']);
    $password = mysqli_real_escape_string($connect,$_POST['password']); 

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result)){

            $_SESSION['log_name'] = $username;
            $_SESSION['log_pw'] = $password;

            echo "<script>alert('You have succesfully logged in.');</script>";
            if($_SESSION['log_name'] != "Admin") {}

      		else { header("location:admin/admin.php"); }
    }
    else {
    echo "<script>alert('Unable to login!');</script>";
    }


/*
    if ($username!="" && $password!="") {
      $sql = "SELECT * FROM users WHERE username='$username', email='$email' and password='$password'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result);

      $count = mysqli_num_rows($result);
      if ($count==1) 

            $_SESSION['user_name'] = $username;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_pw'] = $password;

      {  
        echo "<script>alert('You have succesfully logged in.');window.location.href='welcome.php';</script>";
      }

    }
    */
  }

  ?>
</head>
<style type="text/css">
  /* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password], input[type=email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.password {
  float: right;
  padding-top: 16px;
}

span.passwords {
  float: left;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.password {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>
<body>
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">7-Del Mundo</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="documentation/documentation.php">About</a>
      </div>
    </div>
  </nav>  
  <br>
  <br>
  <br>
  <br>
  <br>
  <form action="<?php htmlspecialchars("PHP_SELF"); ?>" autocomplete="off" method="post">
    <br>
    <div class="container"> 
    <h1 style="font-family: 'Blinker', sans-serif;">Login</h1>
    <p style="font-family: 'Blinker', sans-serif;">Fill in the form to login to your account.</p>
    <hr>

  <div class="container">
    <label for="username" style="font-family: 'Blinker', sans-serif;"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password" style="font-family: 'Blinker', sans-serif;"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" style="font-family: 'Blinker', sans-serif;" name="log">Login</button>
    <label style="font-family: 'Blinker', sans-serif;">
      <input type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <div class="container" style="background-color:#ffffff">
    <a href="index.php"><button type="button" class="cancelbtn" style="font-family: 'Blinker', sans-serif;">Cancel</button></a>
    <span class="password" style="font-family: 'Blinker', sans-serif;"><a href="forgot_password.php">Forgot password?</a></span>
    <br>
  </div>
</form>
</body>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  <script src="js/freelancer.min.js"></script>  
</html>
