<div class="page-header">
  <h1 class="page-title"><?= $title ?></h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>">Dashboard</a></li>
    <li><a href="<?php echo base_url('');?>"><?= $title ?></a></li>
    <li class="active"><?= $title ?></li>
  </ol>
  <!-- <div class="page-header-actions">
    <a href="<?php echo base_url('');?>" class="btn btn-sm btn-danger  btn-round">
      <i aria-hidden="true" class="icon wb-chevron-left-mini"></i>
      <span class="hidden-xs">Back</span>
    </a>
  </div> -->
</div>

<div class="panel">
    <div class="panel-body container-fluid">
      <div class="row row-lg">
        <div class="clearfix hidden-xs"></div>

        <div class="col-sm-12 col-md-12">
          <!-- Example Horizontal Form -->
          <div class="example-wrap">
            <h4 class="example-title"><?= $title ?></h4>
            <p>
              **Fill in the fields below correctly.
            </p>
            <div class="example">
              <form class="form-horizontal" action="<?php echo base_url();?>user/add_action" method="post">
              
              
              <div class="form-group">
                  <label class="col-sm-2 col-lg-2 control-label">Customer : </label>
                  <div class="col-sm-4 col-lg-4">
                    <select name="id_group" class="form-control" required>
                      <option value="">-- Select --</option>
                      
                    </select>
                  </div>
                
                  <label class="col-sm-2 col-lg-2 control-label">PIC : </label>
                  <div class="col-sm-4 col-lg-4">
                    <select name="id_group" class="form-control" required>
                      <option value="">-- Select --</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12 col-sm-12">
                      <table width="100%" class="table table-bordered" style="background:#f9f9f9">
                        <thead>
                          <tr>
                            <td> TEST</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Product : </label>
                  <div class="col-sm-4">
                      <select name="id_group" class="form-control" required>
                        <option value="">-- Select Product --</option>
                      </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12 col-sm-12">
                      <table width="100%" class="table table-bordered" style="background:#f9f9f9">
                      <thead>
                        <tr>
                          <td>No. </td>
                          <td>Product Name</td>
                          <td>QTY </td>
                          <td>Price </td>
                          <td>Total </td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td colspan="4" align="right">Sub Total</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td colspan="4" align="right"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> Tax 10%</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td colspan="4" align="right">Total</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td colspan="5"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> NO PARTIAL ORDER ALLOWED</td>
                        </tr>
                      </tbody>
                      </table>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 col-lg-2 control-label">Delivery Time : </label>
                  <div class="col-sm-10 col-lg-10">
                     <table width="100%" class="table table-bordered" style="background:#f9f9f9">
                        <thead>
                          <tr>
                            <td> Delivery Time</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td colspan="5"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              Ex - Stock subject prior to sales
                            </td>
                          </tr>
                          <tr>
                              <td colspan="5"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              Indent 
                              <input style="width:100px" />
                              <select name="id_group" style="width:200px">
                                <option value="">-- Select --</option>
                              </select> 
                              after received Purchase Order 
                            </td>
                          </tr>
                          <tr>
                              <td colspan="5"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              Indent 
                              <input style="width:100px" />
                              <select name="id_group" style="width:200px">
                                <option value="">-- Select --</option>
                              </select> 
                              after received Purchase Order 
                            </td>
                          </tr>
                          <tr>
                              <td colspan="5"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              Item 
                              <input style="width:100px" />
                              <select name="id_group" style="width:200px">
                                <option value="">-- Select --</option>
                              </select> 
                              item received Purchase Order 
                            </td>
                          </tr>
                          <tr>
                              <td colspan="5"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              Item 
                              <input style="width:100px" />
                              <select name="id_group" style="width:200px">
                                <option value="">-- Select --</option>
                              </select> 
                              after received Purchase Order 
                            </td>
                          </tr>
                          <tr>
                              <td colspan="5"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              Item 
                              <input style="width:100px" />
                              <select name="id_group" style="width:200px">
                                <option value="">-- Select --</option>
                              </select> 
                              after received Purchase Order 
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-lg-2 control-label">Terms Of Payment : </label>
                  <div class="col-sm-10 col-lg-10">
                     <table width="100%" class="table table-bordered" style="background:#f9f9f9">
                        <thead>
                          <tr>
                            <td> Terms Of Payment</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td colspan="5"><input class="form-check-input" type="radio" value="" id="defaultCheck1">
                              1 ( One ) Months After Invoice Received
                            </td>
                          </tr>
                          <tr>
                              <td colspan="5"><input class="form-check-input" type="radio" value="" id="defaultCheck1">
                              1 ( One ) Months After Invoice Goods
                            </td>
                          </tr>
                          <tr>
                              <td colspan="5"><input class="form-check-input" type="radio" value="" id="defaultCheck1">
                              1 ( One ) Weeks After Invoice Goods
                            </td>
                          </tr>

                          <tr>
                              <td colspan="5"><input class="form-check-input" type="radio" value="" id="defaultCheck1">
                              2 ( Two ) Months After Invoice Goods
                            </td>
                          </tr>
                          <tr>
                              <td colspan="5"><input class="form-check-input" type="radio" value="" id="defaultCheck1">
                              2 ( Two ) Weeks After Invoice Goods
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                  </div>
                </div>
                

                <div class="form-group">
                  <div class="col-sm-1 col-sm-offset-11" align="right">
                    <input class="btn btn-primary" type="submit" value="Save">
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
