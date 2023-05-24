<?php
class Admin_Chat_Controller extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->model('front_end_model');
      $this->load->model('customer_model');
      $this->load->model('admin_chat_model');

  }
  
        public function Admin_chat(){
        
          $this->load->view('Dashboard/partial/header');

          $all_customer_data = $this->customer_model->all_customer();
          $id = $this->input->post('id');
          $query = $this->db->select('*')->from('login_details')->where('id',$id)->order_by("last_activity", "DESC")->limit(1)->get()->row();
          $post = array(
            'data' => $all_customer_data,
            'result' => $query,
          );
               
           $this->load->view('Dashboard/chat/admin_chat',$post);
          
          //$this->load->view('Dashboard/chat/admin_chat');
          $this->load->view('Dashboard/partial/footer');
        }
        public function update_status(){
          $this->load->view('Dashboard/partial/header');
          $update_user_status = $this->admin_chat_model->update_stats();
         // print_r($update_user_status); exit;
          $this->load->view('Dashboard/partial/footer');
        }
        //  public function fetch_user_last_activity(){
        
        // // $id = $this->input->post('id');
        // // $query = $this->db->select('*')->from('login_details')->where('id',$id)->get()->row();
        // //print_r($query);
        // $this->load->view('Dashboard/chat/admin_chat',['row' => $query]);
        //  }

        public function fetch_chat(){
            $user_id = $this->input->post('id');
           // print_r($user_id);
           $data= '';
           $com = $this->admin_chat_model->communication_between_chat($user_id);
          // echo    $this->db->last_query();
             //  print_r($com);
            $output = '';
            // $chat_user_data = get_chat_user_data(); 
              //print_r($chat_user_data); 
              
               // print_r($row->firstname);
          foreach($com as $data){
           
            if($data['to_user_id'] == 25){
           $output.="
                                            <li class='clearfix'>
                                                 <div class='chat-avatar'>
                                                     <img src='<?php echo base_url() ?>assets/images/users/user-5.jpg' class='rounded' alt='James Z' />
                                                   <i>".$data['timestamp']."</i>
                                                 </div>
                                             
                                                 <div class='conversation-text'>
                                                     <div class='ctext-wrap'>
                                                         <i> AD</i>
                                                         <p>
                                                             ".$data['chat_message']."
                                                         </p>
                                                     </div>
                                                 </div>
                                               
                                                 <div class='conversation-actions dropdown'>
                                                     <button class='btn btn-sm btn-link' data-bs-toggle='dropdown' aria-expanded='false'><i class='mdi mdi-dots-vertical font-16'></i></button>
                                                     <div class='dropdown-menu dropdown-menu-end'>
                                                         <a class='dropdown-item' href='#'>Copy Message</a>
                                                         <a class='dropdown-item' href='#'>Edit</a>
                                                         <a class='dropdown-item' href='#'>Delete</a>
                                                     </div>
                                                 </div>

                                             </li>
                                           
                                             <input type='hidden' id='spf_id' name='user_id' value='$user_id''>
          
                                        ";
            }else{
                $output.="
                <li class='clearfix odd'>
                <div class='chat-avatar'>
                    <img src='<?php echo base_url() ?>assets/images/users/user-1.jpg' class='rounded' alt='Geneva M' />
                    <i>10:01</i>
                </div>
                <div class='conversation-text'>
                    <div class='ctext-wrap'>
                    <i> user</i>
                        <p>
                        ".$data['chat_message']."
                        </p>
                    </div>
                </div>
                <div class='conversation-actions dropdown'>
                    <button class='btn btn-sm btn-link' data-bs-toggle='dropdown' aria-expanded='false'><i class='mdi mdi-dots-vertical font-16'></i></button>
   
                    <div class='dropdown-menu'>
                        <a class='dropdown-item' href='#'>Copy Message</a>
                        <a class='ropdown-item' href='#'>Edit</a>
                        <a class='dropdown-item' href='#'>Delete</a>
                    </div>
                </div>
            </li>
                ";

            
          }
                                      
                                         echo $output; 
        
        }                           
        }

        public function insert_chat(){
           $ChatText = $this->input->post('ChatText');
           $rec_id = $this->input->post('rec_id');
           

           $chatdata = array(
            'chat_message' => $this->input->post('ChatText'),
            'to_user_id' => $_SESSION['id'],
            'from_user_id' => $this->input->post('rec_id'),
        );
        $data = $this->admin_chat_model->chat_insert_model($chatdata);

        }
}
 ?>
