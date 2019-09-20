<link href="img/favicon.png" rel="icon">

<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "delmonte");
if(isset($_POST["insert"]))
{
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
}
$db = mysqli_connect("localhost", "root", "", "delmonte");
   if(isset($_POST['register'])){

            if($_POST['password'] == $_POST['confirmpassword'])
            {
              $target = "image/".basename($_FILES['image']['name']);
              $avatar_path = $_FILES['image']['name'];

              $username = mysqli_real_escape_string($db, $_POST['username']);
              $email = mysqli_real_escape_string($db, $_POST['email']);
              $password = mysqli_real_escape_string($db, $_POST['password']);

              $sql = "INSERT INTO users (username, email, password, avatar) VALUES ('$username', '$email', '$password', '$avatar_path')" or mysqli_error($db);

              if ($db->query($sql) === TRUE) {
              $result1 = move_uploaded_file($_FILES['image']['tmp_name'], $target);

              $_SESSION['log_name'] = $username;
              $_SESSION['log_email'] = $email;
              $_SESSION['log_pw'] = $password;

              echo "<script>alert('Your account has been registered!');window.location.href='welcome.php';</script>";
              }
              else {
              echo  "Error: " . $sql . "<br>" . $db->error;
              }
            }

            else {
              echo '<script>alert("The two passwords does not match!")</script>';
            }
}            

?>
<!DOCTYPE html>
<html>
<head>
    <title>The Official Website of 7-Del Mundo</title>
      <link href="css/freelancer.min.css" rel="stylesheet">
  <link href="img/favicon.png" rel="icon">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Blinker&display=swap" rel="stylesheet">

  <link href="css/freelancer.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Blinker&display=swap" rel="stylesheet">
</head>
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
  <br>
  <style type="text/css">
    * {box-sizing: border-box}


/* Full-width input fields */
  input[type=text], input[type=password], input[type=email]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 5px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.error {
  width: 92%;
  margin: 0px auto;
  padding: 10px;
  border: 1px solid #a94442;
  color: #a94442;
  background: #f2dede;
  border-radius: 5px;
  text-align: left; 
}
/* Extra styles for the cancel button */
.cancelbtn {
  padding: 10px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
  float: left;
  width: 10%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.alert {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 4px 20px 4px 20px;
  font-size: 13px;
  line-height: 20px;
  margin-bottom: 20px;
  text-shadow: none;
  position: relative;
  background-color: #272e3b;
  color: rgba(255, 255, 255, 0.7);
  border: 1px solid #000;
  box-shadow: 0 0 0 1px #363d49 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert-error {
  color: #f00;
  background-color: #360e10;
  box-shadow: 0 0 0 1px #551e21 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert:empty{
    display: none;
}
.alert-success {
  color: #21ec0c;
  background-color: #15360e;
  box-shadow: 0 0 0 1px #2a551e inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
  </style>

  <form method="post" action="<?php htmlspecialchars("PHP_SELF"); ?>" enctype="multipart/form-data" autocomplete="off" style="border:1px solid #ccc">
  <div class="container">
    <h1 style="font-family: 'Blinker', sans-serif;">Sign Up</h1>
    <p style="font-family: 'Blinker', sans-serif;">Please fill in this form to create an account.</p>
    <hr>

    <label style="font-family: 'Blinker', sans-serif;">Username</label>
    <input type="text" name="username" placeholder="Enter Username" required>

    <label><b style="font-family: 'Blinker', sans-serif;">Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label><b style="font-family: 'Blinker', sans-serif;">Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label><b style="font-family: 'Blinker', sans-serif;">Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="confirmpassword" required>
    <div class="avatar"><label style="font-family: 'Blinker', sans-serif;">Select your avatar: </label>&nbsp;&nbsp;

      <input type='file' name="image" onchange="readURL(this);" class="btn btn- btn-block" /></div>

         <br>
    <label style="font-family: 'Blinker', sans-serif;">
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <br>
    <label style="font-family: 'Blinker', sans-serif;">
      <p>Already a member? <a href="login.php">Login.</a></p>
    </label>
    <p style="font-family: 'Blinker', sans-serif;">By creating an account you agree to our <a href="" class="" data-toggle="modal" data-target="#myModal">Terms & Privacy</a>.</p>
    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
<div class="modal fade show" id="myTC" style="padding-right: 17px; display: block;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title"><img src="img/favicon.png" height="30" width="30">&nbsp;TERMS AND CONDITIONS</h5>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
<div class="container">
      <center><h4>DEL MONTE</h4></center>
    <center><img src="img/favicon.png" class="logo" width="100" height="100" alt=""></center>
<div class="container" align="center">
  <center><h5>TERMS AND CONDITIONS</h5></center>
Terms &amp; Conditions
<br>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10" align="justify">
                  <p class="psize">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The information you have entered are on you since you gave them anyways and 'The Lux Clan™' are not responsible if and when someone hacks into our database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And if you're my classmate, feel free to talk to me if you have any problems with this site and also, don't blame me for your stupidity. I admit, I will feel guilt if and ever our database gets hacked which I highly doubt since this website is never going to boom up.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the event of any conflict or inconsistency, these Terms shall prevail over all other Terms and Conditions to the extent of such conflict or inconsistency. 
 <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You must accept and agree to these Terms before you are able to sign up. By accepting and agreeing to these Terms, you acknowledge and agree that you have successfully registered into our most beloved database. -Cheers! </p>
                                    </div>
                                  <div class="col-md-1">
                                </div>
                              </div>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <a href="index.php"><button type="button" class="cancelbtn" style="font-family: 'Blinker', sans-serif;">Cancel</button></a> 
     <button name="register" type="submit" class="signupbtn" style="font-family: 'Blinker', sans-serif;">Register</button>
    </div>
  </div>
</form>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  <script src="js/freelancer.min.js"></script>
</body>
</html>
