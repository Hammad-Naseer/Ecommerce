<?php
class SettingController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('image');
      $this->load->model('setting_model');
    }
    public function view_add_setting(){
        $this->load->view('Dashboard/partial/header');
        $this->load->view('Dashboard/partial/Setting/add_company');
        $this->load->view('Dashboard/partial/footer');
    } 
        public function insert_setting_data(){
                        $this->form_validation->set_rules('email', 'Email', 'trim|required');
                        $this->form_validation->set_rules('description', 'Description', 'trim|required');
                        $this->form_validation->set_rules('phone_number', 'Phone Number ', 'required');
                        $this->form_validation->set_rules('facebook_link', 'Facebook link ', 'required');
                        $this->form_validation->set_rules('twiter_link', 'Twiter link ', 'required');
                        $this->form_validation->set_rules('address', 'Address ', 'required');
                        $this->form_validation->set_rules('indeed', 'Indeed Link ', 'required');
                        $this->form_validation->set_rules('pinterest', 'Pnterest link ', 'required');
                        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
                        if( $this->form_validation->run() == false){
                            $this->load->view('Dashboard/partial/header');
                            $this->load->view('Dashboard/partial/Setting/add_company');
                            $this->load->view('Dashboard/partial/footer');
                    }
                    else{ 
                        $data = array(
                                'email' => $this->input->post('email'),
                                'description' => $this->input->post('description'),
                                'phone_number' => $this->input->post('phone_number'),
                                'facebook_link' => $this->input->post('facebook_link'),
                                'twiter_link' => $this->input->post('twiter_link'),
                                'address' => $this->input->post('address'),
                                'indeed' => $this->input->post('indeed'),
                                'image' => $this->input->post('image'),
                                'pinterest' => $this->input->post('pinterest')
                            );
                            $filename = $_FILES['image']['name'];
                            img_upload($_FILES['image']);
                            $data['image'] = $filename;
                            $this->setting_model->insert_data($data);
                            $this->session->set_flashdata('message','Add Successfull');
                                redirect('view_data');       
                    }  
            }
                public function view_setting_list(){
                    $this->load->view('Dashboard/partial/header');
                    $data = $this->setting_model->list_data_setting();
                    $this->load->view('Dashboard/partial/Setting/list',['temp'=>$data]);
                    $this->load->view('Dashboard/partial/footer');
                }
                public function edit_setting($id){
                    $this->load->view('Dashboard/partial/header');
                    $Edit_data = $this->setting_model->find_setting($id);
                    $this->load->view('Dashboard/partial/Setting/edit_setting',['row'=>$Edit_data]);
                    $this->load->view('Dashboard/partial/footer');
                }
                public function update_data(){
                    $hidden = $this->input->post("hidden"); 
                     $data = $this->input->post("image");    
                    $data = array(
                                    'email' => $this->input->post('email'),
                                    'description' => $this->input->post('description'),
                                    'phone_number' => $this->input->post('phone_number'),
                                    'facebook_link' => $this->input->post('facebook_link'),
                                    'twiter_link' => $this->input->post('twiter_link'),
                                    'address' => $this->input->post('address'),
                                    'indeed' => $this->input->post('indeed'),
                                    'pinterest' => $this->input->post('pinterest'),
                                    'image' => $this->input->post('image')
                                );  
                                if($_FILES['image']['name'] != ""){
                                    $new_file =  $_FILES['image']['name'];
                                    img_upload_update($_FILES['image']);
                                    $data['image'] = $new_file;
                                }  
                     if($this->setting_model->update_data($hidden,$data)){
                         $this->session->set_flashdata('message',' Update Data Sucessful');
                         $this->session->set_flashdata('message_class','alert-success');
                     }
                     else{
                         $this->session->set_flashdata('message',' No Update Data ');
                         $this->session->set_flashdata('message_class','alert-danger');
                     }
                      redirect('view_data');
                 }
                public function delete_setting($id){
                    if($this->setting_model->delete($id)){
                      $this->session->set_flashdata('message','Data Deleted');
                      $this->session->set_flashdata('message_class','alert-success');
                  }
                      else{
                        $this->session->set_flashdata('Setting','Pleae try again Not Delete Data ');
                        $this->session->set_flashdata('message_class','alert-danger');
                        }
                        $this->load->view('Dashboard/partial/Setting/list');
                         redirect('view_data');
                        $this->load->view('Dashboard/partial/footer');
                   }

                   public function view_add_banner(){
                    $this->load->view('Dashboard/partial/header');
                    $this->load->view('Dashboard/partial/Setting/add_banner_adv');
                    $this->load->view('Dashboard/partial/footer');
                } 

                public function insert_data_adv(){
                    $this->form_validation->set_rules('title', 'Add Title', 'trim|required');
                    $this->form_validation->set_rules('image', 'Image', '');
                    $this->form_validation->set_error_delimiters('<div class="error">','</div>');
                    if( $this->form_validation->run() == false){
                        $this->load->view('Dashboard/partial/header');
                        $this->load->view('Dashboard/partial/Setting/add_banner_adv');
                        $this->load->view('Dashboard/partial/footer');
                }
                else{ 
                    $data = array(
                            'title' => $this->input->post('title'),
                            'image' => $this->input->post('image') 
                        );
                        $filename = $_FILES['image']['name'];
                        img_upload($_FILES['image']);
                        $data['image'] = $filename;
                        $this->setting_model->insert_banner_data($data);
                        $this->session->set_flashdata('message','Add Successfull');
                            redirect('view_banner_data_adv');       
                } 
                }

                public function view_banner_list(){
                    $this->load->view('Dashboard/partial/header');
                    $data = $this->setting_model->list_data_banner();
                    $this->load->view('Dashboard/partial/Setting/banner_list_adv',['temp'=>$data]);
                    $this->load->view('Dashboard/partial/footer');
                }
                public function edit_banner_adv($id){
                    $this->load->view('Dashboard/partial/header');
                    $data = $this->setting_model->find_banner($id);
                    $this->load->view('Dashboard/partial/Setting/edit_banner',['row'=>$data]);
                    $this->load->view('Dashboard/partial/footer');
                }
                public function update_banner_data(){
                    $hidden = $this->input->post("hidden"); 
                     $data = $this->input->post("image");    
                    $data = array(
                                    'title' => $this->input->post('title'),
                                    'image' => $this->input->post('image')
                                );  
                                if($_FILES['image']['name'] != ""){
                                    $new_file =  $_FILES['image']['name'];
                                    img_upload_update($_FILES['image']);
                                    $data['image'] = $new_file;
                                }  
                     if($this->setting_model->update_advertisement($hidden,$data)){
                         $this->session->set_flashdata('message',' Update Data Sucessful');
                         $this->session->set_flashdata('message_class','alert-success');
                     }
                     else{
                         $this->session->set_flashdata('message',' No Update Data ');
                         $this->session->set_flashdata('message_class','alert-danger');
                     }
                      redirect('view_banner_data_adv');
                 }
                public function delete_banner_adv($id){
                    if($this->setting_model->delete_banner_data($id)){
                      $this->session->set_flashdata('message','Data Deleted');
                      $this->session->set_flashdata('message_class','alert-success');
                  }
                      else{
                        $this->session->set_flashdata('Banner','Pleae try again Not Delete Data ');
                        $this->session->set_flashdata('message_class','alert-danger');
                        }
                        $this->load->view('Dashboard/partial/Setting/banner_list_adv');
                         redirect('view_banner_data_adv');
                        $this->load->view('Dashboard/partial/footer');
                   }

}
?>