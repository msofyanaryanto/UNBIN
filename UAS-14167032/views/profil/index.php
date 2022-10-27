<?php 
    $id =  $_SESSION['ADMIN']['username'];
    $sql = "SELECT * FROM login WHERE username = ?";
    $row = $koneksi->prepare($sql);
    $row->execute(array($id));
    $hasil = $row->fetch();
?>
<div class="row">
    <div class="col-sm-8 mt-5">
        <?php if(!empty($_GET['notif'])){?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong> Update Password Berhasil !</strong> 
        </div>
        <?php } ?>
        <div class="card">
            <div class="card-header">
               <i class="fa fa-edit"></i> Ubah password
            </div>
            <div class="card-body">
                <form method="post" action="proses/profil.php?aksi=update">
                    
                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" value="" 
                                    placeholder="ubah password" 
                                    required 
                                    class="form-control" 
                                    name="password">
                                <input type="hidden" value="<?php echo $hasil['username'];?>" 
                                    class="form-control" 
                                    name="id_login">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Save</button>
                </form> 
            </div>
        </div>
    </div>
    <div class="col-sm-4 mt-5">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-user"></i> Profil Anda
            </div>
            <div class="card-body text-center">
                <i class="fa fa-user-circle fa-4x"></i>
                <hr>
                <h4><?= $hasil['username'];?></h4>
            </div>
        </div>
    </div>
</div>
