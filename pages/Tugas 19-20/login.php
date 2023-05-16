<?php
session_start();
$conn = mysqli_connect('localhost','root','','dump-ta_magang-202304021340');
if(isset($_POST["submit"])){
    $username = $_POST['USER'];
    $pw = $_POST['PW'];

    $query = "SELECT * FROM users WHERE name = '$username' AND password = '$pw'";
    $sql = mysqli_query($conn, $query);
    if(mysqli_num_rows($sql) > 0 ){
        $array = mysqli_fetch_array($sql);
        $uname = $array['name'];
        $pass = $array['password'];
        $_SESSION['USER'] = $uname;
        header("location: tabel.php");
    }else{
        header("location: login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h1><b>Login</b></h1>
    <form method ="post" action="" >
        <input class="form-control" type="text" name="USER" id="USER" placeholder="Username" required>
        <br>
        <br>
        <input class="form-control" type="password" name="PW" id="PW" placeholder="Password" required>
        <br>
        <br>
         <button class="btn btn-success" type="submit" name="submit">Login</button>
    </form>
</body>
</html>