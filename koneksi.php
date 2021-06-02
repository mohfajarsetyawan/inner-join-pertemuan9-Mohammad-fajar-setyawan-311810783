<?php

$host ="localhost";
$username ="root";
$password ="";
$database = "mohammadfajar_311810783";

$sekarang =date("d-m-Y H:i:s");
$tersambung =mysqli_connect($host,$username,$password,$database);

if(mysqli_connect_error($tersambung)){
    echo "gagal tersambung ke database".mysqli_connect_error();
}

?>