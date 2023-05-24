<?php
class order_model extends CI_Model{
    public function insert_adv($arr){
        return $this->db->insert('slider',$arr);
    }
    public function adv_list(){
        $data = $this->db->select()->from('slider')->get();
        return $data->result(); 
    }
    public function delete($id){
       return $this->db->delete('slider',['id'=>$id]);
     } 
     public function find_adv($id){
        $adv =  $this->db->select('*')->where('id',$id)->get('slider');
        return $adv->row();
      } 
      public function update_item_adv($hidden,$data){
        return $this->db->where('id',$hidden)->update('slider',$data);
      }
      public function check_out_data_insert($data){
        $this->db->insert('biling_detail',$data);
        return $this->db->insert_id();
      }
      public function cart_insert($array){
         $this->db->insert('orders',$array);
        return $this->db->insert_id();
      }
      public function order_item_insert($array){
        return $this->db->insert('order_items',$array);  
     }
     public function order_detail_list($id){
      $query = $this->db->select('*, order_items.Quantity AS qty')
                        ->from('orders')
                        ->join('order_items','order_items.order_id=orders.id','LEFT')
                        ->join('biling_detail','biling_detail.order_id=orders.id','LEFT')
                        ->join('product','product.id=order_items.product_id','LEFT')
                        ->join('inventory','inventory.product_id=order_items.product_id')
                        ->where('orders.id',$id)
                        ->where('biling_detail.user_id',$_SESSION['id'])
                        ->get();
                        return $query->result_array();
     }
    public function list_all_order_admin(){
     $data = $this->db->select('*')
        ->from('order_items')
        ->join('orders','orders.id=order_items.order_id')
        ->join('product','product.id=order_items.product_id')
        ->join('category','category.id=product.category_id')
        ->get();
        return $data->result_array();
}
public function modal_get_data($id){
    $query = $this->db->select('*, order_items.Quantity AS qty')
    ->from('orders')
    ->join('order_items','order_items.order_id=orders.id','LEFT')
    ->join('biling_detail','biling_detail.order_id=orders.id','LEFT')
    ->join('product','product.id=order_items.product_id','LEFT')
    ->join('inventory','inventory.product_id=order_items.product_id')
    ->where('orders.id',$id)
    ->get();
      // echo $this->db->last_query();
     return $query->result_array();
}
public function order_get_data($id){
  $query = $this->db->select('*, order_items.Quantity AS qty')
  ->from('orders')
  ->join('order_items','order_items.order_id=orders.id','LEFT')
  ->join('biling_detail','biling_detail.order_id=orders.id','LEFT')
  ->join('product','product.id=order_items.product_id','LEFT')
  ->join('inventory','inventory.product_id=order_items.product_id')
  ->where('orders.id',$id)
  ->get();
    // echo $this->db->last_query();
   return $query->result_array();
}
}
?>