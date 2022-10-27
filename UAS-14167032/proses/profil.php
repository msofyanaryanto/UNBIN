<?php 
    require '../koneksi.php';

    // proses login
    if(!empty($_GET['aksi'] == 'update'))
    {
        $data[] =  htmlspecialchars($_POST["password"]);
        $data[] =  htmlspecialchars($_POST["id_login"]);
        $sql = "UPDATE login SET 
                    password = md5(?) 
                    WHERE username = ?";

        $row = $koneksi->prepare($sql);
        $row->execute($data);
        echo "<script>window.location='../index.php?hal=profil&notif=success';</script>";
    }