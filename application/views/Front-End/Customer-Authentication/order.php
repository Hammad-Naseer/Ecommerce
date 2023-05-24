<?php
echo require_once  APPPATH . ('views\Front-End\header.php');
?>
<link href="<?php echo base_url(); ?>assets/profile/css/styles.css" rel="stylesheet" />
<style>
    /* Import Font Dancing Script */
    @import url(https://fonts.googleapis.com/css?family=Dancing+Script);

    * {
        margin: 0;
    }



    /* NavbarTop */
    .navbar-top {
        background-color: #fff;
        color: #333;
        box-shadow: 0px 4px 8px 0px grey;
        height: 70px;
    }

    .title {
        font-family: 'Dancing Script', cursive;
        padding-top: 15px;
        position: absolute;
        left: 45%;
    }

    .navbar-top ul {
        float: right;
        list-style-type: none;
        margin: 0;
        overflow: hidden;
        padding: 18px 50px 0 40px;
    }

    .navbar-top ul li {
        float: left;
    }

    .navbar-top ul li a {
        color: #333;
        padding: 14px 16px;
        text-align: center;
        text-decoration: none;
    }

    .icon-count {
        background-color: #ff0000;
        color: #fff;
        float: right;
        font-size: 11px;
        left: -25px;
        padding: 2px;
        position: relative;
    }

    /* End */

    /* Sidenav */
    .sidenav {
        background-color: #fff;
        color: #333;
        border-bottom-right-radius: 25px;
        height: 86%;
        left: 0;
        overflow-x: hidden;
        padding-top: 20px;
        position: absolute;
        top: 70px;
        width: 250px;
    }

    .profile {
        margin-bottom: 20px;
        margin-top: -12px;
        text-align: center;
    }

    .profile img {
        border-radius: 50%;
        box-shadow: 0px 0px 5px 1px grey;
    }

    .name {
        font-size: 20px;
        font-weight: bold;
        padding-top: 20px;
    }

    .job {
        font-size: 16px;
        font-weight: bold;
        padding-top: 10px;
    }

    .url,
    hr {
        text-align: center;
    }

    .url hr {
        margin-left: 20%;
        width: 60%;
    }

    .url a {
        color: #818181;
        display: block;
        font-size: 20px;
        margin: 10px 0;
        padding: 6px 8px;
        text-decoration: none;
    }

    .url a:hover,
    .url .active {
        background-color: #e8f5ff;
        border-radius: 28px;
        color: #000;
        margin-left: 14%;
        width: 65%;
    }

    /* End */

    /* Main */
    .main {
        margin-top: 2%;
        margin-left: 29%;
        font-size: 28px;
        padding: 0 10px;
        width: 58%;
    }

    .main h2 {
        color: #333;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .main .card {
        background-color: #fff;
        border-radius: 18px;
        box-shadow: 1px 1px 8px 0 grey;
        height: auto;
        margin-bottom: 20px;
        padding: 20px 0 20px 50px;
    }

    .main .card table {
        border: none;
        font-size: 16px;
        height: 270px;
        width: 80%;
    }

    .edit {
        position: absolute;
        color: #e7e7e8;
        right: 14%;
    }

    .social-media {
        text-align: center;
        width: 90%;
    }

    .social-media span {
        margin: 0 10px;
    }

    .fa-facebook:hover {
        color: #4267b3 !important;
    }

    .fa-twitter:hover {
        color: #1da1f2 !important;
    }

    .fa-instagram:hover {
        color: #ce2b94 !important;
    }

    .fa-invision:hover {
        color: #f83263 !important;
    }

    .fa-github:hover {
        color: #161414 !important;
    }

    .fa-whatsapp:hover {
        color: #25d366 !important;
    }

    .fa-snapchat:hover {
        color: #fffb01 !important;
    }

    /* End */
</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="<?php echo base_url(); ?>assets/profile/js/scripts.js"></script>

<div class="jumbotron">
    <div class="container">
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

        <div class="row">
            <div class="col-lg-4">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo  base_url(); ?>profile">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo  base_url(); ?>order_view">Order</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo  base_url(); ?>order_review_view">Review</a>



                </div>
            </div>

            <div class="col-lg-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Order_Number</th>
                            <th scope="col">Total</th>
                            <th scope="col">Order Status</th>
                            <th scope="col">Payement Method</th>
                            <th scope="col">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 0;
                        foreach ($order_list as $data) {
                            $count++;
                        ?>
                            <tr>
                                <th scope="row"><?php echo $count ?></th>
                                <td>UB#01<?php echo $data['id'] ?></td>
                                <td><?php echo $data['grand_total'] ?></td>
                                <td><?php echo $data['status'] ?> </td>
                                <td><?php echo $data['payement_method'] ?></td>
                                <td><a href="#" onclick="fetch_data_order(<?= $data['id'] ?>)" data-toggle="modal" data-target="#completeModal"><i class="fa fa-eye" style="font-size:24px;" aria-hidden="true"></i></a> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<script>
    function fetch_data_order(orderID) {
        $.ajax({
            url: "<?php echo base_url() ?>OrderController/getOrderDetail",
            type: "POST",
            data: {
                'id': orderID
            },
            success: function(dataResult) {
           // console.log(dataResult);
                $('#orderData').html(dataResult);
            }
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

<?php
echo require_once  APPPATH . ('views\Front-End\footer.php');
?>