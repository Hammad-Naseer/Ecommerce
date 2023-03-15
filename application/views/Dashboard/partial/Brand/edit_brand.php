

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
                                    <h4 class="page-title">Edit Brand Form</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

              
                    


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Brand </h4>
                                       

                                        <form action="<?php echo base_url().'BrandController/updatebrand/'.$row->id ;?>" method="post">
                                        
                                            <div class="mb-3">
                                                <label for="example-input-small" class="form-label">Brand Name</label>
                                                <input type="hidden" name="hidden" value="<?php echo $row->id ?>" id="hidden">
                                                <input type="text" id="brand_name" value="<?php echo $row->brand_name ?>" name="brand_name" class="form-control form-control-sm" placeholder="Add Category">
                                            </div>

                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button> 
                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                          
                        </div>
                        <!-- end row -->


                      
                 


                      
                



                   


                    
        
                        <!-- RADIOS -->
        
                        
                        
                    </div> <!-- container -->

                </div> <!-- content -->

         


          
    
     