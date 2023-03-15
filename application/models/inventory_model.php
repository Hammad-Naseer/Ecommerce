<?php
class inventory_model extends CI_Model{
    public function insert_inventory($array){
        return $this->db->insert('inventory',$array);
        
    }
    public function inventorylist(){
        $q = $this->db->select()->from('inventory')->join('product','product.id=inventory.product_id')->get();
         return $q->result();
     }

}
?>