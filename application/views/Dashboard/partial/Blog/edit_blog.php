<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

<!-- Plugins css-->
<link href="<?php echo base_url();?>assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />

<!-- App css -->
<link href="<?php echo base_url();?>assets/css/config/material/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
<link href="<?php echo base_url();?>assets/css/config/material/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

<link href="<?php //echo base_url();?>assets/css/config/material/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
<link href="<?php //echo base_url();?>assets/css/config/material/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

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
                                        <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Basic Elements</li>
                                        </ol> -->
                                    </div>
                                    <h4 class="page-title">Edit Blog</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Add Category</h4>
                                        <?php if($error =$this->session->flashdata('Blog')): ?>
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="alert alert-success">
                                                        <?php echo $error ?>
                                                </div>
                                                </div>
                                                </div>

                                                    <?php endif ?>

                                        <form  action="<?php echo base_url().'BlogController/update_blog_item/'.$row->id ;?>" method="post">
                                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                       
                                            
                                        <div class="mb-3">
                                                <label for="example-input-small" class="form-label" >Blog Title</label>
                                                
                                                <input type="hidden" name="hidden" value="<?php echo $row->id ?>" id="hidden">
                                                <input type="text" id="blog_title" name="blog_title" value="<?php echo $row->blog_title ?>" class="form-control form-control-sm" placeholder="Add Category">
                                            </div> 
                                            <div class="mb-3">
                                            <input type="hidden" name="description">
                                            <label for="product-description"  class="form-label">Blog Description  <span class="text-danger">*</span></label>
                                            <!-- <textarea class="form-control" name="description" id="product-description" rows="3" placeholder="Please enter description"></textarea> -->
                                        
                                            <div id="snow-editor"  style="height: 150px;" required>
                                             <?php echo $row->description; ?>
                                            </div> <!-- end Snow-editor-->
                                            <?php
                                                            //echo product_description($row->description);
                                                            ?>
                                                        </select>
                                        </div> 
                                            <div class="mb-3">
                                                <label for="example-input-small" class="form-label" > Blog Image </label>
                                            <input type="hidden" name="image" class="form-control" value="<?php echo $row->image;  ?>">
                                                <input type="file" id="image" name="image" value="<?php echo $row->image ?>" class="form-control form-control-sm" placeholder="Image">
                                                <img src="<?php echo base_url('uploads/'.$row->image); ?>" width="80px" height="80px" alt="product-pic" class="img-fluid" />
                                            </div>                       
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                    </div>
                                    </div>
                                    </div>
                                    </div>

                                        </form>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->  
                        </div>
                        <!-- end row -->                        
                    </div> <!-- container -->
                </div> <!-- content -->

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
