<?php
class admin_chat_model extends CI_Model{

    public function update_stats(){
        
        return $this->db->set('last_activity','NOW()')
       // ->where('login_details_id',$_SESSION['login_details_id'])
        ->update('login_details');
    }

    public function chat_insert_model($chatdata){
       return $this->db->insert('chat_message',$chatdata);
    }
    

    public function get_admin_data(){
        $query = $this->db->select('*')->where('role',2)->from('users')->get();
        return $query->result();
     
    }
    // from_user_id
    public function communication_between_chat($user_id){
        //SELECT * FROM `chat_message` WHERE to_user_id = 25 AND from_user_id = 4 OR from_user_id = 4 AND to_user_id = 25;
       $data = $this->db->select('*')
                ->from('chat_message')
                ->where('to_user_id',$_SESSION['id'])
                ->where('from_user_id',$user_id)
                ->or_where('from_user_id',$_SESSION['id'])
                ->where('to_user_id',$user_id)
                ->order_by("chat_message_id", "asc")
                
                ->get();
                return $data->result_array();
    }
    
    
}


?>