<?php
class BrandController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('brand_model');
    }
    public function Add_brand(){
        $this->load->view('Dashboard/partial/header');
        $this->load->view('Dashboard/partial/Brand/add_brand');
        $this->load->view('Dashboard/partial/footer');
    }
    public function edit_brand($id){
        $this->load->view('Dashboard/partial/header');
        $brand = $this->brand_model->find_brand($id);
        $this->load->view('Dashboard/partial/Brand/edit_brand',['row'=>$brand]);
        $this->load->view('Dashboard/partial/footer');

    }
    public function insert_brand(){
        $post = $this->input->post();
        if($this->brand_model->insert($post)){
            $this->session->set_flashdata('Brand',' Brand added  Successfull');
            $this->session->set_flashdata('user_register_class','alert alert-success');
        }
        return redirect('brand_view');
    }
    public function view_brand(){
        $this->load->view('Dashboard/partial/header');
        
        $data = $this->brand_model->brandlist();
        $this->load->view('Dashboard/partial/Brand/view_brand',['temp'=>$data]);
        $this->load->view('Dashboard/partial/footer');
    }
    public function delete_brand($id){
        if($this->brand_model->delete_brand($id)){
            $this->session->set_flashdata('message','Brand Delete  Sucessfull');
            $this->session->set_flashdata('message_class','alert-success');
        }
        else{
            $this->session->set_flashdata('message','Pleae try again Not Delete Data ');
            $this->session->set_flashdata('message_class','alert-danger');
        }
        $this->load->view('Dashboard/partial/Category/view_category');
        return redirect('view');
        $this->load->view('Dashboard/partial/footer');
}
    public function updatebrand(){
        $hidden = $this->input->post("hidden");
        $data['brand_name'] = $this->input->post("brand_name");
        if($this->brand_model->update_data($hidden,$data)){
            $this->session->set_flashdata('message','Brand Update  Sucessful');
            $this->session->set_flashdata('message_class','alert-success');
        }
        else{
            $this->session->set_flashdata('message','Articles Not Update Data ');
            $this->session->set_flashdata('message_class','alert-danger');
        }
        return redirect('brand_view');  
    }  
}