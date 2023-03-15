<?php
echo require_once  APPPATH . ('views\Front-End\header.php');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul class="filter-catagories">
                        <?php  $q = "select * from category";
                         $category_arr = $this->db->query($q)->result_array();
                        //  echo "<pre>";print_r($category_arr);
                         foreach($category_arr as $row){
                         ?>
                       <a class="text-black" href="<?php echo base_url(); ?>Front_endController/filter_category_list/<?= $row['id'] ?>" > <li><?php echo  $row['category_name'];?></li></a>
                        
                        <?php } ?>
                    </ul>
                </div>
                <form action="<?= base_url(); ?>Front_endController/shop_view" method="POST">
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <?php 
                    $query = "select * from brand";
                    $brand_arr = $this->db->query($query)->result_array();
                    foreach($brand_arr as $data){
                    ?>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin-<?= $data['id'] ?>">
                               <?= $data['brand_name'] ?>
                                <input type="checkbox" id="bc-calvin-<?= $data['id'] ?>" value="<?= $data['id'] ?>" name="barndIds[]">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <?php 
                    $data = "SELECT MIN(sale_price) as min_price, MAX(sale_price) as max_price  FROM inventory ";
                    $price = $this->db->query($data)->result_array();
                    $min = $price[0]['min_price'];
                    $max = $price[0]['max_price'];
                    ?>
                 
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" name="min_price" min=0 max="990000" id="minamount">
                                <input type="text" name="max_price" min=0 max="100000" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="<?= $min ?>" data-max="<?= $max ?>">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <button type="submit"  class="btn btn-warning">Filter</button>
                </div>
                </form>
                
             
                <div class="filter-widget">
                    <!-- <h4 class="fw-title">Tags</h4> -->
                    <!-- <div class="fw-tags">
                        <a href="#">Towel</a>
                        <a href="#">Shoes</a>
                        <a href="#">Coat</a>
                        <a href="#">Dresses</a>
                        <a href="#">Trousers</a>
                        <a href="#">Men's hats</a>
                        <a href="#">Backpack</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        
                        
                    </div>
                </div>
                <div class="product-list" id="filter_data">
                    <div class="row">
                            
                    <?php 
                      if (!empty($list)) {
                    foreach($list as $item){  ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
							<img src="<?php echo base_url('uploads/'.$item->image); ?>" alt="product-pic" width="100%" height="400%" class="img-fluid" />
                                    <div class="sale pp-sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul> 
                                    
                                        <li class="w-icon active quick-view"><a href="<?php echo  base_url(); ?>add_to_cart/<?= $item->product_id ?>">+ Add to cart  View</a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"><?php echo $item->category_name; ?></div>
                                    <a href="<?php echo  base_url() ?>CustomerController/category_products_listing/<?= $item->product_id ?>">
                                        <h5><?php echo $item->product_title; ?></h5>
                                    </a>
                                    <div class="product-price">
                                    <?php echo $item->sale_price; ?>
                                        <span><?php echo $item->discount_price; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } 
                        } else {?>
                        <tr>
                            <h2 colspan="5" class="text-center">Product(s) not Related..Brand &. Price Range</h2>
                            </tr>
                        <?php }?>
                       
                    </div>
                </div>
                <!-- <nav aria-label="..."> -->
  <!-- <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2<span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul> -->
<!-- </nav> -->
                <?php echo  $this->pagination->create_links(); ?>
              
            </div>
        </div>
    </div>
</section>


<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="<?php echo base_url(); ?>assets/front_end/img/logo-carousel/xlogo-1.png.pagespeed.ic.kC8RUBrHXN.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="<?php echo base_url(); ?>assets/front_end/img/logo-carousel/xlogo-2.png.pagespeed.ic.1_Hh2N9EaE.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="<?php echo base_url(); ?>assets/front_end/img/logo-carousel/xlogo-3.png.pagespeed.ic.HJeT8RC_FE.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="<?php echo base_url(); ?>assets/front_end/img/logo-carousel/xlogo-4.png.pagespeed.ic.yN_lBBd7am.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="<?php echo base_url(); ?>assets/front_end/img/logo-carousel/xlogo-5.png.pagespeed.ic.8iYnWLx4cl.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
echo require_once  APPPATH . ('views\Front-End\footer.php');
?>

<!-- <script>
    $(document).ready(function(){
        filterProducts();
    function filterProducts(){
        var min_price = $('#minamount').val();
        var max_price = $('#maxamount').val();
        alert(min_price + max_price );
        $.ajax({
            url:"<?php //echo base_url('Front_endController/shop_view'); ?>",
            type:"POST",
            data:{min_price:minamount,max_price:maxamount},
            success:function(data){
                $("#filter_data").html(data);
            }
        });
    }


});
</script> -->