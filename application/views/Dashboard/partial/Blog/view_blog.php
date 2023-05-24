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
                                       
                                    </div>
                                    <h4 class="page-title">Blog List</h4>
                                    <?php if($error =$this->session->flashdata('Blog')): ?>
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="alert alert-success">
                                                        <?php echo $error ?>
                                                </div>
                                                </div>
                                                </div>

                                            <?php endif ?>
                                                    <?php if($error =$this->session->flashdata('message')):
                                                    $message_class= $this->session->flashdata('message_class')
                                                        ?>
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                    <div class="alert <?= $message_class ?>">
                                                    <?php echo $error ?>
                                                        </div>
                                                     </div>
                                                    </div>
                                            <?php endif ?>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                    

                        <div class="row">
                            
                            <div class="col-12">
                                
                                <div class="card">
                                            <div class="col-auto py-2" style="padding-left: 20px;">
                                                <div class="text-lg my-1 my-lg-0">
                                                   
                                                    <a href="add_blog" class="btn btn-danger waves-effect waves-light" ><i class="mdi mdi-plus-circle me-1"></i> Add Blog</a>
                                                </div>
                                            </div>
                                    <div class="card-body">
                                        <!-- <h4 class="header-title">Blog List</h4> -->
                                        <table id="basic-datatable1" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Blog Title</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                
                                            <?php
                                             $count = 0;
                                             foreach($temp as $row){  
                                                $count++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $row->blog_title ;?></td>
                                                    <td><?php echo $row->description;?></td>
                                            <td><img src="<?php echo base_url('uploads/'.$row->image); ?>" alt="product-pic"  class="img-fluid" width="120px" height="100px" /></td>
                                                    <td><?=  anchor("BlogController/edit_blog/{$row->id}",'Edit',['class'=>'btn btn-primary']);?></td>
                                                    <td><?= anchor("BlogController/delete_blog/{$row->id}",'Delete',['class'=>'btn btn-danger']);?></td>
                                                </tr>
                                              
                                               
                                                <?php } ?>
                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->

        
            </div>
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
                $('#basic-datatable1').DataTable();
            } );
        </script>



            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
