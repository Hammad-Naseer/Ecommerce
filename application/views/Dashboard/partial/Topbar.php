<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">

            <li class="d-none d-lg-block">
                <form class="app-search">
                    <div class="app-search-box dropdown">
                       
                        <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found 22 results</h5>
                            </div>
            
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-home me-1"></i>
                                <span>Analytics Report</span>
                            </a>
            
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-aperture me-1"></i>
                                <span>How can I help you?</span>
                            </a>
                            
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex align-items-start">
                                        <img class="d-flex me-2 rounded-circle" src="../assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex align-items-start">
                                        <img class="d-flex me-2 rounded-circle" src="../assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
            
                        </div>  
                    </div>
                </form>
            </li>
    
            <li class="dropdown d-inline-block d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>
    
        
    
          
    
            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                <!-- <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="../assets/images/flags/us.jpg" alt="user-image" height="16">
                </a> -->
                <div class="dropdown-menu dropdown-menu-end">
    
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="../assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>
    
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="../assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>
    
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="../assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>
    
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="../assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
    
                </div>
            </li>
            
            <li class="dropdown notification-list topbar-dropdown">
                 <a class="nav-link dropdown-toggle waves-effect waves-light" id="notify_id" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge bg-danger rounded-circle noti-icon-badge">
                   <?php echo  notification_count(); ?>
                    </span>
                </a> 
              <?php   //print_r($order); ?>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg">
    
                    <!-- item-->
                     <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-end">
                                <a href="" class="text-dark">
                                    <small>Clear All</small>
                                </a>
                            </span>Notification
                        </h5>
                    </div> 
    
                    <div class="noti-scroll" data-simplebar>
    
                 
                        <?php 
                            foreach(get_notification() as $notify):
                                if($notify->status == 1):
                        ?>
                        <a href="<?php echo base_url() ?>NotificationController/readnotification/<?= $notify->id ?>/<?php echo $notify->type?>" class="dropdown-item notify-item">
                            <div class="notify-icon bg-<?php if($notify->type == "Registered"): echo "warning"; elseif($notify->type == "order"): echo "info"; elseif($notify->type == "review"): echo "success"; endif;?>">
                           
                                <i class="mdi mdi-<?php if($notify->type == "Registered"): echo "account-plus"; elseif($notify->type == "order"): echo "comment-account-outline"; elseif($notify->type == "review"): echo "heart"; endif;?>"></i>
                            </div>                         
                            <p class="notify-details"><?php echo $notify->type ?>
                                <small class="text-muted"> <?php echo  $notify->message ?></small>
                                <small class="text-muted"> <?php echo date('d M y H:i:s',strtotime($notify->date)) ?></small>
                            </p> 
                        </a>
                        <?php endif; endforeach; ?>
                    </div>
                    <!-- All-->
                    <a href="<?php echo base_url() ?>view_notificationList" class="dropdown-item text-center text-primary notify-item notify-all">
                        View all
                        <i class="fe-arrow-right"></i>
                    </a>
                </div>
            </li>
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <!-- <img src="../assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle"> -->
                    <span class="pro-user-name ms-1">
                        <?= $this->session->userdata('email'); ?>
                        <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <!-- <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div> -->
    
                    <!-- item-->
                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item"> -->
                        <!-- <i class="fe-user"></i> -->
                        <!-- <span>Edit Profile</span> -->
                    <!-- </a> -->
    
                    <!-- item-->
                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a> -->
                    <!-- item-->
                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Lock Screen</span>
                    </a> -->
                    <div class="dropdown-divider"></div>
                    <!-- item-->
                    <a href="<?php echo base_url();?>logout" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- LOGO -->
        <div class="logo-box">
            <a href="#" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="<?php //echo base_url();?>assets/images/logo-sm.png" alt="" height="22">
                     <h1>Ecommerce</h1> 
                     <span class="logo-lg-text-light">UBold</span> 
                </span>
                <span class="logo-lg">
                    <img src="<?php //echo base_url();?>assets/images/logo-dark.png" alt="" height="20">
                    <!-- <span class="logo-lg-text-light">U</span> -->
                </span>
            </a>
            <a href="#" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="<?php //echo base_url(); ?>assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
               
                    <img src="<?php echo base_url('uploads/').getSiteInfo()->image; ?>" alt="" height="55 ">
                </span>
            </a>
        </div>
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>
            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>   
        </ul>
        <div class="clearfix"></div>
    </div>
</div>

<!-- <script>
    
    $('#notify_id').click(function(){
    {
      
       
    var user_id = <?php //echo $_SESSION['id']?>;
   console.log(user_id);
    }
  $.ajax({
          url:"<?php //echo base_url('Friend_request/is_viewed')?>",
          method:"POST",
          data:{'is_viewed':user_id},
          success:function(data)
          {
              $('#notify_id').html('');
          }
      });
});
 </script> -->