<?php
class loginController extends CI_Controller{
    public function login_view(){
        if($this->session->userdata('id')){
           // print_r($_SESSION);
            redirect('admin');
          }
        $this->load->view('Authentication/login');
    }
    public function register_view(){
        $this->load->view('Authentication/register');
    }
    public function basic_table(){
        $this->load->view('Authentication/table');
    }
    public function index(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        // echo $email;
        // echo $password;
       $this->load->model('login_model');
      $query =   $this->login_model->validate($email)->result_array();
       if($query){
       $data = $query[0]['id'];
      $data = array(
        'id' => $query[0]['id'],
        'email' => $query[0]['email'],
    );
    if($password == $query[0]['password'])
    {
      $this->session->set_flashdata('login_success','Successfull Login');
      $this->session->set_flashdata('message_class','alert-success');
      $this->session->set_userdata($data);
       redirect('admin');
    }
    else{
        $this->session->set_flashdata('login_failed','Invalid username/Password');
        redirect('login');
      }
}
else{
    $this->session->set_flashdata('login_failed','Invalid username/Password');
    redirect('login');
  }
    }
        public function register(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('firstname','First Name','required|alpha');
            $this->form_validation->set_rules('lastname','Password ','required|max_length[8]');
            $this->form_validation->set_rules('email','Email Name','required|valid_email|is_unique[register.email]');
            $this->form_validation->set_rules('password','Password ','required|max_length[8]');
            $this->form_validation->set_rules('gender','gender','required');
            $this->form_validation->set_rules('city','City Name','required|alpha');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
            if($this->form_validation->run())
            {
                $post = $this->input->post();
                $this->load->model('Login_model','add_reg');
                if($this->add_reg->register_data($post)){
                    $this->session->set_flashdata('user_register','User Register added  Successfull');
                    $this->session->set_flashdata('user_register_class','alert alert-success');

                }
            }
                else{
                    $this->session->set_flashdata('register','Email Already exit');
                    $this->session->set_flashdata('user_register_class','alert alert-danger');

                }
                return redirect('register');
        }
    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}

?>