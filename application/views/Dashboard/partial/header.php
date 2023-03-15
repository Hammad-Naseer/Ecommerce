<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Ecommerce Dashboard  Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="../assets/images/favicon.ico"> -->
     
        <!-- plugin css -->
        <!-- <link href="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" /> -->
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

        <link href="<?php echo base_url(); ?>assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
	    <!-- App css -->
	    <!-- <link href="../assets/css/config/material/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" /> -->
        <link rel = "stylesheet" type = "text/css" href = "<?php //echo base_url(); ?>assets/css/config/material/bootstrap.min.css">


	    <!-- <link href="../assets/css/config/material/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" /> -->
        <link rel = "stylesheet" type = "text/css" href = "<?php //echo base_url(); ?>assets/css/config/material/app.min.css">

	    <!-- <link href="../assets/css/config/material/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" /> -->
        <link rel = "stylesheet" type = "text/css" href = "<?php //echo base_url(); ?>assets/css/config/material/bootstrap-dark.min.css">

	    <!-- <link href="../assets/css/config/material/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" /> -->
        <link rel = "stylesheet" type = "text/css" href = "<?php //echo base_url(); ?>assets/css/config/material/app-dark.min.css">

	    <!-- icons -->
	    <!-- <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" /> -->
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/icons.min.css">

        <!--  -->
        <link href="<?php echo base_url(); ?>assets/css/config/material/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	    <link href="<?php echo base_url(); ?>assets/css/config/material/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

	    <link href="<?php echo base_url(); ?>assets/css/config/material/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
	    <link href="<?php echo base_url(); ?>assets/css/config/material/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

    <!-- third party css -->
        <link href="<?php echo base_url(); ?>assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
       



    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
<?php include_once "Topbar.php";?>

<!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once "leftsidebar.php";?>