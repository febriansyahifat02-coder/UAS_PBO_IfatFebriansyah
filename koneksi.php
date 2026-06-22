<?php
// koneksi.php

$host = "localhost";
$username = "root"; // Sesuaikan dengan username MySQL Anda
$password = "";     // Sesuaikan dengan password MySQL Anda
$database = "DB_UAS_PBO_TI1C_IfatFebriansyah";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // Mengatur mode error PDO ke Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Mengatur default fetch mode menjadi Object/Associative Array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Koneksi basis data gagal: " . $e->getMessage());
}
?>