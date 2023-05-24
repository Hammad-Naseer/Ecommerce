<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="<?php echo base_url(); ?>assets/profile/js/scripts.js"></script>

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
                                     
                                    </div>
                                    <h4 class="page-title">Orders</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-lg-8">
                                                <form class="d-flex flex-wrap align-items-center">
                                                    <label for="inputPassword2" class="visually-hidden">Search</label>
                                                    <!-- <div class="me-3">
                                                        <input type="search" class="form-control my-1 my-lg-0" id="inputPassword2" placeholder="Search...">
                                                    </div> -->
                                                    <!-- <label for="status-select" class="me-2">Status</label> -->
                                                    <!-- <div class="me-sm-3">
                                                        <select class="form-select form-select my-1 my-lg-0" id="status-select">
                                                            <option selected>Choose...</option>
                                                            <option value="1">Paid</option>
                                                            <option value="2">Awaiting Authorization</option>
                                                            <option value="3">Payment failed</option>
                                                            <option value="4">Cash On Delivery</option>
                                                            <option value="5">Fulfilled</option>
                                                            <option value="6">Unfulfilled</option>
                                                        </select>
                                                    </div> -->
                                                </form>                            
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-lg-end">
                                                    <!-- <button type="button" class="btn btn-danger waves-effect waves-light mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Add New Order</button> -->
                                                
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                <?php //echo print_r($order); ?>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                     
                                                        <th>Order ID</th>
                                                        <th>Products</th>
                                                        <th>Date</th>
                                                        <th>Total</th>
                                                        <th>Payment Method</th>
                                                        <th style="width: 125px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($order as $data){ ?>
                                                    <tr>
                                                        
                                                        <td><a href="ecommerce-order-detail.html" class="text-body fw-bold">#UB0<?php echo $data['id'] ?></a> </td>
                                                        <td>
                                                            <a href=""><img src="<?php echo base_url('uploads/'.$data['image']) ?>" alt="product-img" height="32" /></a>
                                                          
                                                        </td>
                                                        <td>
                                                        <?php echo date('d M y H:i:s',strtotime($data['date'])) ?>
                                                
                                                        </td>
                                                        
                                                        <td>
                                                           <?php echo $data['grand_total'] ?>
                                                        </td>
                                                        <td>
                                                        <?php echo $data['payement_method'] ?>
                                                        </td>
                                                       
                                                        <td>
                                                        <td>
                                                        <button type="button" class="btn btn-info" onclick="getOrderDetail_admin(<?= $data['id'] ?>)" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">
                                                        <i class="mdi mdi-eye"></i>
                                                        </button>
                                                            <!-- <a class="action-icon" href="#" onclick="getOrderDetail_admin(<?= $data['id'] ?>)" data-toggle="modal" data-target="#completeModal"><i class="mdi mdi-eye"></i></a> </td> -->
                                                        </td>
                                                    </tr>
                                                    <?php  }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->
                <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel"> Order Receipt </h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="orderData">
                                ...
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <!-- <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
            <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form method="POST" enctype="multipart/form-data" id="my-form">

                                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                                <div class="container bootdey text-center">
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="widget-box">
                                                <div class="widget-header widget-header-large">
                                                    <div class="widget-toolbar hidden-480">
                                                        <h4>View Info</h4>
                                                    </div>
                                                </div>
                                                <div class="widget-body" id="orderData">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
<script>
    function getOrderDetail_admin(orderID) {
        $.ajax({
            url: "<?php echo base_url() ?>OrderController/getOrderDetail_admin",
            type: "POST",
            data: {
                'id': orderID
            },
            success: function(dataResult) {
                $('#orderData').html(dataResult);
            }
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>