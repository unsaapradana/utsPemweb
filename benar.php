<?php
session_start();

$nama = $_SESSION['nama'];
$lives = $_SESSION['lives'];
$score = $_SESSION['score'];

?>

<!DOCTYPE html>
<html lang="en">
<body background="images/02.jpg"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JAWABAN BENAR!</title>

    <!-- Link & Scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container pt-4 text-center">
        <h1>Hello <?php echo $nama ?>, Selamat jawaban anda benar!!!</h1>
        <hr>
        <h1>Lives : <?php echo $lives ?> | Score : <?php echo $score ?></h1>
        <hr>
        <a href="startgame.php" class="btn btn-primary">Soal Selanjutnya</a>
    </div>
</body>

</html>