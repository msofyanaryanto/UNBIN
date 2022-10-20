
<div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          
          <ul class="site-menu">
              <!--<li class="site-menu-category">General</li>
                <li class="site-menu-item ">
                  <a class="animsition-link" href="<?php echo base_url();?>backend/dashboard/reset">
                    <i class="site-menu-icon fa fa-recycle" aria-hidden="true"></i>
                    <span class="site-menu-title">Reset Transaksi</span>
                  </a>
                </li>-->

                <li class="site-menu-category">Navigations</li>
                <?php
                  $array = $this->session->userdata('query_menu');
                  $parent_id = "0";
                  $parents = array();
                  echo $this->model_menu->bootstrap_menu($array,$parent_id,$parents);
                ?>
            </ul>

        </div>
      </div>
    </div>

     <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="<?php echo base_url()?>dashboard/get_logout" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>