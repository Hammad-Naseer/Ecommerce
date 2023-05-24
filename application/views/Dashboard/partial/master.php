<?php include_once "header.php";?>
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
                                            <li class="breadcrumb-item active">Dashboard</li> -->
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                    <?php if($error =$this->session->flashdata('login_success')): ?>
                                            <!-- <div class="row">
                                            <div class="col-lg-4">
                                                <div class="alert alert-success">
                                                <?php //echo $error ?>
                                        </div>
                                        </div>
                                        </div> -->
                           <?php endif ?>
                                </div>
                            </div>
                        </div>      
                        <!-- end page title --> 
                       <?php print_r($_SESSION); ?>
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded bg-soft-primary">
                                                    <i class="dripicons-wallet font-24 avatar-title text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                              
                                                    <?php 
                                                    $category = "SELECT * FROM category";
                                                    $category_arr = $this->db->query($category);

                                                   $Total_category =$category_arr->num_rows();
                                                    ?>
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $Total_category; ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Category</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded bg-soft-success">
                                                    <i class="dripicons-basket font-24 avatar-title text-success"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                <?php 
                                                    $brand = "SELECT * FROM brand";
                                                    $brand_arr = $this->db->query($brand);
                                                    $Total_brand =$brand_arr->num_rows();
                                                    ?>
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $Total_brand; ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Brand</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded bg-soft-info">
                                                    <i class="dripicons-store font-24 avatar-title text-info"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                <?php 
                                                    $product = "SELECT * FROM product";
                                                    $product_arr = $this->db->query($product);

                                                   $Total_product =$product_arr->num_rows();
                                                    ?>
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $Total_product; ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Products</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded bg-soft-warning">
                                                    <i class="dripicons-user-group font-24 avatar-title text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                <?php 
                                                    $user = "SELECT * FROM users";
                                                    $user_arr = $this->db->query($user);

                                                   $Total_user =$user_arr->num_rows();
                                                    ?>
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $Total_user; ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Users</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        


                        <div class="row">
                            <!-- <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Transaction History</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0">Name</th>
                                                        <th class="border-top-0">Card</th>
                                                        <th class="border-top-0">Date</th>
                                                        <th class="border-top-0">Amount</th>
                                                        <th class="border-top-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="../assets/images/users/user-2.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                            <span class="ms-2">Imelda J. Stanberry</span>
                                                        </td>
                                                        <td>
                                                            <img src="../assets/images/cards/visa.png" alt="user-card" height="24" />
                                                            <span class="ms-2">**** 3256</span>
                                                        </td>
                                                        <td>27.03.2018</td>
                                                        <td>$345.98</td>
                                                        <td><span class="badge rounded-pill bg-danger">Failed</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="../assets/images/users/user-3.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                            <span class="ms-2">Francisca S. Lobb</span>
                                                        </td>
                                                        <td>
                                                            <img src="../assets/images/cards/master.png" alt="user-card" height="24" />
                                                            <span class="ms-2">**** 8451</span>
                                                        </td>
                                                        <td>28.03.2018</td>
                                                        <td>$1,250</td>
                                                        <td><span class="badge rounded-pill bg-success">Paid</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="../assets/images/users/user-1.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                            <span class="ms-2">James A. Wert</span>
                                                        </td>
                                                        <td>
                                                            <img src="../assets/images/cards/amazon.png" alt="user-card" height="24" />
                                                            <span class="ms-2">**** 2258</span>
                                                        </td>
                                                        <td>28.03.2018</td>
                                                        <td>$145</td>
                                                        <td><span class="badge rounded-pill bg-success">Paid</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="../assets/images/users/user-4.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                            <span class="ms-2">Dolores J. Pooley</span>
                                                        </td>
                                                        <td>
                                                            <img src="../assets/images/cards/american-express.png" alt="user-card" height="24" />
                                                            <span class="ms-2">**** 6950</span>
                                                        </td>
                                                        <td>29.03.2018</td>
                                                        <td>$2,005.89</td>
                                                        <td><span class="badge rounded-pill bg-danger">Failed</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="../assets/images/users/user-5.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                            <span class="ms-2">Karen I. McCluskey</span>
                                                        </td>
                                                        <td>
                                                            <img src="../assets/images/cards/discover.png" alt="user-card" height="24" />
                                                            <span class="ms-2">**** 0021</span>
                                                        </td>
                                                        <td>31.03.2018</td>
                                                        <td>$24.95</td>
                                                        <td><span class="badge rounded-pill bg-success">Paid</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>  end table-responsive -->
                                    </div>
                                </div> <!-- end card-->
                            </div> 
                             <!-- end col-->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Recent Products</h4>

                                        <?php //echo print_r($recent); ?>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="border-top-0">Product</th>
                                                        <th class="border-top-0">Category</th>
                                                        <th class="border-top-0">Added Date</th>
                                                        <th class="border-top-0">Amount</th>
                                                        <!-- <th class="border-top-0">Status</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                       if(!empty($recent)) {
                                                     foreach($recent as $data){ ?>
                                                    <tr>
                                                        <td>
                                                            <img src="<?php echo base_url('uploads/'.$data['image']); ?>" alt="product-pic" height="36" />
                                                                
                                                            <span class="ms-2"><?php echo $data['product_title'] ?></span>
                                                        </td>
                                                        <td>
                                                        <?php echo $data['category_name'] ?>
                                                        </td>
                                                        <td><?php echo $data['date'] ?></td>
                                                        <td><?php echo $data['grand_total'] ?></td>
                                                        <td><span class="badge bg-soft-success text-success"><?php //echo $data['status'] ?></span></td>
                                                    </tr>
                                                  <?php  }
                                                   } else { ?>
                                                    <tr>
                                                        <th colspan="5" class="text-center">Product(s) not found...</th>
                                                    </tr>
                                                <?php } ?>
                                                
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive -->


                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
            <?php include_once "footer.php";?>
                
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
