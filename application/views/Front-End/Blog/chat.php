<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

<link href="<?php echo base_url(); ?>assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
<!-- App css -->
<!-- <link href="../assets/css/config/material/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" /> -->
<link rel = "stylesheet" type = "text/css" href = "<?php //echo base_url(); ?>assets/css/config/material/bootstrap.min.css">


<!-- <link href="../assets/css/config/material/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" /> -->
<link rel = "stylesheet" type = "text/css" href = "<?php //echo base_url(); ?>assets/css/config/material/app.min.css">

<!-- <link href="../assets/css/config/material/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" /> -->
<link rel = "stylesheet" type = "text/css" href = "<?php //echo base_url(); ?>assets/css/config/material/bootstrap-dark.min.css">

<!-- <link href="../assets/css/config/material/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" /> -->
<link rel = "stylesheet" type = "text/css" href = "<?php //echo base_url(); ?>assets/css/config/material/app-dark.min.css">

<!-- icons -->
<!-- <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" /> -->
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/icons.min.css">

<!--  -->
<link href="<?php echo base_url(); ?>assets/css/config/material/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/config/material/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

<link href="<?php echo base_url(); ?>assets/css/config/material/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/config/material/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

<!-- third party css -->
<link href="<?php echo base_url(); ?>assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<!-- third party css end -->
        <!-- Begin page -->
      
        <div id="wrapper">
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
                                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>/front_end">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                            <li class="breadcrumb-item active">Chat</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Chat</h4>
                                   
                           
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <?php  //$admin_id = $_SESSION['id']; ?>
                        <div class="row">
                            <!-- start chat users-->
                            <div class="col-xl-3 col-lg-4">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="d-flex align-items-start mb-3">
                                            <img src="<?php echo base_url() ?>assets/images/users/user-1.jpg" class="me-2 rounded-circle" height="42" alt="Brandon Smith">
                                            <div class="w-100">
                                                <h5 class="mt-0 mb-0 font-15">
                                                    <a href="contacts-profile.html" class="text-reset">
                                                    <?php if(isset($_SESSION['id'])){ ?>
                                                    <?php echo $_SESSION['firstname']; ?>
                                                    <?php }?>
                                                </a>
                                                </h5>
                                              
                                                <p class="mt-1 mb-0 text-muted font-14">
                                               
                                                    <small class="mdi mdi-circle text-success"></small> Online
                                                   
        
                                                </p>
                                            </div>
                                            <a href="javascript: void(0);" class="text-reset font-20">
                                                <i class="mdi mdi-cog-outline"></i>
                                            </a>
                                        </div>

                                        <!-- start search box -->
                                        <form class="search-bar mb-3">
                                            <div class="position-relative">
                                                <input type="text" class="form-control form-control-light" placeholder="People, groups & messages...">
                                                <span class="mdi mdi-magnify"></span>
                                            </div>
                                        </form>
                                        <!-- end search box -->

                                        <h6 class="font-13 text-muted text-uppercase">Group Chats</h6>
                                        <div class="p-2">
                                            <a href="javascript: void(0);" class="text-reset mb-2 d-block">
                                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-success"></i>
                                                <span class="mb-0 mt-1">App Development</span>
                                            </a>
                
                                            <a href="javascript: void(0);" class="text-reset mb-2 d-block">
                                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-warning"></i>
                                                <span class="mb-0 mt-1">Office Work</span>
                                            </a>
                                        </div>

                                        <h6 class="font-13 text-muted text-uppercase mb-2">Contacts</h6>

                                        <!-- users -->
                                        <div class="row">
                                            <div class="col">
                                                <div data-simplebar id="user_details" style="max-height: 375px;">
                                               
                                                <?php foreach($data as $chat){
                                                   // print_r($data);
                                                    $status ='';
                                                   // $current_timestamp = strtotime(date('Y-m-d H:i:s').'-10 second');
                                                  // $current_timestamp = date('Y-m-d H:i:s',$current_timestamp);
                                                 //    $user_last_activity = fetch_user_last_activity($chat->id);
                                                    ?>
                                                    <a href="javascript:void(0);" onclick='click_msg(<?php echo $chat->id ?>)' class="text-body start_chat">
                                                   
                                                        <div class="d-flex align-items-start p-2">
                                                            <img src="<?php echo base_url() ?>assets/images/users/user-2.jpg" class="me-2 rounded-circle " id="start_chat" height="42" alt="Brandon Smith" />
                                                            <div class="w-100">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    <span class="float-end text-muted fw-normal font-12">4:30am</span>
                                                                    <?php echo $chat->firstname; ?>
                                                                    <?php //echo $chat->id; ?>
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">
                                                                    <span class="w-25 float-end text-end">
                                                                        <span class="badge badge-soft-danger">3</span>
                                                                    </span>
                                                                    <p class="mt-1 mb-0 text-muted font-12">
                                                                       
                                                                            <small class="mdi mdi-circle text-success"></small> Online
                                                                           
                                    
                                                                     </p>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <?php } ?>
                                        
                                                
                                                </div>
                                                <!-- end slimscroll-->
                                            </div>
                                            <!-- End col -->
                                        </div>                                        
                                        <!-- end users -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end chat users-->

                            <!-- chat area -->
                            <div class="col-xl-9 col-lg-8">
                                
                                <div class="card">
                                    <div class="card-body py-2 px-3 border-bottom border-light">
                                        <div class="row justify-content-between py-1">
                                                   
                                            <div class="col-sm-7">
                                                <div class="d-flex align-items-start">
                                               
                                                        <img src="<?php echo base_url() ?>assets/images/users/user-5.jpg" class="me-2 rounded-circle" height="36" alt="Brandon Smith">
                                                        <div> 
                                                       
                                                            <h5 class="mt-0 mb-0 font-15">
                                                                <a href="contacts-profile.html" class="text-reset"><?php //echo $row->$last_activity; ?></a>                  
                                                            </h5>
                                                            <p class="mt-1 mb-0 text-muted font-12">
                                                                <small class="mdi mdi-circle text-success"></small> Online
                                                                
                                                            </p>
                                                            
                                                        </div>
                                                
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div id="tooltips-container">
                                                    <a href="javascript: void(0);" class="text-reset font-19 py-1 px-2 d-inline-block">
                                                        <i class="fe-phone-call" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Voice Call"></i>
                                                    </a>
                                                    <a href="javascript: void(0);" class="text-reset font-19 py-1 px-2 d-inline-block">
                                                        <i class="fe-video" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Video Call"></i>
                                                    </a>
                                                    <a href="javascript: void(0);" class="text-reset font-19 py-1 px-2 d-inline-block">
                                                        <i class="fe-user-plus" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Users"></i>
                                                    </a>
                                                    <a href="javascript: void(0);" class="text-reset font-19 py-1 px-2 d-inline-block">
                                                        <i class="fe-trash-2" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Chat"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                                    <!-- dynamic card -->
                                    <div class="card-body" id="">
                                        <div id="ChatMessage" class="srcollbar">

                                        </div>
                                        <div class="srcollbar">
                                            <ul id="view_detail" class='conversation-list' data-simplebar style='max-height: 460px;'>
                                                                                
                                        </ul>               
                                        </div>

                                        <div id="errorMessage">

                                        </div>
                                  
                                
                                        <div class="row">
                                            <div class="col">
                                                <div class="mt-2 bg-light p-3 rounded">
                                                    <form class="needs-validation" novalidate="" name="chat-form" id="chat_form">
                                                        <div class="row">
                                                            <div class="col mb-2 mb-sm-0">
                                                                <input type="text" name="ChatText" id="ChatText" class="form-control border-0" placeholder="Enter your text...." required="" />

                                                                <!-- <input type="text" name="outgoing" placeholder="Type Your Message Here." id="outgoing" class="setid" autocomplete="off" value="<?php //echo $_SESSION['id']; ?>" hidden> -->
                                                                <!-- <input type="text" name="incoming" placeholder="Type Your Message Here." id="incoming" class="setid" autocomplete="off" value="<?php //echo $chat->id ?>" hidden> -->
                                                                <div class="invalid-feedback">
                                                                <!-- <input type="hidden" name="sess_id" id="sess_id" value="<?php //echo $_SESSION['id']; ?>"> -->
                                                                <input type="hidden" id="myInputHidden" name="myInputHidden"> 

                                                                </div>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <div class="btn-group">
                                                                    <a href="#" class="btn btn-light"><i class="fe-paperclip"></i></a>
                                                                    <button type="submit" class="btn btn-success chat-send w-100"><i class="fe-send"></i></button>
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                        </div>
                                                        <!-- end row-->
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- end col-->
                                        </div>
                                        <!-- end row -->
                                    </div>

                                    <!-- end card-body -->                                    
                                </div> <!-- end card -->
                            </div>
                            <!-- end chat area-->

                        </div> <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(document).on('click','.start_chat',function(){
                    var to_user_id = $(this).data('touserid');
                    var to_user_name = $(this).data('tousername');

                    setInterval(function(){
                      //  update_last_activity();
                    },5000);
                });

                function click_msg(data){
                   alert(data);
                  var id = data;
                  $("#myInputHidden").val(id);
                  $.ajax({
                        url:"<?php echo  base_url(); ?>Admin_Chat_Controller/fetch_chat",
                        method:"POST",
                        data:{id:id},
                        success:function(data){
                            //alert(data);
                        //    $('#incoming').val(data);
                            if(data){
                                $('#view_detail').html(data);
                                //  $('#incoming').text(data.id);
                            }
                            else{
                                $('#errorMessage').text("record no found");
                            }
                       //  $('#incoming').text(data.id);
                        },
                    });
                }

                function fetch_user(){
                    $.ajax({
                        url:"<?php echo  base_url(); ?>fetch/user",
                        method:"POST",
                        success:function(data){
                           
                            $('#user_details').html(data);
                        },
                    });
                }

                function update_last_activity(){
                    $.ajax({
                        url:"<?php echo  base_url(); ?>Admin_Chat_Controller/update_status",
                        method:"POST",
                        success:function(data){
                            $('#user_details').html(data);
                        },
                    });
                }

            </script>


<script>
    $(document).ready(function(){

        $('#chat_form').submit(function(e){
          
            var ChatText = $('#ChatText').val();
            var rec_id = $('#myInputHidden').val();
            $.ajax({
                url:'<?php echo  base_url(); ?>Admin_Chat_Controller/insert_chat',
                type:'POST',
                data:{ChatText:ChatText,rec_id:rec_id},   
                success:function(){

                }
            });
            // console.log(ChatText);
            // alert(ChatText);
        });
    });
    </script>
        
