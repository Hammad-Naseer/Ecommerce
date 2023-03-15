<?php
class Login_model extends CI_Model{
    public function validate($email)
    {
        $query = $this->db->select("*")->from("users")->where('email',$email)->where("role",2)->get();
        return $query;
    }
    public function register_data($array){
        return $this->db->insert('register',$array);
    }
}

?>