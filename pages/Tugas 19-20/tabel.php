<?php
 $conn = mysqli_connect('localhost','root','','dump-ta_magang-202304021340');
 session_start();
 if (isset($_SESSION["USER"]) == ""){
     header("Location:login.php");
     die;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User/Pengguna</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<h1>Tabel USER/Pengguna</h1>
<p><b>USER/Pengguna : <?php echo $_SESSION["USER"]?></p>
<a class="btn btn-danger" href="logout.php">Log Out</a>
<br>
<br>
<table class="table">
    <form action="">
                <a class="btn btn-info" href="input.php">Tambah Pengguna</a>
                <th>
                    <tr  class="table-dark">
                        <th>#</th>
                        <th>Aksi</th>
                        <th>Name</th>
                        <th>Avatar</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        
                        
                    </tr>
                    <?php 
                    $query = "SELECT * FROM users";
                    $Data = mysqli_query($conn,$query);
                    $no=1;
                    while ($tampil = mysqli_fetch_array($Data)){
                        echo "
                        <tr>
                            <th>$no</th>
                            <th>
                                <a class='btn btn-primary' href=''?id=>Detail</a>
                                <a class='btn btn-warning' href='edit.php?id=$tampil[id]'>Edit</a>
                                <a class='btn btn-danger' href='delete.php?id=$tampil[id]'>Hapus</a>
                            </th>
                            <th>$tampil[name]</th>
                            <th><img src='image/$tampil[avatar]' alt='$tampil[avatar]' width='50' height='30'></th>
                            <th>$tampil[email]</th>
                            <th>$tampil[phone]</th>
                            <th>$tampil[role]</th>
                        </tr>

                        ";

                        $no++;
                    }
                    ?>
            </form>
        </table>
    
</body>
</html>