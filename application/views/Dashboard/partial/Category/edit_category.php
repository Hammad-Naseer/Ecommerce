

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
                                    <h4 class="page-title">Edit Category Form</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

              
                    


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Add Category</h4>
                                        <?php if($error =$this->session->flashdata('Category')): ?>
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="alert alert-success">
                                                        <?php echo $error ?>
                                                </div>
                                                </div>
                                                </div>

                                                    <?php endif ?>

                                        <form  action="<?php echo base_url().'CategoryController/updatecategory/'.$row->id ;?>" method="post">
                                       
                                       
                                            <div class="mb-3">
                                                <label for="example-input-small" class="form-label" >Category Name</label>
                                                <input type="hidden" name="hidden" value="<?php echo $row->id ?>" id="hidden">
                                                <input type="text" id="category_name" name="category_name" value="<?php echo $row->category_name ?>" class="form-control form-control-sm" placeholder="Add Category" required>
                                            </div>

                                            <div class="mb-3">
                                                        <label for="example-select" class="form-label">Parent ID</label>
                                                        <select class="form-select" id="parent_id" name="parent_id" required>
                                                            <option value="0">Head</option>
                                                            <?php
                                                            $q ="select * from category";
                                                                $category_arr = $this->db->query($q)->result_array();
                                                                foreach($category_arr as $row){
                                                                    ?>
                                                                    
                                                                    <option value="<?php echo  $row['id'];?>"><?php echo  $row['category_name'];?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                         
                                                        </select>
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

         


          
    
     