<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "practice");

if($_SESSION['username'] == "")
{
	echo "<script>window.location.href='login.php'</script>";
}

else 
{
}

if(isset($_POST['update']))
{
	$user = mysqli_real_escape_string($connect, $_SESSION['username']);
	$bio = mysqli_real_escape_string($connect, $_POST['bio']);

	$sql1 = "UPDATE bio SET username='$user', bio='$bio' WHERE username = '$user'";
    mysqli_query($connect, $sql1);
	echo "<script>alert('Your bio has been updated!');window.location.href='welcome.php';</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?php htmlspecialchars("PHP_SELF")?>">
		<textarea placeholder="Text..." name="bio"></textarea>
		<button name="update" type="submit">Submit</button>
	</form>
</body>
</html>