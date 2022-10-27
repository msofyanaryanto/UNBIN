<?php
$sql = "SELECT * FROM karyawan";
    $row = $koneksi->prepare($sql);
    $row->execute();
    $hasil = $row->fetchAll(PDO::FETCH_OBJ);

    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $sqls = "SELECT * FROM karyawan where Nik = ? ";
        $row = $koneksi->prepare($sqls);
        $row->execute(array($id));
        $datarow = $row->fetch();
        $nik =  $datarow['Nik'];
        $nama =  $datarow['Nama'];
        $kode_departement =  $datarow['Kode_Departement'];
        $gender =  $datarow['Gender'];
        $gapok =  $datarow['Gaji_Pokok'];
        $tunjangan =  $datarow['Tunjangan'];
        $act = "update";
    }else{
        $nik =  "";
        $nama =    "";
        $kode_departement =    "";
        $gender =   "";
        $gapok =   "";
        $tunjangan =  "";
        $act = "simpan";
    }
    ?>
<div class="row">
    <div class="col-lg-12">
        <?php if(!empty($_SESSION['ADMIN'])){?>
            <div class="alert alert-warning mt-5 alert-dismissible fade show" role="alert">
                <strong> 
                    <i class="fa fa-check"></i>
                    Selamat Datang, 
                    <?php echo $_SESSION['ADMIN']['username'];?>
                </strong> 
            </div>
            <div class="card mt-2">
                <div class="card-header">
                    Karyawan
                </div>
                <div class="card">
        <?php if(!empty($_GET['notif']) && $_GET['notif'] == "success" ){?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong> Simpan Data Karyawan Berhasil !</strong> 
        </div>
        <?php }elseif(!empty($_GET['notif']) && $_GET['notif'] == "delete"){ ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong> Hapus Data Berhasil !</strong> 
        </div>
        <?php }elseif(!empty($_GET['notif']) && $_GET['notif'] == "update"){ ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong> Update Data Berhasil !</strong> 
        </div>
        <?php } ?>
            <div class="card-body">
                <form method="post" action="proses/aksi.php?aksi=<?= $act ?>">
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="number" value="<?= $nik ?>" 
                                    placeholder="NIK" 
                                    required 
                                    class="form-control" 
                                    name="nik">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" value="<?= $nama ?>" 
                                    placeholder="Nama" 
                                    required 
                                    class="form-control" 
                                    name="nama">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Kode Departement</label>
                                <input type="text" value="<?= $kode_departement ?>" 
                                    placeholder="Kode Departement" 
                                    required 
                                    class="form-control" 
                                    name="kode_departement">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                    <option value=""> -- pilih gender -- </option>
                                    <option value="l" <?php if($gender == "l"){ echo "selected"; } ?>>Laki - Laki</option>
                                    <option value="p"  <?php if($gender == "p"){ echo "selected"; } ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Gaji Pokok</label>
                                <input type="text" value="<?= $gapok ?>" 
                                    placeholder="Gaji Pokok" 
                                    required 
                                    class="form-control" 
                                    name="gaji_pokok">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tunjangan</label>
                                <input type="text" value="<?= $tunjangan ?>" 
                                    placeholder="Tunjangan" 
                                    required 
                                    class="form-control" 
                                    name="tunjangan">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Save</button>
                </form> 
            </div>
            <div class="card mt-2">
                <div class="card-header">
                    Data Karyawan
                </div>
                <div class="card">
           
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Kode Departement</th>
                        <th>Gender</th>
                        <th>Gaji Pokok</th>
                        <th>Tunjangan</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;
                        foreach($hasil as $key){ ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $key->Nik ?></td>
                        <td><?php echo $key->Nama ?></td>
                        <td><?php echo $key->Kode_Departement ?></td>
                        <td><?php if($key->Gender =="l"){ echo "Laki - Laki"; }else{ echo "Perempuan"; } ?></td>
                        <td><?php echo $key->Gaji_Pokok ?></td>
                        <td><?php echo $key->Tunjangan ?></td>>
                        <td><a href="index.php?aksi=edit&id=<?php echo $key->Nik ?>">Edit</a> | <a href="proses/aksi.php?aksi=delete&id=<?php echo $key->Nik ?>" style="color:red">Delete</a></td>
                    </tr>
                    <?php $no++;  } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>

            </div>
        <?php }else{?>
            <div class="card mt-5">
                <div class="card-header">
                    Home
                </div>
                <div class="card-body">
                    <div class="alert alert-danger mt-2">
                        <h5> <i class="fa fa-ban"></i>
                            Maaf Anda Belum Dapat Akses Website, 
                            Silahkan Login Terlebih Dahulu !
                        </h5>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>