<style>
.dropbtn{background-color:#00c0ef;padding:8px 20px 8px 20px;border-radius:20px;color:#fff;font-size:16px;border:none;cursor:pointer}.dropdown{position:relative;display:inline-block}.dropdown-content{display:none;position:absolute;background-color:#f9f9f9;min-width:160px;box-shadow:0 8px 16px 0 rgba(0,0,0,.2);z-index:1}.dropdown-content a{color:#000;padding:12px 16px;text-decoration:none;display:block}.dropdown-content a:hover{background-color:#f1f1f1}.dropdown:hover .dropdown-content{display:block;margin-left:-56px}.dropdown:hover .dropbtn{background-color:#2196f3}
</style>

<?php
if($this->session->flashdata('success_message'))
{
	echo '<div align="center">
	<div class="alert alert-success alert-dismissable action_message_box">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	'.$this->session->flashdata('success_message').'
	</div>
	</div>';
}
elseif ($this->session->flashdata('error_message'))
{
    echo '<div align="center">
    <div class="alert alert-danger alert-dismissable action_message_box">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    '.$this->session->flashdata('error_message').'
    </div>
    </div>';
}
?>

<div class="content-wrapper">
    <section class="content-header">
        <h3> 
            Schools List 
            <!--<a href="<?php echo base_url('c_home/add_edit_school'); ?>" class="btn btn-primary">Add School</a>-->
        </h3>
    </section>

    
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <form action="<?php echo base_url();?>c_home/school_list" method="POST">
                    <div class="form-group">
                        <label for="package_id" class="form-label">Package</label>
                          <select class="form-control" id="package_id" name="package_id">
                              <?php echo package_option_list($package_id); ?>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label"></label>
                            <input type="hidden" name="filter" value="1" />
                            <input type="submit" class="btn btn-primary filterBtn" value="Filter">
                        <?php
                        if(isset($filter) && $filter != "")
                        {
                        ?>

                        <div class="col-sm-1">
                            <a href="<?php echo base_url();?>c_home/school_list" class="btn btn-danger">Remove</a>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </form>
                <div class="box">
                    <div class="box-header">
                    </div>
                    <div class="box-body">
                        <div id="no-more-tables">
                          
                             <table id="school_list_tbl_req" class="table  table-responsive table-hover table-striped" cellspacing="0">
                                <thead class="cf">
                                    <tr>
                                        <th class="sort1">
                                            Sr.
                                        </th>
                                        <th width="10%">
                                            Logo
                                        </th>

                                        <th width="30%">
                                            Basic Detail
                                        </th>

                                        <th width="30%">
                                            Contact Info
                                        </th>

                                        <th>
                                            Action
                                        </th>
                                        <th>
                                            Updates
                                        </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                
                                $c = 1; 
                                foreach($data as $key => $school_list)
								{
								    
								    $school_package =  get_school_package_name($school_list['sys_sch_id']);
                                    $sys_sch_arr    =  explode('-', $key); 
                                    $sys_sch_id     =  $sys_sch_arr[0]; 
                                    $school_db      =  $sys_sch_arr[1];
                                    $landing_page   =  $sys_sch_arr[2];
                                     
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $c; $c++; ?>
                                        </td>
                                        <td>
                                            <img src="<?php echo display_uploads($school_list['logo'], $school_list['folder_name']); ?>" width="50px" >   
                                        </td>
                                        <td>
                                            <strong>School ID: </strong><?php echo $sys_sch_id; ?>
                                            <br>
                                            <strong>School Name: </strong><?php echo $school_list['name']; ?>
                                            <br>
                                            <strong>Url: </strong><?php echo $school_list['url']; ?>
                                            <br>
                                            <strong>Territory: </strong>
                                            <?php 
                                                $loc_arr = get_city_hierarchy($school_list['city_id']);
                                                echo $loc_arr['country_title'].' - '.$loc_arr['province_title'].' - '.$loc_arr['city_title'];
                                            ?>
                                            <br>
                                            <strong>Package Name: </strong><?php  echo $school_package[0]['title']; ?>
                                            <br>
                                            <strong>School DB Name: </strong><?php  echo $school_db; ?>
                                        </td>
                                        <td>
                                            <strong>Address: </strong><?php echo $school_list['address']; ?>
                                            <br>
                                            <strong>Phone: </strong><?php echo $school_list['phone']; ?>
                                            <br>
                                            <strong>Email: </strong><?php echo $school_list['email']; ?>
                                            <br>
                                            <strong>Contact Person: </strong><?php echo $school_list['contact_person']; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('c_home/branch_list').'/'.$sys_sch_id.'/'.$school_db ?>">
                                                <i class="fa fa-eye"></i>Branches
                                            </a>
                                            |
                                            <a href="<?php echo base_url('c_home/add_edit_school').'/'.$sys_sch_id.'/'.$school_db ?>">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                              <button class="dropbtn">More Option</button>
                                              <div class="dropdown-content">
                                                <a href="#" onclick="triggerdeletePopup('<?php echo $sys_sch_id ?>' , '<?php echo $school_db ?>' )">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                    Delete School
                                                </a>
                                                <a href="<?php echo base_url('c_home/student_barcode_updates').'/'.$sys_sch_id.'/'.$school_db.'/'.$school_list['folder_name'] ?>">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                    Update Students Barcode
                                                </a>
                                                <a href="<?php echo base_url('c_home/staff_barcode_updates').'/'.$sys_sch_id.'/'.$school_db.'/'.$school_list['folder_name'] ?>">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                    Update Staff Barcode
                                                </a>
                                                <a href="<?php echo base_url('c_home/import_students').'/'.$sys_sch_id.'/'.$school_db ?>" target="_blank">
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                    Import Excel Files
                                                </a>
                                                <a href="<?php echo base_url('c_home/update_student_ids').'/'.$sys_sch_id.'/'.$school_db.'/'.$school_list['folder_name'] ?>">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                    Update Students User ID's
                                                </a>
                                                 <a href="<?php echo base_url('c_home/create_landing_page').'/'.$landing_page ?>">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                    Create Landing Page
                                                </a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
								}
							     ?>
                                </tbody>         
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
if(count($missing_db)>0)
{
	echo "<strong>Missing database: </strong>";
	echo implode(',',$missing_db);
}
?>		        
    </section>
    
</div>






<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Delete School</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

            <div class="row" style="margin-left: 38px;">
                
                <div class="col-lg-12 col-sm-12 sms_success_msg"></div>
                
                <div class="col-sm-12" id="mobile_div">
                    <label>Enter You Mobile No</label>
                    <input type="number" class="form-control" name="phone_no" id="phone_no" required>
                    <button type="button" class="btn btn-primary" id="send_code_btn">Send Otp</button>
                </div>
                
                <div class="col-sm-12" id="otp_div" style="display:none">
                    <label>Enter SMS OTP Here</label>
                    <input type="password" class="form-control" id="otp_code" name="otp_code" required>
                    <button type="button" class="btn btn-primary" id="verify_code_btn">Verify Otp</button>
                </div>

                <input type="hidden" id="school_id_to_delete" />
                <input type="hidden" id="school_db_to_delete" />
                
            </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="delete_school_btn" style="display:none">Delete School</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


<script>
$(document).ready(function() {
    $('#school_list_tbl_req').dataTable({
        "columnDefs": [{
            "orderable": false,
            "targets": 3
        }]
    });
});






function triggerdeletePopup(sys_sch_id , school_db)
{
    $('#school_id_to_delete').val(sys_sch_id);
    $('#school_db_to_delete').val(school_db);
    $('#exampleModal').modal();
}

$(document).delegate("#send_code_btn" , "click" , function(e){
    
    phone_no            =   $('#phone_no').val();
    school_id_to_delete =   $('#school_id_to_delete').val();
    
    if($.trim(phone_no) != '' && $.trim(school_id_to_delete) != '')
    {
    
        $.ajax({    
            url: '<?= base_url() ?>c_cron/send_otp_for_verification',
            method: 'POST',
            data:{phone_no:phone_no,school_id_to_delete:school_id_to_delete},  
            dataType: "html",
            beforeSend:function(){
                $('#send_code_btn').attr('disabled','disabled');
            },
            success:function(msg)
            {
                $('.sms_success_msg').html(msg);
                $('#send_code_btn').attr('disabled','disabled');
                $('#send_code_btn').val('SMS Sent');
                
                setTimeout(function(){ 
                    $("#mobile_div").css("display","none"); 
                    $("#otp_div").css("display","block"); 
                }, 2000);
            }
        });
    
    }
    
    
});
$(document).delegate("#verify_code_btn" , "click" , function(e){
    
    
    phone_no     =   $('#phone_no').val();
    otp_code     =   $('#otp_code').val();
    
    
    if($.trim(phone_no) != '' && $.trim(otp_code) != '')
    {
        
        $.ajax({    
            url: '<?= base_url() ?>c_cron/sms_code_check_for_verification',
            method: 'POST',
            data:{phone_no:phone_no,otp_code:otp_code},  
            dataType: "html",
            beforeSend:function(){
                $('#verify_code_btn').attr('disabled','disabled');
            },
            success:function(msg)
            {
                trim_msg = $.trim(msg);
                if(trim_msg == 1)
                {
                    $('.sms_success_msg').html("<div class='alert alert-success'>SMS Verification Successfully Completed</div>");
                    
                    $("#otp_div").css("display","none"); 
                    $("#delete_school_btn").show(); 
                    
                }else
                {
                    $('.sms_success_msg').html("<div class='alert alert-danger'>SMS Verification Code Is Not Correct</div>");
                }
                
                $('#verify_code_btn').removeAttr('disabled','disabled');
            }
        });
    
    
    }
    
    
    
});
$(document).delegate("#delete_school_btn" , "click" , function(e){
    
    
    phone_no            =   $('#phone_no').val();
    otp_code            =   $('#otp_code').val();
    school_id_to_delete =   $('#school_id_to_delete').val();
    
    if($.trim(phone_no) != '' && $.trim(otp_code) != '' && $.trim(school_id_to_delete) != '')
    {
        
        $.ajax({    
            url: '<?= base_url() ?>c_cron/delete_school',
            method: 'POST',
            data:{phone_no:phone_no,otp_code:otp_code,school_id_to_delete:school_id_to_delete},  
            dataType: "html",
            beforeSend:function(){
                $('#delete_school_btn').attr('disabled','disabled');
            },
            success:function(msg)
            {
                $('#delete_school_btn').attr('disabled','disabled');
                $('.sms_success_msg').html("<div class='alert alert-success'>School Information Has Been Deleted Successfully</div>");
                setTimeout(function(){ 
                     location.reload();
                }, 2000);
            }
        });
    
    
    }
    
    
    
});
</script>













