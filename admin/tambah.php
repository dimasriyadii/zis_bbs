<?php
$connect=mysqli_connect('localhost','root','','bbs_zis');

    $nama = $_POST ['nama'];
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $level = $_POST ['level'];
    echo "$nama<br></br>";
    echo "$username<br></br>";
    echo "$password<br></br>";
    echo "$level<br></br>";
    $result = mysqli_query($connect, "INSERT INTO user(nama,username,password,level) values ('$nama','$username','$password','$level')");

    
?>

<html>
<a href="form_input.php"> link </a>
</html>
