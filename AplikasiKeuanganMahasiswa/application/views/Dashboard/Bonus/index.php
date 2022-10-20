<div class="page-header">
  <h1 class="page-title" style="text-transform: capitalize;"><?= $title ?></h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>">Dashboard</a></li>
    <li class="active"><?= $title ?></li>
  </ol>
  <div class="page-header-actions">
	  <a href="<?php echo base_url('bonus/add/');?>" class="btn btn-sm btn-default btn-block btn-primary btn-round">
	      <i aria-hidden="true" class="icon wb-plus"></i>
	      <span class="hidden-xs">Add new <?= $title ?></span>
	    </a>
  </div>
</div>


	<div class="panel panel-bordered">
            <div class="panel-heading">
            	<div class="row">
            		<h3 class="panel-title">List Data <?= $title ?></h3>
            	</div>
            </div>


            <div class="panel-body">
            	<table id="table" class="display2" cellspacing="0" width="100%">
					<thead>
		                <tr>
		                    <th>No</th>
		                    <th>Nama Karyawan</th>
		                    <th>Gaji Karyawan</th>
		                    <th>Bonus</th>
		                </tr>
		            </thead>
		            <tbody>
		            </tbody>

		            <tfoot>
                        <tr>
                            <td colspan="2" align="right">Total</td>
                            <td><?= rupiah($gaji) ?></td>
                            <td><?= rupiah($bonus) ?></td>
                        </tr>
		                <tr>
		                    <th>No</th>
		                    <th>Nama Karyawan</th>
		                    <th>Gaji Karyawan</th>
		                    <th>Bonus</th>
		            </tfoot>
		        </table>
            </div>
    </div>


<script src="<?php echo base_url('assets_db/jquery/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo base_url('assets_db/datatables/js/jquery.dataTables.min.js')?>"></script>

<script type="text/javascript">

var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url('bonus/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],

    });

});

</script>