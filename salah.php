<?php
session_start();


$lives = $_SESSION['lives'];
$skor = $_SESSION['score'];
$nama = $_SESSION['nama'];

?>

<!DOCTYPE html>
<html lang="en">
<body background="images/02.jpg"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JAWABAN SALAH!</title>

    <!-- Link & Scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container pt-4 text-center">
        <h1>Hello <?php echo $nama ?>, 
        sayang sekali jawaban anda salah</h1>
        <h1> Tetap semangat!!</h1>
        <hr>
        <h1>Lives : <?php echo $lives ?> | Skor : <?php echo $skor ?></h1>
        <hr>
        <a href="startgame.php" class="btn btn-danger">Soal Selanjutnya</a>
    </div>
</body>

</html>