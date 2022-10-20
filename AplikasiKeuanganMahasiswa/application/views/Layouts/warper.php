
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/base/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2016 03:40:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Dashboard | Kasir</title>

  <?php if($this->uri->segment(1) == "Pengiriman"){ ?>
  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/global/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/global/assets/images/khongguan-logo.ico">


  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/css/bootstrap.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/css/bootstrap-extend.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/site.min3f0d.css?v2.2.0">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/css/skintools.min3f0d.css?v2.2.0">
  <script src="<?php echo base_url(); ?>assets/assets/js/sections/skintools.min.js"></script>

  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/animsition/animsition.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/asscrollable/asScrollable.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/switchery/switchery.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/intro-js/introjs.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/slidepanel/slidePanel.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/flag-icon-css/flag-icon.min3f0d.css?v2.2.0">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/fullcalendar/fullcalendar.min3f0d.css?v2.2.0">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/bootstrap-touchspin/bootstrap-touchspin.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/jquery-selective/jquery-selective.min3f0d.css?v2.2.0">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/fonts/web-icons/web-icons.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/fonts/brand-icons/brand-icons.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/fonts/font-awesome/font-awesome.min3f0d.css?v2.2.0">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  
  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/examples/css/apps/calendar.min3f0d.css?v2.2.0">

  

<?php }else{ ?>
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/global/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/global/assets/images/khongguan-logo.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/css/bootstrap.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/css/bootstrap-extend.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/assets/css/site.min3f0d.css?v2.2.0">
  <link href="<?php echo base_url(); ?>assets/global/vendor/bootstrap-table/bootstrap-table.min3f0d.css?v2.2.0" rel="stylesheet">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/css/skintools.min3f0d.css?v2.2.0">
  <script src="<?php echo base_url(); ?>assets/global/assets/js/sections/skintools.min.js"></script>

  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/animsition/animsition.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/asscrollable/asScrollable.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/switchery/switchery.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/intro-js/introjs.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/slidepanel/slidePanel.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/flag-icon-css/flag-icon.min3f0d.css?v2.2.0">

  
  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/assets/examples/css/dashboard/v1.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/morris-js/morris.min3f0d.css?v2.2.0">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/fonts/web-icons/web-icons.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/fonts/brand-icons/brand-icons.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/fonts/font-awesome/font-awesome.min3f0d.css?v2.2.0">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/fonts/weather-icons/weather-icons.min3f0d.css?v2.2.0">

   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/datatables-bootstrap/dataTables.bootstrap.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/global/vendor/datatables-fixedheader/dataTables.fixedHeader.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/global/vendor/datatables-responsive/dataTables.responsive.min3f0d.css?v2.2.0">

  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/assets/examples/css/tables/datatable.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/select2/select2.min3f0d.css?v2.2.0">
<?php } ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.min3f0d.css?v2.2.0">
  <!-- Scripts -->
  <script src="<?php echo base_url(); ?>assets/global/vendor/modernizr/modernizr.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/breakpoints/breakpoints.min.js"></script>

  <script>
    Breakpoints();
  </script>
  
  
</head>
<body class="dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

 <!-- HEADER -->
<?php require_once('header.php'); ?>

  <!-- LEFT MENU -->
<?php require_once('left-menu.php');?>

  <!-- Page -->
  <div class="page animsition">
    <div class="page-content padding-30 container-fluid">
      <!-- KONTENT -->
      <?php require_once('content.php');?>
    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <?php require_once('footer.php');?>
  

<?php if($this->uri->segment(1) == "Pengiriman"){ ?>
	<script src="<?php echo base_url(); ?>assets/global/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/animsition/animsition.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/asscroll/jquery-asScroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/mousewheel/jquery.mousewheel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/asscrollable/jquery.asScrollable.all.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/ashoverscroll/jquery-asHoverScroll.min.js"></script>

  <!-- Plugins -->
  <script src="<?php echo base_url(); ?>assets/global/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/intro-js/intro.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/screenfull/screenfull.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/slidepanel/jquery-slidePanel.min.js"></script>

  

  <!-- Scripts -->
  <script src="<?php echo base_url(); ?>assets/global/js/core.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/site.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/js/sections/menu.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/sections/menubar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/sections/gridmenu.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/sections/sidebar.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/global/js/configs/config-colors.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/configs/config-tour.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/global/js/components/asscrollable.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/components/animsition.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/components/slidepanel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/components/switchery.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/global/js/components/bootstrap-touchspin.min.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/global/js/components/material.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/plugins/action-btn.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/components/bootbox.min.js"></script>

  <!-- Plugins For This Page -->
  <script src="<?php echo base_url(); ?>assets/global/vendor/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/moment/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/fullcalendar/fullcalendar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/jquery-selective/jquery-selective.min.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/global/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/bootbox/bootbox.js"></script>

  <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/examples/js/apps/calendar.min.js"></script>

  
  <?php }else{ ?>
	
	<script src="<?php echo base_url(); ?>assets/global/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/animsition/animsition.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/asscroll/jquery-asScroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/mousewheel/jquery.mousewheel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/asscrollable/jquery.asScrollable.all.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/ashoverscroll/jquery-asHoverScroll.min.js"></script>

  <!-- Plugins -->
  <script src="<?php echo base_url(); ?>assets/global/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/intro-js/intro.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/screenfull/screenfull.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/slidepanel/jquery-slidePanel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/bootstrap-table/bootstrap-table.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.min.js"></script>
  
  <!-- Plugins For This Page -->
  <script src="<?php echo base_url(); ?>assets/global/vendor/raphael/raphael-min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/morris-js/morris.min.js"></script>

  <!-- Plugins DATATABLES -->
  <script src="<?php echo base_url(); ?>assets/global/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/datatables-bootstrap/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/datatables-responsive/dataTables.responsive.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/datatables-tabletools/dataTables.tableTools.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/bootbox/bootbox.js"></script>
  <!-- Plugins DATATABLES -->


 <!--  <script src="<?php echo base_url(); ?>assets/global/vendor/skycons/skycons.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/chartist-js/chartist.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/jvectormap/jquery.jvectormap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/jvectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/matchheight/jquery.matchHeight-min.js"></script> 
  <!-- Grafik -->

  <!-- Scripts -->
  <script src="<?php echo base_url(); ?>assets/global/js/core.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/assets/js/site.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/global/assets/js/sections/menu.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/assets/js/sections/menubar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/assets/js/sections/gridmenu.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/assets/js/sections/sidebar.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/global/js/configs/config-colors.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/assets/js/configs/config-tour.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/global/js/components/asscrollable.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/components/animsition.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/components/slidepanel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/components/switchery.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/global/js/components/matchheight.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/components/jvectormap.min.js"></script>


  <script src="<?php echo base_url(); ?>assets/global/assets/examples/js/dashboard/v1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/components/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/assets/examples/js/tables/datatable.min.js"></script>
	

<script src="<?php echo base_url(); ?>assets/global/vendor/select2/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/js/components/select2.min.js"></script>
<?php } ?>  
<script src="<?php echo base_url(); ?>assets/global/js/components/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<?php if($this->uri->segment(1) == "dashboard"){ ?>
  <script>
    Morris.Bar({
      element: 'chart-transaksi',
      data: <?php echo $transaksi?>,
      xkey: 'period',
      ykeys: ['total'],
      labels: ['Total']
    });

    Morris.Bar({
      element: 'chart-produk',
      data: <?php echo $produk?>,
      xkey: 'nama_barang',
      ykeys: ['total'],
      labels: ['Total']
    });

    Morris.Bar({
      element: 'chart-pembelian',
      data: <?php echo $pembelian?>,
      xkey: 'nama_barang',
      ykeys: ['total'],
      labels: ['Total']
    });

    $("#start_date").datepicker( {
        format: "yyyy-mm",
        startView: "years", 
        minViewMode: "months"
    });
    $("#end_date").datepicker( {
        format: "yyyy-mm",
        startView: "years", 
        minViewMode: "months"
    });
</script>
<?php }?>

</body>


<!-- Mirrored from getbootstrapadmin.com/remark/base/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2016 03:52:00 GMT -->
</html>