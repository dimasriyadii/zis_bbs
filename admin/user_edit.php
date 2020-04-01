
<?php
include "../include/connect.php";
// include "../include/session.php";

$id_users		= $_POST["id_users"];
$nama	 		= $_POST["nama"];
$username		= $_POST["username"];
$password		= $_POST["password"];
$level			= $_POST["level"];

if ($edit = mysqli_query($connect, "UPDATE user SET id_users='$id_users', nama='$nama', username='$username', password='$password', level='$level' WHERE id_users='$id_users'")){
	header("Location: users.php");
	exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
