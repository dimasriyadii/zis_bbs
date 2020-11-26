<html>
<head>
<title>Tambahin</title>
</head>
<?php
$connect=mysqli_connect('localhost','root','','bbs_zis');
?>

<form action="tambah.php" method="post" name='form1'>
<table width="25%" >
<tr>
    <td>Nama</td>
    <td><input type="text"  name="nama"><td>
</tr>

<tr>
    <td>Username</td>
    <td><input type="text"  name="username"><td>
</tr>

<tr>
    <td>Password</td>
    <td><input type="password"  name="password"><td>
</tr>

<tr>
    <td>Level</td>
    <td><input type="text"  name="level"><td>
</tr>

<input type="submit" value=rekam>

<?php



// if(isset($_POST['Submit'])) {
//     $nama = $_POST ['nama'];
//     $username = $_POST ['username'];
//     $password = $_POST ['password'];
//     $level = $_POST ['level'];

//     $result = mysqli_query($connect, "INSERT INTO user(nama,username,password,level) values ('$nama','$username','$password','$level')");

//     echo "pengguna telah ditambahkan <a href='index.php'> View Users>";

// }
?>
</body>
</html>