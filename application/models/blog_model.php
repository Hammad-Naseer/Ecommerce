<?php
class blog_model extends CI_Model{

    public function insert_blog($array){
        return $this->db->insert('blog',$array);
    }
    public function bloglist(){
       $query = $this->db->select()->from('blog')->get();
       return $query->result();
    } 
    public function find_blog($blogid){
        $q = $this->db->select(['id','blog_title','description','image','date'])
                  ->where('id',$blogid)
                  ->get('blog');
                  return $q->row();
  }
  public function update_item_blog($hidden,$data){
            return $this->db->where('id',$hidden)->update('blog',$data);
  }
    public function delete($id){
        return  $this->db->delete('blog',['id'=>$id]);
    }
    public function all_blog_list_view(){
        $query = $this->db->select('*')->from('blog')->get();
        return $query->result();
    }
}


?>