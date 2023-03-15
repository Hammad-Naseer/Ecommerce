<?php
class ApiController extends CI_Controller{
    public function product_Api(){
        $q = $this->db->select()
        ->from('product')
        ->get();
// print_r($q);
       echo   json_encode($q->result());
    }

    public function brandlist_Api(){
        $q = $this->db->select()
        ->from('brand')
        ->get();
        echo json_encode($q->result());
        //  return $q->result();
     }
}
?>