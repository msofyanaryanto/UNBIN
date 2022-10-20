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
              <form class="form-horizontal" action="<?php echo base_url($linkTo);?>/add_action" method="post">
                
                <div class="form-group">
                  <label class="col-sm-4 control-label">Supplier : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" placeholder="Supplier" required name="supplier" class="form-control" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Nomor Handphone : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" placeholder="Nomor Handphone" required name="nomor_handphone" class="form-control" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Email : </label>
                  <div class="col-sm-8">
                    <input type="text" autocomplete="off" placeholder="Email" required name="email" class="form-control" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Alamat : </label>
                  <div class="col-sm-8">
                    <textarea type="text" autocomplete="off" placeholder="alamat" required name="alamat" class="form-control">
                    </textarea>
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
</script>
