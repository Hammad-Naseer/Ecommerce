<?php
class ChatController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('front_end_model');
        $this->load->model('customer_model');
        $this->load->model('admin_chat_model');
    }

    public function add(){
    $get_data = $this->admin_chat_model->get_admin_data();
            //  $data = array(
            //    'data'=> $get_data,
            //     'p_id' => $p_id
            // );
       $this->load->view('Front-End/Blog/chat',['data'=>$get_data]);
        // echo $P_id;exit;
    }
    
}


?>