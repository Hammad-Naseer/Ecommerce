<?php
class customer_model extends CI_Model{
    public function save($userdata){
        $this->db->insert('users',$userdata);
        // echo "<pre>";
        // print_r($_SESSION['id']);exit;
        // echo "</pre>";
        notification('1','welcome New User Registeration','registered');
        return $this->db->insert_id();
    }
    public function login($email,$password){
        $this->db->select('*')->where('email',$email);
        $this->db->where('password', md5($password));
        $this->db->where("role",1);
        
        $query = $this->db->get('users');
        // echo $this->db->last_query();
        if($query->num_rows() > 0){
            return $query->row();
        }
        return false;
    }
    public function all_customer(){
     
       if(!isset($_SESSION['id'])){
        $query = $this->db->select()->from('users')->get();
     
       }else{
       
        $query = $this->db->select()->from('users')->where('id !=',$_SESSION['id'])->get();
       }
    //    print_r($_SESSION);
    //    print_r($query->result());
        return $query->result();
    }
    public function find_category_list($id){
        $q = $this->db->select('*')->from('product')
        // $q = $this->db->select()->from('inventory')->join('product','product.id=inventory.product_id')->get();
        ->join('category','category.id=product.category_id') 
        ->where('category.id',$id)
        ->get();
        return $q->row();
    }
    public function find_product_list($id){
        $q = $this->db
        ->select('*')
        ->from('product')
        ->join('product_attribute','product.id = product_attribute.product_id','LEFT')
        ->join('category','category.id=product.category_id','LEFT')
        ->join('inventory','inventory.product_id=product.id','LEFT')
        ->join('brand','brand.id=product.brand_id','LEFT')
        ->where('product.id',$id)
        ->get();
    return $q->result_array(); 
    }
    public function find_realted_list($brand){
        $q = $this->db
        ->select('*')
        ->from('product')
        ->join('category','category.id=product.category_id','LEFT')
        ->join('inventory','inventory.product_id=product.id','LEFT')
        ->where('product.id <>',$this->uri->segment(3))
        ->where('product.brand_id',$brand)
        ->get();
        return $q->result_array();
    }

    public function review_list($id){
        $q = $this->db->select()
        ->from('product_reviews')
        ->where('product_id',$id)
        ->get();
         return $q->result_array();
     }
}
?>