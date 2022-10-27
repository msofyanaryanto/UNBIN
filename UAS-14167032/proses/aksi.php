<?php 
    require '../koneksi.php';

    // proses simpan
    if(!empty($_GET['aksi'] == 'simpan'))
    {
        $id =  (int)($_POST["nik"]);
        $data[] = $id;
        $data[] =  htmlspecialchars($_POST["nama"]);
        $data[] =  htmlspecialchars($_POST["kode_departement"]);
        $data[] =  htmlspecialchars($_POST["gender"]);
        $data[] =  htmlspecialchars($_POST["gaji_pokok"]);
        $data[] =  htmlspecialchars($_POST["tunjangan"]);
        $sql = "insert into karyawan values 
                    (?,?,?,?,?,?)";

        $row = $koneksi->prepare($sql);
        $row->execute($data);
        echo "<script>window.location='../index.php?notif=success';</script>";
    }

    // proses simpan
    if(!empty($_GET['aksi'] == 'delete'))
    {
        $id =  (int)($_GET["id"]);
        $data[] = $id;
        $sql = "delete from karyawan where Nik = ?";

        $row = $koneksi->prepare($sql);
        $row->execute($data);
        echo "<script>window.location='../index.php?notif=delete';</script>";
    }

    // proses simpan
    if(!empty($_GET['aksi'] == 'update'))
    {
        $id =  (int)($_POST["nik"]);
        
        $data[] =  htmlspecialchars($_POST["nama"]);
        $data[] =  htmlspecialchars($_POST["kode_departement"]);
        $data[] =  htmlspecialchars($_POST["gender"]);
        $data[] =  htmlspecialchars($_POST["gaji_pokok"]);
        $data[] =  htmlspecialchars($_POST["tunjangan"]);
        $data[] = $id;
        $sql = "update  karyawan set 
                    Nama = ?,
                    Kode_Departement=?,
                    Gender = ?,
                    Gaji_Pokok = ?,
                    Tunjangan = ?
                    where Nik  = ?";

        $row = $koneksi->prepare($sql);
        $row->execute($data);
        echo "<script>window.location='../index.php?notif=update';</script>";
    }

