<?php
function category_dropdown($id){
    $selected = 0;
    $CI = & get_instance();
    $q = $CI->db->select('*')->from('category')->get()->result_array();
    // return $q;
    $select = "";
    foreach($q as $row){ 
       $selected ="";
       if($id == $row['id']){
           $selected = "selected";
       }
      $select .=  '<option '.$selected.' value='.$row['id'].'>'.  $row['category_name'].'</option>';
    }
return $select;
}
function brand_dropdown($id){
    $selected = 0;
    $CI = & get_instance();
    $q = $CI->db->select('*')->from('brand')->get()->result_array();
    $select = "";
         foreach($q as $row){ 
            $selected ="";
            if($id == $row['id']){
                $selected = "selected";
            }
           $select .=  '<option '.$selected.' value='.$row['id'].'>'.  $row['brand_name'].'</option>';
         }
    return $select; 
}
function status_dropdown($select = 1)
    {
		$status = array(
			'1'	=>	'Active',
			'0'	=>	'Inactive',
		);
        $output = '';
		$output .= "<select class='form-control' name='status' id='product_status'>";
		// $output .= "<option value=''>Select Status</option>";	
			for($i = 0; $i < count($status); $i++) :
				$selected = '';
				if ($select == $i) :
					$selected = "selected";
				endif;	
				$output .= "<option value='".$i."' ".$selected.">".$status[$i]."</option>";
			endfor;	
		$output .= "</select>";
		return $output;
    }
    function date_view($date){
        echo date('F j,Y', strtotime($date));   
    }
    function getSiteInfo()
    {
        $CI = & get_instance();
        $q = $CI->db->get("setting")->row();
        return $q;
    }
    function notification($user_id,$message,$type){ 
        $CI = & get_instance();
        $array = array(
            'user_id' => $user_id,
            'message' =>$message,
            'type' => $type
        );
         $CI->db->insert('notification',$array);
    }
    function get_notification(){
        $CI = & get_instance();
        $get_notification = $CI->db->get('notification')->result();
        return $get_notification;
    }
    function update_notification($id){
        $CI = & get_instance();
            // $id = $CI->uri->segment(3);
        $update_notification = $CI->db->where('id',$id)->update('notification',array('notification_read'=>1));
        // echo $CI->db->last_query();
        return $update_notification;
    }
    function notification_count(){
        $CI = & get_instance();
       
        $notification = "SELECT * FROM notification  where notification_read = 0";
        $notification_arr = $CI->db->query($notification);
        $Total_category =$notification_arr->num_rows();
        return $Total_category;
    }
    function brand_data(){
     $CI = & get_instance();
     $brand = $CI->db->select('*')->get('brand');
     $Total_brand =$brand->result();
     return $Total_brand;
    }
    function getbannerInfo()
    {
        $CI = & get_instance();
        $q = $CI->db->select('*')->from("banner")->order_by("id", "desc")->get()->row();
        return $q;
    }


     function get_chat_user_data(){
        $CI = & get_instance();
        $q = $CI->db->select()->from("users")
        // ->join('chat_message','chat_message.to_user_id=users.id','LEFT')
        // ->join('chat_message','chat_message.from_user_id=users.id','LEFT')
        
        ->get()->result();
        return $q;
    }