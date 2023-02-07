<?php
    session_start();

    // KONEKSI DATABASE
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbmitraanda";
    
    // MEMBUAT KONEKSI
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
?>