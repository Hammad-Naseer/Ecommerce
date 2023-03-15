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
                                    <h4 class="page-title">Add/Company Data </h4>
                                    <?php  if($this->session->flashdata('message')){ ?>
					<div class="alert alert-success">
						<?php echo $this->session->flashdata('message') ?>
					</div>
					<?php }?>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                   
                    <form action="<?php echo  base_url();?>SettingController/update_data" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="mb-3">
                                            <label for="product-name" class="form-label">Company Email<span class="text-danger">*</span></label>
                              
                                            <input type="hidden" name="hidden" value="<?php echo $row->id ?>" id="hidden">
                                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $row->email ?>" placeholder="Add  Company Email">
                                            <?php echo form_error('email',"<div class='error' style='color:red;'>","</div>"); ?>  
                                        </div>
                                        <div class="mb-3">
                                            <label for="product-name" class="form-label">Company Contact<span class="text-danger">*</span></label>
                                            <input type="phone_number" name="phone_number" id="email" class="form-control" value="<?php echo $row->phone_number ?>" placeholder="Add  Company Email">
                                            <?php echo form_error('phone_number',"<div class='error' style='color:red;'>","</div>"); ?>  
                                        </div>
                                        <div class="mb-3">
                                            <input type="hidden" name="description">
                                            <label for="product-description"  class="form-label">Company Description  <span class="text-danger">*</span></label>
                                            <!-- <textarea class="form-control" name="description" id="product-description" rows="3" placeholder="Please enter description"></textarea> -->
                                        
                                            <div id="snow-editor"  style="height: 150px;">
                                            <?php echo $row->description ?>
                                            </div> <!-- end Snow-editor-->
                                            <?php echo form_error('description',"<div class='error' style='color:red;'>","</div>"); ?> 
                                        </div>

                                        <div class="mb-3">
                                                <label for="example-input-small" class="form-label" > Image </label>
                                            <input type="hidden" name="image" class="form-control" value="<?php echo $row->image;  ?>">
                                                <input type="file" id="image" name="image" value="<?php echo $row->image ?>" class="form-control form-control-sm" placeholder="Image">
                                                <img src="<?php echo base_url('uploads/'.$row->image); ?>" width="80px" height="80px" alt="product-pic" class="img-fluid" />
                                            </div> 

                                      
                                     
                                         <div class="mb-3">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" name="address"rows="3">
                                            <?php echo $row->address ?>
                                            </textarea>
                                            <?php echo form_error('address',"<div class='error' style='color:red;'>","</div>"); ?> 
                                        </div> 
                                         
                                    </div>
                                        
                                </div> <!-- end card -->
                                
                            </div> <!-- end col -->

                            

                            <div class="col-lg-6">
                                
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Social Media Link</h5>
                                        <div class="mb-3">
                                            <label for="product-name" class="form-label">Facebook<span class="text-danger">*</span></label>
                                            <input type="text" name="facebook_link" id="name" class="form-control"  value="<?php echo $row->facebook_link ?>"  placeholder="Add  Facebook Link">
                                            <?php echo form_error('facebook_link',"<div class='error' style='color:red;'>","</div>"); ?>  
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-name" class="form-label">Twiter<span class="text-danger">*</span></label>
                                            <input type="text" name="twiter_link" id="twiter_link" class="form-control" value="<?php echo $row->twiter_link ?>">
                                            <?php echo form_error('twiter_link',"<div class='error' style='color:red;'>","</div>"); ?>  
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-name" class="form-label">Indeed<span class="text-danger">*</span></label>
                                            <input type="text" name="indeed" id="twiter_link" class="form-control" value="<?php echo $row->twiter_link ?>" >
                                            <?php echo form_error('indeed',"<div class='error' style='color:red;'>","</div>"); ?>  
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-name" class="form-label">Pinterest<span class="text-danger">*</span></label>
                                            <input type="text" name="pinterest" id="pinterest" class="form-control" value="<?php echo $row->pinterest ?>" >
                                            <?php echo form_error('pinterest',"<div class='error' style='color:red;'>","</div>"); ?>  
                                        </div>
                                       
                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                                       
                                    </div>
                                </div> <!-- end col-->

                               

                            </div> <!-- end col-->
                         

                            <div class="row">
                            <div class="col-12">
                                <div class="text-center mb-3">
                                   
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

  
