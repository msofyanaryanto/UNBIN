<?php
    $title_project = 'UAS - 14167032 - M Sopian A';
    // konfigurasi db
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'pw2pagi';
    try {
        $koneksi = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        return 'Connection failed: ' . $e->getMessage();
    }

?>