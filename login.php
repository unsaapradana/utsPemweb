<?php
session_start();

if(isset($_POST['btnLogin']))
{
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['sudahlogin'] = 1;
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Masuk Ke Game</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/background.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body background="images/01.jpg"> 
<div class="header bg">
    <div class="container">
    <header class="col-xs-12 ">
        <h1>Hi Selamat Datang , Silahkan Isi Form Dibawah</h1>
        <br>
        <br>
        <form action="" method="post">
            <input type="text" style="width:700px;height: 40px; border:2px dotted #f30 ; font-size: 16px;" class="form-control mb-4" name="nama" required placeholder="Silahkan Masukkan Nama Anda">
            <br>
            <input type="email" style="width:700px; height: 40px; border:2px dotted #f30; font-size: 16px;" class="form-control mb-4" name="email" required placeholder="Silahkan Masukkan Email Anda">
            <br>
            <button type="submit" class="btn btn-primary" name="btnLogin"><h2>Submit</h2></button>
        </form>
<br>

<header class="col-xs-12 text-center">
    <ul class="time">

    <li>
    <span class="hours"></span><br /> Hours
    </li>
    <li>
    <span class="minutes"></span><br />Minutes
    </li>
    <li>
    <span class="seconds"></span><br />Seconds
    </li>
    </ul>
    </div>
    </header>
    </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="down">
                    <a href="#about" class="smooth"><i class="fa fa-angle-down fa-3x"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

</html>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">             
                <div class="copy">Copyright&copy;2020 <a href="https://www.instagram.com/aapradana/" target="_blank">AAPRADANA</a></div>
            </div>          
        </div>
    </div>
</div>



    <!-- JS
    ================================================== -->
    
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/scroll.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.countdown.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/countdown.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/supersized.3.2.7.js" charset="utf-8"></script>
    
    <script type="text/javascript" src="js/form.js" charset="utf-8"></script>

    <!-- End Document
    ================================================== -->

</body>
</html>