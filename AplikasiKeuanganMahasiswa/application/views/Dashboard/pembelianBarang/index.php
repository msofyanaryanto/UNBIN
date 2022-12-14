<div class="page-header">
  <h1 class="page-title" style="text-transform: capitalize;"><?= $title ?></h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>">Dashboard</a></li>
    <li class="active"><?= $title ?></li>
  </ol>
  <div class="page-header-actions">
	  <a href="<?php echo base_url($linkTo.'/add/');?>" class="btn btn-sm btn-default btn-block btn-primary btn-round">
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
				<?= $this->session->flashdata("notif") ?>
            	<table id="datatab" class="table table-hover dataTable table-striped width-full overf"  data-plugin="dataTable" cellspacing="0" width="100%">
					<thead>
		                <tr>
		                    <th>No</th>
		                    <th>Barang ID</th>
							<th>Kategori</th>
							<th>Supplier</th>
							<th>Nama Barang</th>
							<th>Jumlah</th>
							<th>Harga Beli</th>
							<th>Harga Jual</th>
							<th>Tanggal</th>
                            <th>Action</th>
		                </tr>
		            </thead>
		            <tbody>
                    <?php 
                    $no = 1;
                    foreach($data as $value) {
						$key = $value->id_pembelian;
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $value->id_barang ?></td>
						<td><?= $value->kategori ?></td>
						<td><?= $value->nama_supplier ?></td>
						<td><?= $value->nama_barang ?></td>
						<td><?= $value->jumlah ?></td>
						<td><?= $value->harga_beli ?></td>
						<td><?= $value->harga_jual ?></td>
						<td><?= date("d-m-Y", strtotime($value->createdAt)) ?></td>
                        <td>
			            	<div class="btn-group" role="group">
			                    <button type="button" class="btn btn-warning dropdown-toggle" id="exampleIconDropdown1"
			                    data-toggle="dropdown" aria-expanded="false">
			                      <i class="icon wb-settings" aria-hidden="true"></i>
			                      <span class="caret"></span>
			                    </button>
			                    <ul class="dropdown-menu" style="min-width:10px;" aria-labelledby="exampleIconDropdown1" role="menu">
			                      <li role="presentation">
			                      	<a style="text-decoration:none; text-align:left;" class="btn btn-block btn-default" href="<?php echo base_url($linkTo.'/edit/'.$key);?>">
			                      	<i class="icon wb-edit" aria-hidden="true"></i>
			                      	Edit
			                      	</a>
			                      </li>
			                      <li role="presentation">
			                      	<a style="text-decoration:none; text-align:left;" class="btn btn-block btn-default" href="<?php echo base_url($linkTo.'/delete/'.$key);?>" onclick="return confirm('Are you sure to delete data ?')">
			                      	<i class="icon wb-close" aria-hidden="true"></i>
			                      	Hapus
			                      	</a>
			                      </li>
								  <!-- <li role="presentation">
			                      	<a style="text-decoration:none; text-align:left;" class="btn btn-block btn-default" href="<?php echo base_url($linkTo.'/expired/'.$key);?>" >
			                      	<i class="icon wb-close" aria-hidden="true"></i>
			                      	Expired
			                      	</a>
			                      </li> -->
			                    </ul>
			                </div>

			            </td>
                    </tr>
                    <?php
                $no++;
                 } ?>
		            </tbody>

		          
		        </table>
            </div>
    </div>
