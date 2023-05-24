<?php
class setting_model extends CI_Model{
    public function insert_data($data){
        return $this->db->insert('setting',$data);
    }
    public function list_data_setting(){
        $query = $this->db->select()->from('setting')->get();
        return $query->result();
     } 
     public function delete($arr){
        return  $this->db->delete('setting',['id'=>$arr]);
     } 
     public function find_setting($id){
        $q = $this->db->select(['id','email','description','phone_number','twiter_link','facebook_link','address','indeed','pinterest','image'])
                  ->where('id',$id)
                  ->get('setting');
                  return $q->row();
  }
  public function update_data($hidden,$data){
        return $this->db->where('id',$hidden)->update('setting',$data);
  }  
  public function insert_banner_data($data){
    return $this->db->insert('banner',$data);
  }
  public function list_data_banner(){
    $query = $this->db->select()->from('banner')->get();
    return $query->result();
 } 
 public function find_banner($id){
    $q = $this->db->select(['id','title','image'])
              ->where('id',$id)
              ->get('banner');
              return $q->row();
}
public function update_advertisement($hidden,$data){
    return $this->db->where('id',$hidden)->update('banner',$data);
}  
public function delete_banner_data($arr){
    return  $this->db->delete('banner',['id'=>$arr]);
 } 
}
?>