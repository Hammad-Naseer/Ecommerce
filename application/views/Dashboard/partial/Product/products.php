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
                                            <li class="breadcrumb-item active">Products</li> -->
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Products</h4>
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

                                                <?php if($error =$this->session->flashdata('Product')):
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
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <!-- <div class="col-auto">
                                                <form class="d-flex flex-wrap align-items-center">
                                                    <label for="inputPassword2" class="visually-hidden">Search</label>
                                                    <div class="me-3">
                                                        <input type="search" class="form-control my-1 my-lg-0" id="inputPassword2" placeholder="Search...">
                                                    </div>
                                                    <label for="status-select" class="me-2">Sort By</label>
                                                    <div class="me-sm-3">
                                                        <select class="form-select my-1 my-lg-0" id="status-select">
                                                            <option selected="">All</option>
                                                            <option value="1">Popular</option>
                                                            <option value="2">Price Low</option>
                                                            <option value="3">Price High</option>
                                                            <option value="4">Sold Out</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div> -->
                                            <div class="col-auto">
                                                <div class="text-lg-end my-1 my-lg-0">
                                                    <!-- <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button> -->
                                                    <a href="add_product" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle me-1"></i> Add New Product</a>
                                                </div>
                                            </div><!-- end col-->
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row d-flex"> 
                      <?php //print_r($temp); ?>
                             <?php foreach($temp as $row){ ?>
                            <div class="col-md-6 col-xl-3 ">
                          
                                <div class="card product-box" style="height: 500px;">
                                    <div class="card-body">
                                        <div class="product-action">
                                            <a href="<?php echo base_url('ProductController/edit_product/'.$row->id); ?>" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                            <a href="<?php echo base_url('ProductController/delete_product/'.$row->id);?>" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                            <a href="<?php echo base_url('Front_endController/chat_list/'.$row->id);?>" class="btn btn-info btn-xs waves-effect waves-light"><i class="fab fa-rocketchat"></i></a>
                                        </div>
    
                                        <div class="bg-light">
                                            <img src="<?php echo base_url('uploads/'.$row->image); ?>" alt="product-pic"  class="img-fluid" />
                                           
                                        </div>
                                        
                                        <div class="product-info">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark"><?php echo $row->product_title; ?></a> </h5>
                                                    <div class="text-warning mb-2 font-13">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h5 class="m-0"> <span class="text-muted"> Stocks :50<?php //echo $row->status; ?></span></h5>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="product-price-tag">
                                                        $39
                                                    </div>
                                                       <span style="color: red;">Dis-Price:</span> <?php echo $row->discount_price ?>
                                                </div>
                                            </div> <!-- end row -->
                                        </div> <!-- end product info-->
                                    </div>
                                </div> <!-- end card-->
                               
                            </div> <!-- end col-->
                            <?php } ?>
                    
                            
                        <!-- end row-->

                        <!-- <div class="row">
                            <div class="col-12">
                                <ul class="pagination pagination-rounded justify-content-end mb-3">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </div> 
                        </div> -->
                        <!-- end row-->
                        
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