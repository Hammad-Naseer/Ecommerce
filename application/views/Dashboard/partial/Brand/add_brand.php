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
                                    <h4 class="page-title">Brand Form</h4>
                                    <?php //echo "<pre>"; echo print_r($_SESSION); ?>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Brand </h4>
                                        <?php if($error =$this->session->flashdata('Brand')): ?>
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="alert alert-success">
                                                        <?php echo $error ?>
                                                </div>
                                                </div>
                                                </div>
                                                    <?php endif ?>
                                        <form action="BrandController/insert_brand" method="post">
                                            <div class="col-lg-6 mb-3">
                                                <label for="example-input-small" class="form-label">Brand Name</label>
                                                <input type="text" id="brand_name" name="brand_name" class="form-control form-control-sm" placeholder="Add Brand">
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

         


          
    
     