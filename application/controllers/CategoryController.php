<?php
class CategoryController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
    }
        public function Add_category(){
            $this->load->view('Dashboard/partial/header');
            $this->load->view('Dashboard/partial/Category/Add_category');
            $this->load->view('Dashboard/partial/footer');
        }
            public function insert(){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('category_name','Enter Category','required|alpha');
                $this->form_validation->set_rules('parent_id','Numbers Only Select ','required|alpha');
                    $post = $this->input->post();
                    $post = array(
                        'category_name' => $this->input->post('category_name'),
                        'parent_id' => $this->input->post('parent_id'),
                        'on_front' => $this->input->post('on_front')
                        );
                    $this->load->model('category_model');
                    if($this->category_model->insert_category($post)){
                        $this->session->set_flashdata('Category',' added  Successfull');
                        $this->session->set_flashdata('user_register_class','alert alert-success');
                    }
                    else{
                        $this->session->set_flashdata('login_failed','Invalid username/Password');
                         redirect("add_category");
                    }
                     redirect('view');
            }
            public function edit_category($id){
                $this->load->view('Dashboard/partial/header');
                $category = $this->category_model->find_category($id);
                $this->load->view('Dashboard/partial/Category/edit_category',['row'=>$category]);
                $this->load->view('Dashboard/partial/footer');
            }
            public function updatecategory(){
            	$hidden = $this->input->post("hidden");
            	$data['category_name'] = $this->input->post("category_name");
            	$data['parent_id'] = $this->input->post("parent_id");
                if($this->category_model->update_item($hidden,$data)){
                    $this->session->set_flashdata('message','Articles Update  Sucessful');
                    $this->session->set_flashdata('message_class','alert-success');
                }
                else{
                    $this->session->set_flashdata('message','Articles Not Update Data ');
                    $this->session->set_flashdata('message_class','alert-danger');  
                }
                return redirect('view');
            }
            public function view_category(){
                $this->load->view('Dashboard/partial/header');
                $data = $this->category_model->categorylist();
                $this->load->view('Dashboard/partial/Category/view_category',['temp'=>$data]);
                $this->load->view('Dashboard/partial/footer');
            }
            public function delete_category($id){
                if($this->category_model->del($id)){
                    $this->session->set_flashdata('message','Delete  Sucessful');
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
}


?>