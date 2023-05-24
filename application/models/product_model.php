<?php
class product_model extends CI_Model{
    public function insert_product($array){
           $this->db->insert('product',$array);
           return  $this->db->insert_id();
    }
    public function review_product_insert($data){
        return $this->db->insert('product_reviews',$data);
    }
    public function product_attribute($data){
        return $this->db->insert('product_attribute',$data);
    }
    public function productlist(){
        $q = $this->db->select()
        ->from('product')
        ->get();
         return $q->result();
     }
     public function find_product($productid){
        $q = $this->db->select(['id','product_title','brand_id','category_id','description','status','image','is_featured','trending','best_sale','date'])
                  ->where('id',$productid)
                  ->get('product');
                  return $q->row();
  }
  public function del($id){
    return $this->db->delete('product',['id'=>$id]);
   // $data = array(
   //    'status' => 'InActive'
   //            );
   //             $this->db->where('id', $id);
   //             return  $this->db->update('articles', $data);
}
public function update_item($hidden,$data){
    return $this->db->where('id',$hidden)
                    ->update('product',$data);
  }
}