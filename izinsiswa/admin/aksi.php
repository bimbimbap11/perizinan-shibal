<?php
include "../koneksi.php";
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM user WHERE user_pg = '$username' AND password_pg = '$password'";
    $sql_eksekusi = mysqli_query($koneksi, $sql);

    if ($sql_eksekusi) {
        if (mysqli_num_rows($sql_eksekusi) == 1) {
            
            $_SESSION['username'] = $username;

            header("location: ../dashboard.php");
            exit();
        } else {
            echo "Username atau password salah.";
        }
    } else {
        echo "Error dalam eksekusi SQL.";
    }
}

?>
