<?php
$connect=mysqli_connect('localhost','root','','bbs_zis');
$result = mysqli_query($connect, "SELECT * FROM user");
?>


<html>
<head>
        <title>test input</title>
</head>

<body
<a href="tambahin.php"> Tambah User Baru </a>

<table width='80%'>

<tr>
    <th>nama</th>
    <th>username</th>
    <th>password</th>
    <th>level</th>
</tr>

<?php
while($user_data = mysqli_fetch_array($result)){

    echo"<tr>";
    echo"<td>" .$user_data['nama']. "</td>";
    echo"<td>" .$user_data['username']. "</td>";
    echo"<td>" .$user_data['password']. "</td>";
    echo"<td>" .$user_data['level']. "</td>";
}
?>

</table>
</body>
</html>