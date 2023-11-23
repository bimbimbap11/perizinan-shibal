<?php
    
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "stayy";
    
    $koneksi = mysqli_connect($server, $user, $password);
    $db = mysqli_select_db($koneksi, $database);
    
?>