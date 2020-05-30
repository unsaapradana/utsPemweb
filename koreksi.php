<?php
session_start();

$hasil = $_SESSION['hasil'];
$jawaban = $_POST['jawaban'];

if(isset($_POST['btnJawab'])){
    if($jawaban == $hasil){
        $_SESSION['score'] = $_SESSION['score'] + 10;
        header('Location: benar.php');
    }else{
        $_SESSION['score'] = $_SESSION['score'] - 2;
        $_SESSION['lives'] = $_SESSION['lives'] - 1;
        header('Location: salah.php');
    }
}

?>