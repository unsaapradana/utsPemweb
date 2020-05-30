<?php
session_start();

if(!isset($_SESSION['sudahlogin'])){
    header('Location: login.php');
}else{
    $nama = $_SESSION['nama'];
    $_SESSION['score'] = 0;
    $_SESSION['lives'] = 5;
}
?>

<!DOCTYPE html>
<html lang="en">
<body background="images/02.jpg"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 

    <!-- Link & Scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container">
        <div class="col-md-12 text-center">
        <h1 class="display-1">Hello <?php echo $nama ?></h1>
        <h1 class="display-5">Selamat datang di Game </h1>
        <hr>
        <a href="startgame.php" style="width:150px; height: 40px;" class="btn btn-primary">Start</a>
        <br>
        <hr>
        <a href="logout.php" class="btn btn-danger">Logout</a>
        <hr>
        <h1>Hall of Fame</h1>
        <br>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                include 'koneksiDB.php';
                $koneksiDB = new koneksiDB();
                $q = mysqli_query($koneksiDB->con, "select * from hall_of_fame order by skor desc limit 10");
                $no = 0;
                while($dt = mysqli_fetch_array($q)){
                    $no += 1;
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>".$dt['nama']."</td>";
                    echo "<td>".$dt['email']."</td>";
                    echo "<td>".$dt['skor']."</td>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>