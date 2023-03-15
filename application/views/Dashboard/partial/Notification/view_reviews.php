  <!-- third party css -->
  <link href="<?php echo base_url(); ?>assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
        <style>
                                  

                                  * {
                                  -webkit-box-sizing:border-box;
                                  -moz-box-sizing:border-box;
                                  box-sizing:border-box;
                                  }
          
                                  *:before, *:after {
                                  -webkit-box-sizing: border-box;
                                  -moz-box-sizing: border-box;
                                  box-sizing: border-box;
                                  }
          
                                  .clearfix {
                                  clear:both;
                                  }
          
                                  .text-center {text-align:center;}
          
                                  a {
                                  color: tomato;
                                  text-decoration: none;
                                  }
          
                                  a:hover {
                                  color: #2196f3;
                                  }
          
                                  pre {
                                  display: block;
                                  padding: 9.5px;
                                  margin: 0 0 10px;
                                  font-size: 13px;
                                  line-height: 1.42857143;
                                  color: #333;
                                  word-break: break-all;
                                  word-wrap: break-word;
                                  background-color: #F5F5F5;
                                  border: 1px solid #CCC;
                                  border-radius: 4px;
                                  }
          
                                  .header {
                                  padding:20px 0;
                                  position:relative;
                                  margin-bottom:10px;
                                  
                                  }
          
                                  .header:after {
                                  content:"";
                                  display:block;
                                  height:1px;
                                  background:#eee;
                                  position:absolute; 
                                  left:30%; right:30%;
                                  }
          
                                  .header h2 {
                                  font-size:3em;
                                  font-weight:300;
                                  margin-bottom:0.2em;
                                  }
          
                                  .header p {
                                  font-size:14px;
                                  }
          
          
          
                                  #a-footer {
                                  margin: 20px 0;
                                  }
          
                                  .new-react-version {
                                  padding: 20px 20px;
                                  border: 1px solid #eee;
                                  border-radius: 20px;
                                  box-shadow: 0 2px 12px 0 rgba(0,0,0,0.1);
                                  
                                  text-align: center;
                                  font-size: 14px;
                                  line-height: 1.7;
                                  }
          
                                  .new-react-version .react-svg-logo {
                                  text-align: center;
                                  max-width: 60px;
                                  margin: 20px auto;
                                  margin-top: 0;
                                  }
          
          
          
          
          
                                  .success-box {
                                  margin:50px 0;
                                  padding:10px 10px;
                                  border:1px solid #eee;
                                  background:#f9f9f9;
                                  }
          
                                  .success-box img {
                                  margin-right:10px;
                                  display:inline-block;
                                  vertical-align:top;
                                  }
          
                                  .success-box > div {
                                  vertical-align:top;
                                  display:inline-block;
                                  color:#888;
                                  }
          
          
          
                                  /* Rating Star Widgets Style */
                                  .rating-stars ul {
                                  list-style-type:none;
                                  padding:0;
                                  
                                  -moz-user-select:none;
                                  -webkit-user-select:none;
                                  }
                                  .rating-stars ul > li.star {
                                  display:inline-block;
                                  
                                  }
          
                                  /* Idle State of the stars */
                                  .rating-stars ul > li.star > i.fa {
                                  font-size:2.5em; /* Change the size of the stars */
                                  color:#ccc; /* Color on idle state */
                                  }
          
                                  /* Hover state of the stars */
                                  .rating-stars ul > li.star.hover > i.fa {
                                  color:#FFCC36;
                                  }
          
                                  /* Selected state of the stars */
                                  .rating-stars ul > li.star.selected > i.fa {
                                  color:#FF912C;
                                  }
          
          
                      </style>
        </style>
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
                                    <h4 class="page-title">All Reviews</h4>
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
                                                <!-- <a href="Add_inventory" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Inventory</a> -->
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-end">
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped dt-responsive nowrap w-100" id="basic-datatable3">
                                                <thead>
                                                    <tr>
                                                         <th>#</th>
                                                        <th>Comments</th>
                                                        <th>stars</th>
                                                        <th>Date </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <?php
                                                        $count=0;
                                                        foreach($data as $temp){ 
                                                            $count++;?>
                                                            <tr>
                                                            <td><?php echo $count ?></td>
                                                            <td><?php echo $temp['Comment']; ?></td>
                                                            <td>
                                                         <div class='rating-stars'>
                                                            <ul id='stars' name="stars">
                                                                <?php for($i=0;$i<$temp['stars'];$i++): ?>
                                                                    <li class='star selected' title='Poor' value="1" data-value='1'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                    </li>  
                                                                <?php endfor; ?>
                                                            </ul> 
                                                        </div>
                                                            </td>
                                                            <td><?php echo date('d M y H:i:s',strtotime($temp['date'])) ?></td>
                                                          

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
                $('#basic-datatable3').DataTable();
            } );
        </script>