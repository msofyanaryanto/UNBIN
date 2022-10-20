<div class="page-header">
  <h1 class="page-title" style="text-transform: capitalize;">Module Management</h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>">Dashboard</a></li>
    <li class="active">Module Management</li>
  </ol>
  <div class="page-header-actions">
	  <a href="<?php echo base_url('module/add/');?>" class="btn btn-sm btn-default btn-block btn-primary btn-round">
	      <i aria-hidden="true" class="icon wb-plus"></i>
	      <span class="hidden-xs">Add new module</span>
	    </a>
  </div>
</div>


	<div class="panel panel-bordered">
            <div class="panel-heading">
            	<div class="row">
            		<h3 class="panel-title">List Data Module</h3>
            	</div>
            </div>


            <div class="panel-body">
            	<table class="table table-hover dataTable table-striped width-full overf" data-plugin="dataTable">
			        <thead>
			          <tr>
			            <th>No</th>
			            <th>Parent</th>
			            <th>Name Module</th>
			            <th>Controller</th>
			            <th>Icon</th>
			            <th>Actions</th>
			          </tr>
			        </thead>
			        <tfoot>
			          <tr>
			            <th>No</th>
			            <th>Parent</th>
			            <th>Name Module</th>
			            <th>Controller</th>
			            <th>Icon</th>
			            <th>Actions</th>
			          </tr>
			        </tfoot>
			        <tbody>
			        <?php
			        	$no=1;
			        	foreach ($data_module as $value):
			        ?>
			          <tr>
			            <td><?= $no++;?></td>
			            <td>
			            <?php
				            if($value->id_parent != 0){
				            	$data_parent = $this->db->query("Select name_module from ref_module where id_module = '$value->id_parent'")->row(); 
				            	echo $data_parent->name_module;
				            }else{
			            ?>
			            <b>
			            <?php echo "#Parent";?>
			            </b>
			            <?php	
			            	}
			            ?>
			            </td>
			            <td><?= $value->name_module;?></td>
			            <td><?= $value->name_controller;?></td>
			            <td><i class="fa fa-<?= $value->icon;?>"></i></td>
			            <td>
			            	<div class="btn-group" role="group">
			                    <button type="button" class="btn btn-warning dropdown-toggle" id="exampleIconDropdown1"
			                    data-toggle="dropdown" aria-expanded="false">
			                      <i class="icon wb-settings" aria-hidden="true"></i>
			                      <span class="caret"></span>
			                    </button>
			                    <ul class="dropdown-menu" style="min-width:10px;" aria-labelledby="exampleIconDropdown1" role="menu">
			                      <li role="presentation">
			                      	<a style="text-decoration:none; text-align:left;" class="btn btn-block btn-default" href="<?php echo base_url('module/edit/'.$value->id_module);?>">
			                      	<i class="icon wb-edit" aria-hidden="true"></i>
			                      	Edit
			                      	</a>
			                      </li>
			                      <li role="presentation">
			                      	<a style="text-decoration:none; text-align:left;" class="btn btn-block btn-default" href="<?php echo base_url('module/delete/'.$value->id_module);?>" onclick="return confirm('Are you sure to delete data ?')">
			                      	<i class="icon wb-close" aria-hidden="true"></i>
			                      	Hapus
			                      	</a>
			                      </li>
			                    </ul>
			                </div>

			            </td>
			          </tr>
			          <?php
			          	endforeach;
			          ?>
			        </tbody>
			     </table>
            </div>
    </div>
