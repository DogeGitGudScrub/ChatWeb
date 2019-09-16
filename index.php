<link href="img/favicon.png" rel="icon">
<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "delmonte");
if(isset($_POST["insert"]))
{
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
}

      $aa = $_SESSION['log_name'];

      $query = "SELECT * FROM users WHERE username = '$aa'";
      $result = mysqli_query($connect, $query);
      while($row = mysqli_fetch_array($result))
      {
      $imagea = $row['avatar'];
      }

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>7-Del Mundo | Home</title>
  <link href="img/favicon.png" rel="icon">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Blinker&display=swap" rel="stylesheet">

  <link href="css/freelancer.min.css" rel="stylesheet">
<style type="text/css">
    .sticky {
  position: -webkit-sticky; 
  position: sticky;
  position: fixed;
  bottom: 0;
  right: 0;
  color: white;
  margin-right: 10px;
  margin-bottom: 10px;
  opacity: 0.3;
  background-color: black;
}
</style>
</head>

<body id="page-top">
      <div class="sticky" style="width: 300px; height: 100px;">
        <h6 class="textm">Missing out?</h6>
        <p class="textp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Join TheMailman in <a href="chat/register.php">here</a> to never miss on the latest homework and stuff.</p>
      </div>
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
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="">Home</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="about.php">About</a>
      </div>

         <style type="text/css">
.dropbtn {
  width: 50px;
  height: 50px;
  background-color: #2c3e50;
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
  background-size: cover;
  background-image: url("image/<?php echo $imagea ?>");
  border-radius: 50%;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2c3e50;
}

.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  text-decoration: none;
}

.dropdown-content a:hover {background-color: #ddd}

.show {display:block;}

.hover12 button {
}
.hover12 button {
  opacity: 1;
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
}
.hover12 button:hover {
  opacity: .5;
}

  .buttclass {
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
  width: 100px;
  height: 25px;
  margin-bottom: 5px;
 }

  }
</style>

<script type="text/javascript">
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<style type="text/css">
	.set {
		width: 15px;
		height: 15px;
		margin-left: 5px;
		position: absolute;
	}

		.sett {
		width: 18px;
		height: 18px;
		margin-left: 5px;
		position: absolute;
	}

	.settext {
		position: relative;
	}

	.minecraftssads {
		margin-top: 5px;
		margin-left: 5px;
	}
</style>
    <?php
    if (isset($_SESSION['log_name'])) {
    	echo "<div class=dropdown hover12 column>
  			&nbsp;&nbsp;<button onclick=myFunction() class=dropbtn></button>
  			<div id=myDropdown class=dropdown-content>

    		<h6 class=minecraftssads>".$_SESSION['log_name']."</h6>
    		<hr>

    		<img class='sett' src=img/pencil.png><a href=><p class=fontf>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account Details</p></a>
    		<img class='set' src=img/settings.png><a href=settings.php><p class=fontf>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Settings</p></a>
    		<center><a href=logout.php><button class=buttclass>Log out</button></a></center>
    		<div style=height: 10px;></div>
  			</div>
			</div>";
    } else {
    	echo "<a href=login.php><button class=buttclasse>Log In</button></a>";
    }

    ?>
</div>
  </nav>

  <style type="text/css">
  	.fontf {
  		font-size: 10px;
  	}

  	.buttclasse {
  	background-color: #4CAF50;
  	color: white;
  	cursor: pointer;
  	width: 80px;
  	height: 30px;
  	}

  	.textm {
  		margin-top: 5px;
  		margin-left: 5px;
  	}

  	.textp {
  		margin-left: 5px;
  	}
  </style>

</head>
<body>

  <header class="masthead bg-primary text-white text-center">
  	<img class="masthead-avatar mb-5"  src="img/avatar.png" alt="">
    <div class="container d-flex align-items-center flex-column">
      <h1 class="masthead-heading text-uppercase mb-0">7-Del Mundo</h1>

      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <p class="masthead-subheading font-weight-light mb-0">Best Section in the Universe.</p>

    </div>
  </header>

  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Discoveries, Experiments and Some Other Stuff</h2>

      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/cake.png" alt="">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/circus.png" alt="">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/game.png" alt="">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/safe.png" alt="">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
          </div>
        </div>

      </div>

    </div>
  </section>

  <section class="page-section" id="someshit">
  </section>

  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">Bucandala III,
            <br>Imus, Cavite</p>
        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Meet the Clan</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/groups/361794261168788/">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">About</h4>
          <p class="lead mb-0">Creeper?
            <br>Aw man.....</p>
        </div>

      </div>
    </div>
  </footer>

  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; The Lux Clan</small>
    </div>
  </section>

  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">

                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Anisium</h2>

                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>

                <img class="img-fluid rounded mb-5" src="img/portfolio/cabin.png" alt="">

                <p class="mb-5">7-Del Mundo discovered an element with an atomic number of 119. It was discovered when we had found something hard, something long, something unimaginable, which led to the discovery of Anisium. <a href="">Read More.</a></p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">

                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>

                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>

                <img class="img-fluid rounded mb-5" src="img/portfolio/cake.png" alt="">

                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <img class="img-fluid rounded mb-5" src="img/portfolio/circus.png" alt="">
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Extreme Gaming</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <img class="img-fluid rounded mb-5" src="img/portfolio/game.png" alt="">
                <p class="mb-5">During breaks, Gamers from 7-Del Mundo usually play Minecraft or some other entertaining games.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">

                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>

                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>

                <img class="img-fluid rounded mb-5" src="img/portfolio/safe.png" alt="">

                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam. </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Typer Shark</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <img class="img-fluid rounded mb-5" src="img/portfolio/submarine.png" alt="">
                <p class="mb-5">PPl</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  <script src="js/freelancer.min.js"></script>

</body>

</html>
