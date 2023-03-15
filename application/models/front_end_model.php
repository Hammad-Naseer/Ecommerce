<?php
class front_end_model extends CI_Model{
    public function All_list(){
        $q = $this->db->select('*')
        ->from('product')
        ->join('inventory','inventory.product_id=product.id','LEFT')
        ->join('category','category.id=product.category_id','LEFT')
        ->join('brand','brand.id=product.brand_id','LEFT')
        ->limit(9)
        ->order_by("product.id", "desc")
        ->get();
         return $q->result();
    }
    public function feature_list(){
        $q = $this->db->select('*, product.id AS pid')
        ->from('inventory')
        ->join('product','product.id=inventory.product_id')
        ->where('is_featured',1)
        ->limit(20)
        ->get();
         return $q->result();
    }
    public function front_category(){
        $q = $this->db->select('*')
        ->from('category')
        ->where('on_front',1)
        ->order_by("id", "desc")
        ->limit(3)
        ->get();
         return $q->result();
    }
    public function shopping_list_view($limit,$offset){
        $this->db->limit($limit,$offset);
        $q = $this->db->select('*')
        ->from('inventory')
        ->join('product','product.id=inventory.product_id')
        ->join('category','category.id=product.category_id')
        ->limit(9)
        ->order_by("product.id", "desc")
        ->get();
         return $q->result();  
    }
    public function filter_list_view($data){
         $brands = explode(",",$data['brand']);
         $min_price = $data['min_price'];
         $max_price = $data['max_price'];
        $q = $this->db->select('*')
        ->from('inventory')
        ->join('product','product.id=inventory.product_id')
        ->join('category','category.id=product.category_id')
        ->where_in('brand_id',$brands)
        ->where("sale_price BETWEEN '$min_price' AND '$max_price'")
        ->order_by("product.id", "desc")
        ->get();
         return $q->result();
    }
    public function blog_list_view(){
        $query = $this->db->select('*')->from('blog')->order_by("id", "desc")
        ->limit(3)->get();
        return $query->result();
    }
    public function find_category_specific_list($id){
        $q = $this->db->select('*')
        ->from('inventory')
        ->join('product','product.id=inventory.product_id')
        ->join('category','category.id=product.category_id')
        ->where('product.category_id',$id)
        ->limit(9)
        ->order_by("product.id", "desc")
        ->get();
         return $q->result(); 
    }
    public function find_category_filter_list($id){
        $q = $this->db->select('*')
        ->from('inventory')
        ->join('product','product.id=inventory.product_id')
        ->join('category','category.id=product.category_id')
        ->where('product.category_id',$id)
        ->limit(9)
        ->order_by("product.id", "desc")
        ->get();
         return $q->result(); 
    }
    public function search_product($search){
        $q = $this->db->select('*')
        ->from('inventory')
        ->join('product','product.id=inventory.product_id')
        ->join('category','category.id=product.category_id')
        ->like('product.product_title',$search) 
        ->order_by("product.id", "desc")
        ->get();
         return $q->result();
    }
    public function getTotalRows(){
        $q = $this->db->select('*')
        ->get('inventory');
         return $q->num_rows();
    }
    public function image_slider_view(){
        $slide_data = $this->db->select('*')->from('slider')->get();
        return  $slide_data->result();
    }
    public function setting_view(){
        $setting_data = $this->db->select('*')->from('setting')->get();
        return  $setting_data->result_array();
    }
    public function single_blog($id){
            $specific = $this->db->select(['id','blog_title','description','image','date'])
                               ->where('id',$id)->get('blog');
                               return $specific->row();
    }
    public function recent_product(){
        $data = $this->db->select('*')
        ->from('order_items')
        ->join('orders','orders.id=order_items.order_id')
        ->join('product','product.id=order_items.product_id')
        ->join('category','category.id=product.category_id')
        ->where('orders.user_id',$_SESSION['id'])
        ->get();
        return $data->result_array();
    }
} 
?>