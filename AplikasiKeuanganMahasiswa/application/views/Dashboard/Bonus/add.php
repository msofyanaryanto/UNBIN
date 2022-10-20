<div class="page-header">
  <h1 class="page-title"><?= $title ?></h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>">Dashboard</a></li>
    <li><a href="<?php echo base_url('bonus');?>"><?= $title ?></a></li>
    <li class="active">Add <?= $title ?></li>
  </ol>
  <div class="page-header-actions">
    <a href="<?php echo base_url('bonus');?>" class="btn btn-sm btn-danger  btn-round">
      <i aria-hidden="true" class="icon wb-chevron-left-mini"></i>
      <span class="hidden-xs">Back</span>
    </a>
  </div>
</div>

<div class="panel">
    <div class="panel-body container-fluid">
      <div class="row row-lg">
        <div class="clearfix hidden-xs"></div>

        <div class="col-sm-12 col-md-6">
          <!-- Example Horizontal Form -->
          <div class="example-wrap">
            <h4 class="example-title">Add New <?= $title ?></h4>
            <p>
              **Fill in the fields below correctly.
            </p>
            <div class="example">
              <form class="form-horizontal" action="<?php echo base_url();?>bonus/add_action" method="post">

               
                <div class="form-group">
                  <label class="col-sm-4 control-label">Total Bonus Karyawan : </label>
                  <div class="col-sm-8">
                    <input type="text"  id="tanpa-rupiah"  placeholder="1.000.000.00" name="bonus" class="form-control">
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
