<div class="page-header">
  <h1 class="page-title">Group Management</h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>">Dashboard</a></li>
    <li><a href="<?php echo base_url('group');?>">Group Management</a></li>
    <li class="active">Edit Group</li>
  </ol>
  <div class="page-header-actions">
    <a href="<?php echo base_url('group');?>" class="btn btn-sm btn-danger  btn-round">
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
            <h4 class="example-title">Edit Group</h4>
            <p>
              **Fill in the fields below correctly.
            </p>
            <div class="example">
              <form class="form-horizontal" action="<?php echo base_url();?>group/update/<?= $data_group->id_group?>" method="post">

                <div class="form-group">
                  <label class="col-sm-3 control-label">Name group : </label>
                  <div class="col-sm-9">
                    <input type="text" autocomplete="off" placeholder="Name Group" value="<?= $data_group->name_group;?>" required name="name_group" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-9 col-sm-offset-3">
                    <input class="btn btn-primary" type="submit" value="Update">
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
</div>
