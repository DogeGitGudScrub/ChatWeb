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

$query ="SELECT * FROM practice";  
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_assoc($result))  
{  
    $id = $row["id"];
}

$usernem = mysqli_real_escape_string($connect, $_SESSION['username']);
$con=mysqli_connect("localhost","root","","practice");
$check="SELECT * FROM bio WHERE username = '$usernem'";
$rs = mysqli_query($con,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1) {
    echo "<script>window.location.href='updatebio.php'</script>";
}


if(isset($_POST['bioup']))
{
	$user = mysqli_real_escape_string($connect, $_SESSION['username']);
	$bio = mysqli_real_escape_string($connect, $_POST['bio']);

	$sql = "INSERT INTO bio (username, bio) VALUES ('$user', '$bio')";
	if($connect->query($sql) === TRUE)
	{
		echo "<script>alert('Your bio has been updated!');window.location.href='welcome.php';</script>";
	}

	else
	{
		echo "<script>alert('Something went wrong :/')</script>";
	}
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
		<button name="bioup" type="submit">Submit</button>
	</form>
</body>
</html>