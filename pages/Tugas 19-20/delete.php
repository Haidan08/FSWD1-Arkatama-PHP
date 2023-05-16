<?php
$conn = mysqli_connect('localhost','root','','dump-ta_magang-202304021340');
$id = $_GET["id"];
$sid = mysqli_query($conn,"DELETE FROM users WHERE id ='$id'");
header("location:tabel.php");
?>