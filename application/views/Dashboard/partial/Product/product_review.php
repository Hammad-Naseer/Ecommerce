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
                                    <h4 class="page-title">Product Review</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Product Review </h4>
                                        <?php if($error =$this->session->flashdata('Brand')): ?>
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="alert alert-success">
                                                        <?php echo $error ?>
                                                </div>
                                                </div>
                                                </div>
                                                    <?php endif ?>
                                        <form action="<?= base_url(); ?>ProductController/insert_review" method="post">
                                            <div class="col-lg-6 mb-3">
                                                <label for="example-input-small" class="form-label">Name</label>
                                                <input type="text" id="Name" name="Name" class="form-control form-control-sm" placeholder="Add Name">
                                                <?php echo form_error('Name',"<div class='error' style='color:red;'>","</div>"); ?>  
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label for="example-input-small" class="form-label">Comment </label>
                                                <input type="text" id="Comment" name="Comment" class="form-control form-control-sm" placeholder="Add Comment">
                                                <?php echo form_error('Comment',"<div class='error' style='color:red;'>","</div>"); ?>  

                                            </div>
                                             <div class="col-lg-6 mb-3">
                                                <label for="example-input-small" class="form-label">Rating </label>
                                                <input type="text" id="Rating" name="Rating" class="mdi mdi-star text-warning" ><i class="mdi mdi-star text-warning"></i></input>
                                                <?php echo form_error('Rating',"<div class='error' style='color:red;'>","</div>"); ?>  

                                             
                                            </div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                        </form>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        <!-- RADIOS --> 
                    </div> <!-- container -->
                </div> <!-- content -->

         


          
    
     