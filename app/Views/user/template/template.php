<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php foreach ($profil as $perusahaan) : ?>
        <link rel="shortcut icon" href="<?= base_url('asset-user/images/') ?><?= $perusahaan->favicon_website ?>">
    <?php endforeach; ?>
    <title>
        <?php echo $Title; ?> | <?php foreach ($profil as $descper) : ?><?= $descper->nama_perusahaan; ?><?php endforeach; ?>
    </title>    
    <meta name="description" content="<?php echo $Meta; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/gijgo.css">
    <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/animate.css">
    <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/slick.css">
    <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?= $this->include('user/layout/header'); ?>
    <!-- header-end -->

    <!-- slider_area_start -->
    <?= $this->renderSection('content'); ?>
    <!-- slider_area_end -->


  <!-- footer -->
  <?= $this->include('user/layout/footer');  ?>

  
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="<?= base_url('asset-user') ?>/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/popper.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/bootstrap.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/ajax-form.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/waypoints.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/scrollIt.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/wow.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/nice-select.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/jquery.slicknav.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/plugins.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/gijgo.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/slick.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/lazysizes.min.js"></script>

   

    
    <!--contact js-->
    <script src="<?= base_url('asset-user') ?>/js/contact.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/jquery.form.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/jquery.validate.min.js"></script>
    <script src="<?= base_url('asset-user') ?>/js/mail-script.js"></script>


    <script src="<?= base_url('asset-user') ?>/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
</body>

</html>