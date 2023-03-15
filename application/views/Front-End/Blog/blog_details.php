<?php
echo require_once  APPPATH . ('views\Front-End\header.php');
?>

<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                        <h2><?= $single_data->blog_title ?></h2>
                        <p>travel <span> <?= $single_data->date ?></span></p>
                    </div>
                    <div class="blog-large-pic">
                        <img src="<?php echo base_url('uploads/'.$single_data->image); ?>" alt="">
                    </div>
                    <div class="blog-detail-desc">
                        <p>
                            <?= $single_data->description ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
echo require_once  APPPATH . ('views\Front-End\footer.php');
?>