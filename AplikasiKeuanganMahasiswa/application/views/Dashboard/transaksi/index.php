<div class="page-header">
  <h1 class="page-title" style="text-transform: capitalize;"><?= $title ?></h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>">Dashboard</a></li>
    <li class="active"><?= $title ?></li>
  </ol>
  <div class="page-header-actions">
	  
  </div>
</div>

<div class="col-md-6">
	<div class="panel panel-bordered">
            <div class="panel-heading">
            	<div class="row">
            		<h3 class="panel-title">List Data Barang</h3>
            	</div>
            </div>
            <div class="panel-body">
				<?= $this->session->flashdata("notif") ?>
            <table id="datatab" class="table table-hover dataTable table-striped width-full overf"  data-plugin="dataTable" cellspacing="0" width="100%">
					    <thead>
		                <tr>
		                    <th>No</th>
		                    <th>Kode Barang</th>
							          <th>Nama Barang</th>
							          <th>Stok</th>
                        <th>Action</th>
		                </tr>
		            </thead>
		            <tbody>
                    <?php 
                    $no = 1;
                    foreach($data as $value) {
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $value->kode_barang ?></td>
                        <td><?= $value->nama_barang ?></td>
                        <td><?= $value->stok ?></td>
                        <td>
					                	<a href="<?= base_url('transaksi/addProd/'.$value->kode_barang.'/'.$no_struk.'/'.$value->harga_jual.'/'.$value->harga_beli) ?>" style="text-decoration:none" class="btn btn-warning dropdown-toggle">
			                        Tambah &nbsp;
			                      <span class="fa fa-arrow-right"></span>
                           </a>
			                   </td>
                    </tr>
                    <?php
                $no++;
                 } ?>
		            </tbody>

		          
		        </table>
            </div>
				</div>
    </div>



	<div class="col-md-6">
	<div class="panel panel-bordered">
            <div class="panel-heading">
            	<div class="row">
            		<h3 class="panel-title">List Data Pesanan Pelanggan</h3>
            	</div>
            </div>
            <div class="panel-body">
				
				<div class="form-group">
                  <label class="col-sm-4 control-label">Kasir : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off"  disabled value="<?= $this->session->userdata('name_user') ?>" class="form-control" >
                  </div>
                </div>
				

				<div class="col-sm-12">&nbsp;</div>

				<div class="form-group">
                  <label class="col-sm-4 control-label">No Struk : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" disabled value="<?= $no_struk ?>" name="kategori" class="form-control" >
                  </div>
                </div>

				
				<div class="col-sm-12">&nbsp;</div>


            	<table id="datatab" class="table table-hover dataTable table-striped width-full overf"  cellspacing="0" width="100%">
					<thead>
		                <tr>
		                    <th>No</th>
		                    <th>Kode Barang</th>
							<th>Nama Barang</th>
							<th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Action</th>
		                </tr>
		            </thead>
		            <tbody>
                    <?php 
                    $no = 1;
                    foreach($data_keranjang as $value) {
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $value->barangId ?></td>
                        <td><?= $value->nama_barang ?></td>
                        <td><?= $value->jumlah ?></td>
                        
					              	<td><?= rupiah($value->total_harga) ?></td>
			                  
                        <td>
                        <a href="<?= base_url('transaksi/deleteBarang/'.$value->detail_transaksi_id) ?>" style="text-decoration:none" class="btn btn-danger dropdown-toggle">
			                        Hapus &nbsp;
			                      <span class="fa fa-trash"></span>
                           </a>
                    </td>
                    </tr>
                    <?php
                $no++;
                 } ?>
		            </tbody>

		          
		        </table>

				<div class="col-sm-12">&nbsp;</div>

				<div class="form-group">
                  <label class="col-sm-4 control-label">Total Bayar : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" placeholder="0" required name="total" id="total" value="<?= rupiah($total) ?>" disabled class="form-control" >
                    <input type="text" style="display:none" name="totalhide" id="totalhide" value="<?= $total ?>"  >
                  </div>
                </div>
				

				<div class="col-sm-12">&nbsp;</div>

				<div class="form-group">
                  <label class="col-sm-4 control-label">Jumlah Bayar : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" placeholder="0" required name="as" id="bayar" class="form-control" >
                  </div>
                </div>

				<div class="col-sm-12">&nbsp;</div>

				<div class="form-group">
                  <label class="col-sm-4 control-label">Kembalian : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" placeholder="0" required name="kembalian" disabled id="xa" value="0" class="form-control" >
                    <div id="test"></div>
                  </div>
                </div>

				<div class="col-sm-12">&nbsp;</div>

				<div class="form-group">
                  <div class="col-sm-7 col-sm-offset-8">
                    <a class="btn btn-primary" href="<?= base_url('transaksi/bayar/'.$no_struk) ?>">Bayar & Cetak Struk</a>
                  </div>
                </div>

            </div>
				</div>
    </div>
<script>

var rupiah = document.getElementById('bayar');
var total = document.getElementById('totalhide').value;
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			//rupiah.value = formatRupiah(this.value, 'Rp. ');
      var jumlah = rupiah.value - total;
      //alert(jumlah);
      if(jumlah < 0){
        var hasil = 1000;
      }else{
        var hasil = jumlah;
      }
      document.getElementById('xa').value = jumlah;
		});
    
   // document.getElementById('xa').value =  formatRupiah(document.getElementById('xa').value, 'Rp. ');
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
  </script>