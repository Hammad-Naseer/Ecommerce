<?php
class notification_model extends CI_Model{
    public function all_notification(){
        return $this->db->get('notification')->result_array();
    }
    public function all_reviews(){
        return $this->db->get('product_reviews')->result_array();
    } 
}

?>