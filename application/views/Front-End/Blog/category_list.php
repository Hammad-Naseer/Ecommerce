<?php
echo require_once  APPPATH . ('views\Front-End\header.php');
?>
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
           
            <div class="col-lg-12 order-1 order-lg-2">
                
                <?php //echo $this->db->last_query(); ?>
                <div class="product-list">
                    <div class="row">
                   
                  <?php //print_r($list); ?>
                        <div class="col-lg-3 col-sm-6">
                          <?php if(!$list ){ ?>
                            <div class="text-center">
                            <h3 class="text-center"> Not data available</h3></div>
                            <?php } else{ ?>
                        <?php foreach($list as $row1){  ?>
                            
                            <div class="product-item">
                                <div class="pi-pic">
                                   
							 <img src="<?php echo base_url('uploads/'.$row1->image); ?>" alt="product-pic" width="100%" height="400%" class="img-fluid" />


                                    <div class="sale pp-sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                      
                                        <li class="w-icon active quick-view"><a href="#">+ Add to cart </a></li>
                                      
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"></div>
                                    <a href="#">
                                        <h5> <?php echo  $row1->product_title; ?></h5>
                                    </a>
                                    <div class="product-price">
                                    
                                        <span>  <?php echo  $row1->discount_price; ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <?php }?>
                            
                      
                            
                        </div>
                  
                      
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>
<?php
echo require_once  APPPATH . ('views\Front-End\footer.php');
?>