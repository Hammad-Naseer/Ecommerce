<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

<!-- Plugins css-->
<link href="<?php echo base_url();?>assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />

<!-- App css -->
<link href="<?php echo base_url(); ?>assets/css/config/material/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	    <link href="<?php echo base_url(); ?>assets/css/config/material/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

<!-- icons -->
<link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
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
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit/Adv Banner </h4>
                                    <?php  if($this->session->flashdata('message')){ ?>
					<div class="alert alert-success">
						<?php echo $this->session->flashdata('message') ?>
					</div>
					<?php }?>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                   
                    <form action="<?php echo  base_url();?>SettingController/update_banner_data" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                  
                                        <div class="mb-3">
                                            <label for="product-name" class="form-label">Add Title<span class="text-danger">*</span></label>
                                            <input type="hidden" name="hidden" value="<?php echo $row->id ?>" id="hidden">
                                            <input type="title" name="title" id="title" class="form-control" value="<?php echo $row->title ?>" placeholder="Add  Company Email">
                                            <?php echo form_error('title',"<div class='error' style='color:red;'>","</div>"); ?>  
                                        </div>
                                    </div>                                  
                                </div> <!-- end card -->                              
                            </div> <!-- end col -->   
                            <div class="col-lg-6">                               
                                <div class="card">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Logo Images</h5>

                                        <form action="" method="" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews">
                                       
                                            <input type="hidden" name="image" class="form-control" value="<?php echo $row->image;  ?>">
                                                <input type="file" id="image" name="image" value="<?php echo $row->image ?>" class="form-control form-control-sm" placeholder="Image">
                                                <img src="<?php echo base_url('uploads/'.$row->image); ?>" width="80px" height="80px" alt="product-pic" class="img-fluid" />
                                            </div>                                         
                                        
                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>                                     
                                    </div>
                                </div> <!-- end col-->
                                </div> <!-- end col-->               
                            </div> <!-- end col-->
                            <div class="row">
                            <div class="col-12">
                                <div class="mb-3">                                
                                    <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Update</button>                                  
                                </div>
                            </div> <!-- end col -->
                        </div>
                        </div>             
                        <!-- end row -->                     
                    </form>               
                        <!-- end row -->
                        <!-- file preview template -->
                        <div class="d-none" id="uploadPreviewTemplate">
                            <div class="card mt-1 mb-0 shadow-none border">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                        </div>
                                        <div class="col ps-0">
                                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                            <p class="mb-0" data-dz-size></p>
                                        </div>
                                        <div class="col-auto">
                                            <!-- Button -->
                                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                <i class="dripicons-cross"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    </div> <!-- container -->
                </div> <!-- content -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
           <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/vendor.min.js"></script>
<!-- Select2 js-->
<script src="<?php echo base_url();?>assets/libs/select2/js/select2.min.js"></script>
<!-- Dropzone file uploads-->
<script src="<?php echo base_url();?>assets/libs/dropzone/min/dropzone.min.js"></script>

<!-- Quill js -->
<script src="<?php echo base_url();?>assets/libs/quill/quill.min.js"></script>

<!-- Init js-->
<script src="<?php echo base_url();?>assets/js/pages/form-fileuploads.init.js"></script>

<!-- Init js -->
<script src="<?php echo base_url();?>assets/js/pages/add-product.init.js"></script>

<!-- App js -->
<script src="<?php echo base_url();?>assets/js/app.min.js"></script>
<script>
    $("#snow-editor").on('keyup',function(){
        desc = $('.ql-editor',this).html();
        $("[name='description']").val(desc);
    });

    
</script>

  
