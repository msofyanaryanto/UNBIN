<div class="page-header">
  <h1 class="page-title" style="text-transform: capitalize;"><?= $title ?></h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>">Dashboard</a></li>
    <li class="active"><?= $title ?></li>
  </ol>
  <div class="page-header-actions">
  </div>
</div>


	<div class="panel panel-bordered">
            <div class="panel-heading">
            	<div class="row">
            		<h3 class="panel-title"><?= $title ?></h3>
            	</div>
              <form class="form-horizontal" action="<?php echo base_url() . $linkTo;?>" method="post">
              <div class="form-group">
                  <label class="col-sm-4 control-label">Start Date : </label>
                  <div class="col-sm-2">
                    <input type="date" autocomplete="off" id='start_date' name="start_date" class="form-control" value="<?= $data['filter']['start_date'] ?>">
                  </div>
                  <label class="col-sm-1 control-label">End Date : </label>
                  <div class="col-sm-2">
                  <input type="date" autocomplete="off"  id='end_date' name="end_date" class="form-control" value="<?= $data['filter']['end_date'] ?>">
                  </div>
                  <div class="col-sm-2">
                     <button class="btn btn-primary" type="submit"  id="btn-filter">Filter</button>
                     <a href="<?php echo base_url() . $linkTo;?>" class="btn btn-primary" type="button"  id="btn-clear">Clear</a>
                  </div>
                </div>
              </form>
            </div>


            <div class="panel-body">
				<?= $this->session->flashdata("notif") ?>
            	<table id="datatab" class="table table-hover dataTable table-striped width-full overf"  data-plugin="dataTable" cellspacing="0" width="100%">
				<thead>
		                <tr>
		                    <th>No</th>
                            <th>No Struk</th>
                            <th>Tanggal</th>                            
		                    <th>List Barang</th>
							          <th>Total Harga Jual</th>
                        <th>Total Harga Beli</th>
                        <th>Total Bersih</th>
		                </tr>
		            </thead>
		            <tbody>
                    <?php 
                    foreach($data['listTransaksi'] as $index => $value) {
                    ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $value->no_struk ?></td>
                        <td><?= date("d-m-Y", strtotime($value->createdAt)) ?></td>
                        <td><?= $value->list_barang ?></td>
                        <td><?= rupiah($value->total) ?></td>
                        <td><?= rupiah($value->totalBeli) ?></td>
                        <td><?= rupiah($value->total - $value->totalBeli) ?></td>
                    </tr>  
                    <?php
                 } ?>       
		            </tbody>
                
                  <tr style="font-weight:bold">
                    <td colspan="6" align="right">Total Penjualan</td>
                    <td><?= rupiah($totalAll->tJual) ?></td>
                </tr>
                <tr style="font-weight:bold">
                    <td colspan="6" align="right">Total Harga Beli</td>
                    <td><?=  rupiah($totalAll->tBeli) ?><td>
                </tr>
                <tr style="font-weight:bold">
                    <td colspan="6" align="right">Total Pendapatan Bersih</td>
                    <td ><?=  rupiah($totalAll->tJual - $totalAll->tBeli) ?><td>
                </tr>


		          
		        </table>

            <div class="row">
					<button class="btn btn-primary btn-round" onClick="fnExcelReport()">Export Excel</button>
            	</div>
            </div>
    </div>

    <script>

	function fnExcelReport()
{
  var filename = "laporan_transaksi"
var tab_text = "<table border='2px'><tr>";
var textRange;
var j = 0;
tab = document.getElementById('datatab');

for (j = 0; j < tab.rows.length; j++) {
  tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
}

tab_text = tab_text + "</table>";
var a = document.createElement('a');
var data_type = 'data:application/vnd.ms-excel';
a.href = data_type + ', ' + encodeURIComponent(tab_text);
a.download = filename + '.xls';
a.click();
}
</script>