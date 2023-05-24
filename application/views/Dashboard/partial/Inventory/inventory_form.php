<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Advanced Plugins | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="<?php echo base_url();?>assets/libs/mohithg-switchery/switchery.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/libs/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />

		<!-- App css -->
		<link href="<?php echo base_url();?>assets/css/config/material/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="<?php echo base_url();?>assets/css/config/material/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		

		<!-- icons -->
		<link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

      


         
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Advanced</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Inventory Form</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->  

                     


                       
                        <form action="<?php base_url(); ?>InventoryController/add" method="post" enctype="multipart/form-data">
                        <div class="row">
                          
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                            <label for="example-input-small" class="form-label">Product</label>
                                                
                                                <select class="form-control" data-toggle="select2" name="product_id" data-width="100%">
                                                    <option>Select Product Name</option>
                                                    <optgroup label="Search/Product Title ">
                                                    <?php
                                                            $q ="select * from product";
                                                                $product_arr = $this->db->query($q)->result_array();
                                                                foreach($product_arr as $row){
                                                                    ?>
                                                                    
                                                                    <option value="<?php echo  $row['id'];?>"><?php echo  $row['product_title'];?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                    </optgroup>
                                                </select>
                                               

                                            <div class="mb-3 col-lg-12">
                                                <label for="example-input-small" class="form-label">Purchase Price </label>
                                                <input type="text" id="purchase_price" name="purchase_price" class="form-control form-control-sm" placeholder="Purchase Price" required>
                                            </div>
                                            <div class="mb-3 col-lg-12">
                                                <label for="example-input-small" class="form-label">Sale Price</label>
                                                <input type="text" id="Quantity" name="sale_price" class="form-control form-control-sm" placeholder="Sale" required>
                                            </div>

                                            <div class="mb-3 col-lg-12">
                                                <label for="example-input-small" class="form-label">Quantity</label>
                                                <input type="number" id="Quantity" name="Quantity" class="form-control form-control-sm" placeholder="Quantity" required>
                                            </div>
                                            
                                            <div class="mb-3 col-lg-12">
                                                <label for="example-input-small" class="form-label">Date </label>
                                                <input type="date" id="date" name="date" class="form-control form-control-sm" placeholder="Sale" required>
                                            </div>
                                          
                                               
                                            </div> <!-- end col -->
                                            
                                         
                                          

                                          
                                        </div> <!-- end row -->
                                        <div class="row">
                            <div class="col-12">
                                <div class="text-center mb-3">
                                  
                                    <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                                  
                                </div>
                            </div> <!-- end col -->
                        </div>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                          
                        </div> 
            </form>
                        <!-- end row-->

                     

                       



                    </div> <!-- container -->

                </div> <!-- content -->

           
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

     
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="<?php echo base_url();?>assets/js/vendor.min.js"></script>

        <script src="<?php echo base_url();?>assets/libs/selectize/js/standalone/selectize.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/mohithg-switchery/switchery.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/multiselect/js/jquery.multi-select.js"></script>
        <script src="<?php echo base_url();?>assets/libs/select2/js/select2.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/jquery-mockjax/jquery.mockjax.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

        <!-- Init js-->
        <script src="<?php echo base_url();?>assets/js/pages/form-advanced.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/app.min.js"></script>
        
    </body>
</html>