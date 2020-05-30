<?php
session_start();

$lives = $_SESSION['lives'];
$score = $_SESSION['score'];
$nama = $_SESSION['nama'];

if($lives > 0){
    
    $numb1 = rand(1,20);
    $numb2 = rand(1,20);
    
    $_SESSION['hasil'] = $numb1 + $numb2;

}else{
    header('Location: gameover.php');
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
    <div class="container pt-4 text-center">
        <h1>Hello <?php echo $nama ?>  , Semangat yaa <?php echo $nama ?> You Can Do your Best!!!</h1>
        <h1>Lives : <?php echo $lives ?> | Score : <?php echo $score ?></h1>
        <h2>Berapakah </h2>
        <h2 class="display-4"><?php echo $numb1; echo '+'; echo $numb2 ?></h2>
        <form action="koreksi.php" method="post">
            <input type="text" name="jawaban" class="form-control mb-3" placeholder="Masukkan jawaban anda" autocomplete="off">
            <button type="submit" class="btn btn-primary" name="btnJawab">Jawab</button>
        </form>
    </div>
</body>
</html>