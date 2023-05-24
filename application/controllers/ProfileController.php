<?php
class ProfileController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('profile_model');
    }
    public function view_profile(){
        $id = $_SESSION['id'];
        $data = $this->profile_model->adv_list($id);
        $this->load->view('Front-End/Customer-Authentication/profile',['profile'=> $data]);
    }
    public function review_list(){
        // $id = $_SESSION['id'];
        $data = $this->profile_model->review_list_data();
        $this->load->view('Front-End/Customer-Authentication/review',['review_list'=>$data]);
    }
    public function order_list(){
        $data = $this->profile_model->order_list_item();
        $this->load->view('Front-End/Customer-Authentication/order',['order_list'=>$data]);
        }
        public function update(){
             $hidden = $this->input->post("hidden");
             $data = array(
              'firstname' => $this->input->post('firstname'),
              'lastname' => $this->input->post('lastname'),
              'password' => $this->input->post('password'),
              'contact' => $this->input->post('contact'),
                 );  
               $update = $this->profile_model->profile_update_item($hidden,$data);
             if($this->profile_model->profile_update_item($hidden,$data)){
                 $this->session->set_flashdata('message','Profile Update  Sucessfull');
                 $this->session->set_flashdata('message_class','alert-success');
             }
             else{
                 $this->session->set_flashdata('message','Profile Not Update Data ');
                 $this->session->set_flashdata('message_class','alert-danger');
             }
              redirect('profile');
         }
}
?>