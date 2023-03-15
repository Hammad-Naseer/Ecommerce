  <!-- third party css -->
  <link href="<?php echo base_url(); ?>assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
	    

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
                                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Customers</li> -->
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Inventory</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                           
                                                <a href="Add_inventory" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-1"></i> Add Inventory</a>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-end">
                                                   
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table id="basic-datatable2" class="table table-centered table-striped dt-responsive nowrap w-100" >
                                                <thead>
                                                    <tr>
                                                      
                                                        <th>Product Name</th>
                                                        <th>Quantity</th>
                                                        <th>Sale Price</th>
                                                        <th>Purchase Price</th>
                                                        <!-- <th>Last Order</th> -->
                                         
                                                        <!-- <th style="width: 75px;">Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                      
                                                        <!-- <td class="table-user"> -->
                                                            <!-- <img src="../assets/images/users/user-4.jpg" alt="table-user" class="me-2 rounded-circle"> -->
                                                            <!-- <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a> -->
                                                        <!-- </td> -->
                                                        <?php foreach($item as $data){ ?>
                                                            <tr>
                                                            <td><?php echo $data->product_title; ?></td>
                                                            <td><?php echo $data->Quantity; ?></td>
                                                            <td><?php echo $data->sale_price; ?></td>
                                                            <td><?php echo $data->purchase_price; ?></td>

                                                            </tr>
                                                        <?php }?>
                                               

                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

             

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

                  <!-- Vendor js -->
                  <script src="<?php echo base_url('assets/js/vendor.min.js') ?>"></script>

<!-- third party js -->
<script src="<?php echo base_url('assets/libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php  echo base_url('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>
<script src="<?php  echo base_url('assets/libs/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/datatables.net-select/js/dataTables.select.min.js') ?>"></script>
<script src="<?php  echo base_url('assets/libs/pdfmake/build/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('assets/libs/pdfmake/build/vfs_fonts.js') ?>"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="<?php echo base_url('assets/js/pages/datatables.init.js') ?>"></script>

<!-- App js -->
<script src="<?php echo base_url('assets/js/app.min.js') ?>"></script>
            <script>
            $(document).ready( function () {
                $('#basic-datatable2').DataTable();
            } );
        </script>
