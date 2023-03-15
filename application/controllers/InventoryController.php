<?php
class InventoryController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('inventory_model');
    }
    public function form(){
        $this->load->view('Dashboard/partial/header');
            $this->load->view('Dashboard/partial/Inventory/inventory_form');
            $this->load->view('Dashboard/partial/footer');
    }
    public function add(){
        $post = $this->input->post();
        if($this->inventory_model->insert_inventory($post)){
            $this->session->set_flashdata('Inventory',' added  Successfull');
            $this->session->set_flashdata('user_register_class','alert alert-success');
        }
        else{
            $this->session->set_flashdata('login_failed','Invalid username/Password');
             redirect("add_category");
        }
         redirect('view_inventory');
    }
    public function view_inventory(){
        $this->load->view('Dashboard/partial/header');
        $data = $this->inventory_model->inventorylist();
        $this->load->view('Dashboard/partial/Inventory/view_inventory',['item'=>$data]);
        $this->load->view('Dashboard/partial/footer');
    }
}
?>