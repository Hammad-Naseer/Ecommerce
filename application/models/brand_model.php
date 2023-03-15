<?php
class brand_model extends CI_Model{
    public function insert($array){
        return $this->db->insert('brand',$array);
    }
    public function brandlist(){
        $q = $this->db->select()
        ->from('brand')
        ->get();
         return $q->result();
     }
     public function find_brand($articleid){
        $q = $this->db->select(['brand_name','id'])
                  ->where('id',$articleid)
                  ->get('brand');
                  return $q->row();
  }
  public function update_data($hidden,$data){
    return $this->db->where('id',$hidden)
            ->update('brand',$data);
  }
  public function delete_brand($id){
    return $this->db->delete('brand',['id'=>$id]);
  }
}


?>