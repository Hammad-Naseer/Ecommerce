<?php 
 echo require_once  APPPATH. ('views\Front-End\header.php');
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

                    .url, hr {
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

                    .url a:hover, .url .active {
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

       
           <style>
                                  

                                  * {
                                  -webkit-box-sizing:border-box;
                                  -moz-box-sizing:border-box;
                                  box-sizing:border-box;
                                  }
          
                                  *:before, *:after {
                                  -webkit-box-sizing: border-box;
                                  -moz-box-sizing: border-box;
                                  box-sizing: border-box;
                                  }
          
                                  .clearfix {
                                  clear:both;
                                  }
          
                                  .text-center {text-align:center;}
          
                                  a {
                                  color: tomato;
                                  text-decoration: none;
                                  }
          
                                  a:hover {
                                  color: #2196f3;
                                  }
          
                                  pre {
                                  display: block;
                                  padding: 9.5px;
                                  margin: 0 0 10px;
                                  font-size: 13px;
                                  line-height: 1.42857143;
                                  color: #333;
                                  word-break: break-all;
                                  word-wrap: break-word;
                                  background-color: #F5F5F5;
                                  border: 1px solid #CCC;
                                  border-radius: 4px;
                                  }
          
                                  .header {
                                  padding:20px 0;
                                  position:relative;
                                  margin-bottom:10px;
                                  
                                  }
          
                                  .header:after {
                                  content:"";
                                  display:block;
                                  height:1px;
                                  background:#eee;
                                  position:absolute; 
                                  left:30%; right:30%;
                                  }
          
                                  .header h2 {
                                  font-size:3em;
                                  font-weight:300;
                                  margin-bottom:0.2em;
                                  }
          
                                  .header p {
                                  font-size:14px;
                                  }
          
          
          
                                  #a-footer {
                                  margin: 20px 0;
                                  }
          
                                  .new-react-version {
                                  padding: 20px 20px;
                                  border: 1px solid #eee;
                                  border-radius: 20px;
                                  box-shadow: 0 2px 12px 0 rgba(0,0,0,0.1);
                                  
                                  text-align: center;
                                  font-size: 14px;
                                  line-height: 1.7;
                                  }
          
                                  .new-react-version .react-svg-logo {
                                  text-align: center;
                                  max-width: 60px;
                                  margin: 20px auto;
                                  margin-top: 0;
                                  }
          
          
          
          
          
                                  .success-box {
                                  margin:50px 0;
                                  padding:10px 10px;
                                  border:1px solid #eee;
                                  background:#f9f9f9;
                                  }
          
                                  .success-box img {
                                  margin-right:10px;
                                  display:inline-block;
                                  vertical-align:top;
                                  }
          
                                  .success-box > div {
                                  vertical-align:top;
                                  display:inline-block;
                                  color:#888;
                                  }
          
          
          
                                  /* Rating Star Widgets Style */
                                  .rating-stars ul {
                                  list-style-type:none;
                                  padding:0;
                                  
                                  -moz-user-select:none;
                                  -webkit-user-select:none;
                                  }
                                  .rating-stars ul > li.star {
                                  display:inline-block;
                                  
                                  }
          
                                  /* Idle State of the stars */
                                  .rating-stars ul > li.star > i.fa {
                                  font-size:2.5em; /* Change the size of the stars */
                                  color:#ccc; /* Color on idle state */
                                  }
          
                                  /* Hover state of the stars */
                                  .rating-stars ul > li.star.hover > i.fa {
                                  color:#FFCC36;
                                  }
          
                                  /* Selected state of the stars */
                                  .rating-stars ul > li.star.selected > i.fa {
                                  color:#FF912C;
                                  }
          
          
                      </style>
        </style>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url(); ?>assets/profile/js/scripts.js"></script>

<div class="jumbotron">
    <div class="container">
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
      <th scope="col">Product Name</th>
      <th scope="col">Comment</th>
      <th scope="col">Stars</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $count = 0;
    foreach($review_list as $review){
        $count++; ?>
    <tr>
      <th scope="row"><?php echo $count; ?></th>
      <td><?php echo $review['product_title'] ?></td>
      <td><?php echo $review['Comment'] ?></td>
      <td> 
                             <div class='rating-stars'>
                                 <ul id='stars' name="stars">
                                     <?php for($i=0;$i<$review['stars'];$i++): ?>
                                         <li class='star selected' title='Poor' value="1" data-value='1'>
                                          <i class='fa fa-star fa-fw'></i>
                                         </li>  
                                     <?php endfor; ?>
                                 </ul> 
                              </div>
        </td>
    </tr>
<?php  }?>

  </tbody>
</table>
       
        </div>
        </div>
    </div>

</div>





<?php 
 echo require_once  APPPATH. ('views\Front-End\footer.php');
?>