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
                                    <h4 class="page-title">Add / Edit Product</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                   
                    <form action="ProductController/insert_product" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="mb-3">
                                            <label for="product-name" class="form-label">Product Title <span class="text-danger">*</span></label>
                                            <input type="text" name="product_title" id="product-name" class="form-control" placeholder="Product Title" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-category" class="form-label">Categories <span class="text-danger">*</span></label>
                                            <select class="form-control select2" name="category_id" id="product-category" required>
                                                <option value="0">Select</option>
                                                <optgroup label="Category Item">
                                                <?php
                                                            $q ="select * from category";
                                                                $category_arr = $this->db->query($q)->result_array();
                                                                foreach($category_arr as $row){
                                                                    ?>
                                                                    
                                                                    <option value="<?php echo  $row['id'];?>"><?php echo  $row['category_name'];?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                </optgroup>
                                              
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                                        <label for="example-select" class="form-label">Brand<span class="text-danger">*</span></label>
                                                        <select class="form-select" id="example-select" name="brand_id" required>
                                                        <option class="disable" value="0">Select Brands</option>
                                                        <?php
                                                            $q ="select * from brand";
                                                                $brand_arr = $this->db->query($q)->result_array();
                                                                foreach($brand_arr as $row){
                                                                    ?>
                                                                    
                                                                    <option value="<?php echo  $row['id'];?>"><?php echo  $row['brand_name'];?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                      

                                        <div class="mb-3">
                                            <input type="hidden" name="description">
                                            <label for="product-description"  class="form-label">Product Description  <span class="text-danger">*</span></label>
                                            <!-- <textarea class="form-control" name="description" id="product-description" rows="3" placeholder="Please enter description"></textarea> -->
                                        
                                            <div id="snow-editor"  style="height: 150px;" required>
                                            </div> <!-- end Snow-editor-->
                                        </div>
                                        <div class="mb-3">
                                                        <label for="example-select" class="form-label">Status<span class="text-danger">*</span></label>
                                                        <select class="form-select" name="status" id="example-select" required>
                                                        <option class="disable">Select Status</option>
                                                            <option value="1">Active</option>
                                                            <option value="0" >InActive</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                            <label for="date" class="form-label">Date <span class="text-danger">*</span></label>
                                            <input type="date" name="date" id="date" class="form-control" placeholder="Product Date" required> 
                                        </div>
                                        <!-- <div>
                                            <label class="form-label">Comment</label>
                                            <textarea class="form-control" rows="3" placeholder="Please enter comment"></textarea>
                                        </div> -->
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>

                                        <form action="" method="" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                            data-upload-preview-template="#uploadPreviewTemplate">
                                            <div class="fallback">
                                              
                                                <input name="image" type="file" required multiple />
                                            </div>

                                           
                                      
                                        </form>
                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                                        <div class="mb-3">
                                            <label for="discount_price" class="form-label">Discount Price <span class="text-danger">*</span></label>
                                            <input type="text" name="discount_price" id="discount_price" class="form-control" placeholder="Discount Price" required>
                                        </div>
                                    </div>
                                </div> <!-- end col-->

                                <div class="card">
                                    <div class="card-body">

                                  

                                    <div class="mb-3">
                                                <label class="form-label">Feature <span class="text-danger">*</span></label>

                                                <div class="form-check mb-1">
                                                    <input type="checkbox" name="is_featured" value="1" id="feature"  required="" class="form-check-input">
                                                    <label for="Feature"></label>
                                                </div>
                                                <!-- <div class="form-check">
                                                    <input type="checkbox" name="is_featured" id="feature1" value="feature1" class="form-check-input">
                                                    <label for="Feature">1</label>
                                                </div> -->
                                            </div>
                                    <div class="mb-3">
                                                <label class="form-label">Trending <span class="text-danger">*</span></label>

                                                <div class="form-check mb-1">
                                                    <input type="checkbox" name="trending" value="1" id="trending"  required="" class="form-check-input">
                                                    <label for="trending"></label>
                                                </div>
                                                <!-- <div class="form-check">
                                                    <input type="radio" name="trending" id="trending1" value="1" class="form-check-input">
                                                    <label for="trending">1</label>
                                                </div> -->
                                            </div>

                                              

                                            <div class="mb-3">
                                                <label class="form-label">Best Sale <span class="text-danger">*</span></label>

                                                <div class="form-check mb-1">
                                                    <input type="checkbox" name="best_sale" value="1" id="best_sale"  required="" class="form-check-input">
                                                    <label for="best_sale"></label>
                                                </div>
                                                <!-- <div class="form-check">
                                                    <input type="radio" name="best_sale" id="best_sale1" value="1" class="form-check-input">
                                                    <label for="best_sale">1</label>
                                                </div> -->
                                            </div>
                                              
                                            <div class="input_fields_wrap">
                                                <div>
                                                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Attribute Form</h5>
                                                    <div class="row">
                                                       
                                                        <div class="col-lg-3 mb-3">
                                                        <label class="form-label">Key <span class="text-danger">*</span></label>
                                                             
                                                        <input type="text" name="key_val[]" id="key_value[]" class="form-control" placeholder="key " >
                                                        </div>
                                                        <div class="col-lg-3">
                                                        <label class="form-label"> Value <span class="text-danger">*</span></label>

                                                        <input type="text" name="value[]" id="value[]" class="form-control" placeholder="Value " >
                                                        </div>
                                                        <div class="col-lg-3">
                                                        <label class="form-label"> Add Button <span class="text-danger">*</span></label>

                                                        <button type="text"  class="add_field_button form-control">Add More</button>
                                                        </div>
                                           

                                                    <!-- <input type="text" name="mytext2[]" placeholder="product_id">
                                                    <input type="text" name="mytext3[]" placeholder="key_val">
                                                    <input type="text" name="mytext4[]" placeholder="value"> -->
                                                    <!-- <button class="add_field_button">Add More Fields</button> -->
                                                    </div>
                                                </div>
                                           </div>
                                                                        
                                      
                                   

                                    </div>
                                </div> <!-- end card -->

                            </div> <!-- end col-->

                            <div class="row">
                            <div class="col-12">
                                <div class=" mb-3">
                                    <!-- <button type="button" class="btn w-sm btn-light waves-effect">Cancel</button> -->
                                    <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                                    <!-- <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Delete</button> -->
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

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

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


   <script type="text/javascript">
 $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"> <div class="col-lg-3 mb-3"><input type="text" class="form-control" name="key_val[]" placeholder="Key Value"></div> <div class="col-lg-3 mb-3"><input type="text" class="form-control" name="value[]" placeholder="Value"></div><div class="col-lg-3 remove_field mb-3"><button href="#" class="form-control">Remove</button></div></div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

</script>
