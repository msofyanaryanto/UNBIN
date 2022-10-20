<style type="text/css">
  .home-label{
    background-color:#ECF0F1; border-radius:10px; padding-top:20px; padding-bottom: 20px;
  }  
</style>

<div class="panel panel-bordered panel-info">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-user" aria-hidden="true"></i> &nbsp;&nbsp;
    <?=$this->session->userdata('name_user');?> Kasir</h3>
  </div>
  <div class="panel-body">
    <div class="form-group home-label col-sm-12 col-md-12">
      <?php
        $id_group = $this->session->userdata('id_group');
        $name_group = $this->db->query("select name_group from ref_group where id_group = '$id_group'")->row();

      ?>
      <label class="col-sm-12 control-label">Welcome To <b><?=$this->session->userdata('name_user');?></b>.</label>
      <label class="col-sm-12 control-label">Your Sign in as <b><?=$name_group->name_group;?></b> </label>
      
    </div>
  </div>
</div>