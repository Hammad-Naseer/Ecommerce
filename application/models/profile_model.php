<?php
class profile_model extends CI_Model{
    public function adv_list($id){
        $data = $this->db->select()->from('users')->where('id',$id)->get();
        return $data->result_array();
    }
    public function profile_update_item($hidden,$data){
        return $this->db->where('id',$hidden)->update('users',$data);
}
public function order_list_item(){
    $data = $this->db->select()
    ->from('orders')
    ->where('orders.user_id',$_SESSION['id'])
    ->get();
    return $data->result_array(); 
}
public function review_list_data(){
    $data = $this->db->select('*')
    ->from('product_reviews')
    ->join('product','product.id=product_reviews.product_id')
    ->where('product_reviews.user_id',$_SESSION['id'])
    ->get();
    return $data->result_array(); 
}
}

?>