<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "practice");
$query = "SELECT * FROM users";
$result = mysqli_query($connect, $query);

if(empty($_SESSION['username'])){
      header("location: index.php");
    }
else{}

?>

<!DOCTYPE html>
<html>
<head>
	<link href="css/welcome.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Blinker&display=swap" rel="stylesheet">
	<title>Welcome <?php echo ''.$_SESSION['username'].''; ?>!</title>
</head>
<body>
	<img class="background">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div style="height: 4px;"></div>
	<div class="gray">
	</div>
	<br>
	<div class="hover12 column">
		<figure><img class="logo"></figure>
	</div>
	<div class="content">
		<h1 style="font-family: Blinker; color: #f2f2f2;" class="text">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo ''.$_SESSION['username'].''; ?>
		</h1>
	</div>
<br>
<br>
	<div class="box1">
		<div style="margin-left: 15px; margin-top: 5px; max-height: 60px; overflow-y: scroll; overflow-x: hidden; width: 270px; border-color: #d4d4d4; border-style: solid; border-width: 1px; border-radius: 5px;">
			<?php

			echo "";

			?>
		</div>
	</div>
	<br>
	<div class="box2"></div>	
</body>
</html>