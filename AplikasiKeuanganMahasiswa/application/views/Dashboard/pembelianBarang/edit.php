<div class="page-header">
  <h1 class="page-title"><?= $title ?></a></h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>">Dashboard</a></li>
    <li><a href="<?php echo base_url($linkTo);?>"><?= $title ?></a></li>
    <li class="active">Add <?= $title ?></li>
  </ol>
  
</div>

<div class="panel">
    <div class="panel-body container-fluid">
      <div class="row">
        <div class="clearfix hidden-xs"></div>

        <div class="col-sm-6 col-md-6">
          <!-- Example Horizontal Form -->
          <div class="example-wrap">
            <h4 class="example-title">Add Data <?= $title ?></h4>
            <p>
              **Fill in the fields below correctly.
            </p>
            <div class="example">
              <form class="form-horizontal" action="<?php echo base_url($linkTo);?>/update_action/<?= $data->id_pembelian ?>" method="post">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Barang ID : </label>
                  <div class="col-sm-6">
                    <input type="text" autocomplete="off" placeholder="BRG0001" id='id_barang'
                     onkeyup="search()" required name="barangID" class="form-control"  value=<?= $data->id_barang ?>>
                  </div>
                  <div class="col-sm-2">
                     <button class="btn btn-primary" type="button" onClick="search()"  id="btn-search">Cari</button>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Kategori : </label>
                  <div class="col-sm-8">
                    <select name="kategoriID" class="form-control" id="id_kategori">
                        <option value=""> -- Pilih Kategori -- </option>
                        <?php 
                        foreach($kategori as $valueK){ ?>
                          <option value="<?= $valueK->id_kategori ?>" <?php if($data->id_kategori ==  $valueK->id_kategori){ echo "selected"; } ?>><?= $valueK->kategori ?></option>
                        <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Supplier : </label>
                  <div class="col-sm-8">
                    <select name="supplierID" class="form-control" id="id_supplier">
                        <option value=""> -- Pilih Supplier -- </option>
                        <?php 
                          foreach($supplier as $valueS){ ?>
                            <option value="<?= $valueS->id_supplier ?>" <?php if($data->id_supplier ==  $valueS->id_supplier){ echo "selected"; } ?>><?= $valueS->nama_supplier ?></option>
                        <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Nama Barang : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" placeholder="Nama Barang" id="nama_barang" required name="namaBarang" class="form-control" value="<?= $data->nama_barang ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Jumlah : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" placeholder="Jumlah" required name="jumlah" class="form-control" value=<?= $data->jumlah ?>>
                    <input type="hidden" autocomplete="off" placeholder="Jumlah" required name="jumlahOld" class="form-control" value=<?= $data->jumlah ?>>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga Beli : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" placeholder="Harga Beli" required name="hargaBeli" id="harga_beli" class="form-control"  value=<?= $data->harga_beli ?>>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Harga Jual : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" placeholder="Harga Jual" required name="hargaJual" id="harga_jual" class="form-control" value=<?= $data->harga_jual ?>>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-8 col-sm-offset-4">
                    <input class="btn btn-primary" type="submit" value="Save">
                    <button class="btn btn-default btn-outline" type="reset">Reset</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
          <!-- End Example Horizontal Form -->
        </div>
      </div>
    </div>
  </div>

<script src="<?php echo base_url("js/jquery.min.js"); ?>"></script>
<script type="text/javascript">

  /* Tanpa Rupiah */
  var tanpa_rupiah = document.getElementById('tanpa-rupiah');
  tanpa_rupiah.addEventListener('keyup', function(e)
  {
    tanpa_rupiah.value = formatRupiah(this.value);
  });
  
 
  
  /* Fungsi */
  function formatRupiah(angka, prefix)
  {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa  = split[0].length % 3,
      rupiah  = split[0].substr(0, sisa),
      ribuan  = split[0].substr(sisa).match(/\d{3}/gi);
      
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }
    
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }

  function search(){
  var baseurl = "<?= base_url() ?>";
	$.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: baseurl + "pembelianBarang/search", // Isi dengan url/path file php yang dituju
        data: {id_barang : $("#id_barang").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
		},
		success: function(response){ // Ketika proses pengiriman berhasil
            //$("#loading").hide(); // Sembunyikan loadingnya
            
            if(response.status == "success"){ // Jika isi dari array status adalah success
				$("#id_supplier").val(response.id_supplier); // set textbox dengan id nama
				$("#id_kategori").val(response.id_kategori); // set textbox dengan id jenis kelamin
				$("#nama_barang").val(response.nama_barang); // set textbox dengan id telepon
				$("#harga_beli").val(response.harga_beli);
        $("#harga_jual").val(response.harga_jual); // set textbox dengan id alamat
			}else{ // Jika isi dari array status adalah failed
				alert("Data Tidak Ditemukan");
			}
		},
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
			alert(xhr.responseText);
        }
    });
}


</script>
