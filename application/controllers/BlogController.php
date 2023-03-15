<?php
class BlogController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('image');
        $this->load->model('blog_model');
    }
    public function blog(){
        $data = $this->blog_model->all_blog_list_view();
        $post = array(
            'alldata' => $data
            );
        $this->load->view('Front-End/Blog/blog',$post);
      }
      public function add_blog(){
        $this->load->view('Dashboard/partial/header');
        $this->load->view('Dashboard/partial/Blog/add_blog');
        $this->load->view('Dashboard/partial/footer');
      }
          public function insert_blog(){
              $this->form_validation->set_rules('blog_title', 'Blog Name', 'trim|required');
              $this->form_validation->set_rules('description', 'Description', 'trim|required');
              $this->form_validation->set_rules('status', 'Image ', '');
              $this->form_validation->set_rules('date', 'Date ', 'required');
              $this->form_validation->set_error_delimiters('<div class="error">','</div>');
              if( $this->form_validation->run() == false){
                $this->load->view('Dashboard/partial/header');
                $this->load->view('Dashboard/partial/Blog/add_blog');
                $this->load->view('Dashboard/partial/footer');
            }
            else{ 
              $data = array(
                        'blog_title' => $this->input->post('blog_title'),
                        'description' => $this->input->post('description'),
                        'image' => $this->input->post('image'),
                        'date' => $this->input->post('date')
                    );
                    $filename = $_FILES['image']['name'];
                    img_upload($_FILES['image']);
                    $data['image'] = $filename;

                    $this->blog_model->insert_blog($data);
                    $this->session->set_flashdata('message','Blog Add Successfull');
                        redirect('list_blog');       
            }       
           }
           public function view_blog_list(){
            $this->load->view('Dashboard/partial/header');
            $data = $this->blog_model->bloglist();
            $this->load->view('Dashboard/partial/Blog/view_blog',['temp'=>$data]);
            $this->load->view('Dashboard/partial/footer');
           }
           public function edit_blog($id){
            $this->load->view('Dashboard/partial/header');
            $Blog = $this->blog_model->find_blog($id);
            // echo "<pre>"; print_r($Blog);exit;
            $this->load->view('Dashboard/partial/Blog/edit_blog',['row'=>$Blog]);
            $this->load->view('Dashboard/partial/footer');
        }
        public function update_blog_item(){
          $post = $this->input->post();
           $hidden = $this->input->post("hidden");
           $data = $this->input->post("image");    
           $data = array(
            'blog_title' => $this->input->post('blog_title'),
            'description' => $this->input->post('description'),
            'image' => $this->input->post('image'),
               );  
                   if($_FILES['image']['name'] != ""){
                       $new_file =  $_FILES['image']['name'];
                       img_upload_update($_FILES['image']);
                       $data['image'] = $new_file;
                   }   
           if($this->blog_model->update_item_blog($hidden,$data)){
               $this->session->set_flashdata('message','Blog Update  Sucessful');
               $this->session->set_flashdata('message_class','alert-success');
               // echo "update sucessfull";
           }
           else{
               $this->session->set_flashdata('message','Blog Not Update Data ');
               $this->session->set_flashdata('message_class','alert-danger');
               // echo "Not update Data";
           }
            redirect('list_blog');
       }
           public function delete_blog($id){

            if($this->blog_model->delete($id)){
              $this->session->set_flashdata('message','Blog Deleted');
              $this->session->set_flashdata('message_class','alert-success');
          }
              else{
                $this->session->set_flashdata('Blog','Pleae try again Not Delete Data ');
                $this->session->set_flashdata('message_class','alert-danger');
                }
                $this->load->view('Dashboard/partial/Blog/view_blog');
                 redirect('list_blog');
                $this->load->view('Dashboard/partial/footer');
           }    
}


?>