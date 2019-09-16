<?php

//logout.php

session_start();
$connect = mysqli_connect("localhost", "root", "", "chat");
$sql = "SELECT * FROM login";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		$id = $_SESSION['user_id'];
	}
}

else {}

$query = "UPDATE login SET online='no' WHERE user_id = '$id'";
$statement = $connect->prepare($query);
$statement->execute();

session_destroy();

header('location:login.php');

?>