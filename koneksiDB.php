<?php

class koneksiDB{
    var $con;

    function __construct()
    {
        $this->con = mysqli_connect('localhost', 'root', '', 'utsamed');
    }

    function masukkanData($n, $e, $s)
    {
        $masuk = mysqli_query($this->con, "insert into hall_of_fame values(NULL, '$n', '$e', '$s')");

        if (!$masuk){
            echo "ERROR : " . mysqli_error($this->con);
        }
    }
}