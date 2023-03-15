<?php
class category_model extends CI_Model{
    public function insert_category($array){
        return $this->db->insert('category',$array);   
    }
    public function update_item($hidden,$data){
        return $this->db->where('id',$hidden)
                        ->update('category',$data);
      }
      public function categorylist(){
        $q = $this->db->select()
        ->from('category')
        ->get();
         return $q->result();
     }
     public function find_category($articleid){
        $q = $this->db->select(['category_name','parent_id','id'])
                  ->where('id',$articleid)
                  ->get('category');
                  return $q->row();
  }
  public function del($id){
     return $this->db->delete('category',['id'=>$id]);
    // $data = array(
    //    'status' => 'InActive'
    //            );
    //             $this->db->where('id', $id);
    //             return  $this->db->update('articles', $data);

}    
}
