<?php
class CustomerController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_model');
        $this->load->helper('image');
        $this->load->helper('drop-down');
    }
    public function login_view_customer(){
        $this->load->view('Front-End/Customer-Authentication/login');
    }
    public function view_customer(){
        $this->load->view('Dashboard/partial/header');
        $all_customer_data = $this->customer_model->all_customer();
     //  print_r($all_customer_data);
        $this->load->view('Dashboard/partial/Customer/customer_view',['data'=>$all_customer_data]);
        $this->load->view('Dashboard/partial/footer');
    }
    public function login_customer(){
        $this->form_validation->set_rules('email', 'Email ', 'required');
        $this->form_validation->set_rules('password', 'Password ', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        if( $this->form_validation->run() == false){
            $this->load->view('Front-End/Customer-Authentication/login'); 
        }
        else{
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->customer_model->login($email,$password);
            if($user->id){
                $userdata = array(
                    'id' => $user->id,
                    'firstname' => $user->firstname
                );
                $this->session->set_userdata($userdata);
                redirect('front_end');        
            }
            else{
                $this->session->set_flashdata('login_failed','Invalid email/Password');
                redirect('login_customer');
            }
        }   
    }
    public function Register(){
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email ', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password ', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm-Password ', 'required|matches[password]');
        $this->form_validation->set_rules('contact', 'Contact ', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');
        if( $this->form_validation->run() == false){
            $this->load->view('Front-End/Customer-Authentication/register');
        }
        else
        {
            $userdata = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'confirm_password' => md5($this->input->post('confirm_password')),
                'contact' => $this->input->post('contact'),
            );
           
            $this->customer_model->save($userdata);
            // $id = $_SESSION['id'];
            // print_r($_SESSION);exit;
            $this->session->set_flashdata('message','Register Successfull');
            redirect('login_customer');
        }
    }
      public function logout(){
        $this->session->sess_destroy();
        redirect('login_customer'); 
      }
      public function category_list_view($id){
        $list_product_category = $this->customer_model->find_category_list($id);
        $array = (array) $list_product_category; 
        $this->load->view('Front-End/Blog/category_product_listing',['list'=>$array]);
       }
        public function category_products_listing($id){
            $list_product_category = $this->customer_model->find_product_list($id);
            $array = $list_product_category; 
            $brand = ($array[0]['brand_id']!="") ? $array[0]['brand_id'] : 0;
            $realted_product = $this->customer_model->find_realted_list($brand);
            $review = $this->customer_model->review_list($id);
            $array =  $list_product_category; 
            $this->load->view('Front-End/Blog/category_product_listing',['list'=>$array,'related'=>$realted_product,'review_data'=>$review]);
        }
        function addToCart($proID){
            // Fetch specific product by ID
            $product = $this->customer_model->find_product_list($proID);
        //   $_SESSION['id'];
            // Add product to the cart
            $data = array(
                'id'        => $proID,
                'qty'       => 1,
                'price'     => $product[0]['sale_price'],
                'name'      => $product[0]['product_title'],
                'image'     => $product[0]['image'],
                'type'     => 'cart'
            );
            $this->cart->insert($data);
            // Redirect to the cart page
            $this->session->set_flashdata('Cart',' Cart added  Successfull');
            $this->session->set_flashdata('user_register_class','alert alert-success');
            redirect('CustomerController/cart/');
        }
        function removeItem($rowid){
            // Remove item from cart
            $remove = $this->cart->remove($rowid);
            // Redirect to the cart page
            $this->session->set_flashdata('message','Cart Delete  Sucessfull');
            $this->session->set_flashdata('message_class','alert-success');
            redirect('CustomerController/cart/');
        }
        function cart()
        {            
            $data['cartItems'] = $this->cart->contents();
            $this->load->view('Front-End/Blog/cart',$data);
        }
        public function check_out(){
            $data['cartItems'] = $this->cart->contents();
            $this->load->view('Front-End/Blog/check_out',$data);
          }
        function updateItemQty(){
            $update = 0;
            // Get cart item info
            $rowid = $this->input->post('rowid');
            $qty = $this->input->post('qty');
            // Update item in the cart
            if(!empty($rowid) && !empty($qty)){
                $data = array(
                    'rowid' => $rowid,
                    'qty'   => $qty
                );
                $update = $this->cart->update($data);
            }
            // print_r($_SESSION);
            $this->session->set_flashdata('message','Cart Update  Sucessful');
            $this->session->set_flashdata('message_class','alert-success');
            redirect('CustomerController/cart/');
        }
        function favToCart($proID){
            // Fetch specific product by ID
            $product = $this->customer_model->find_product_list($proID);
            // Add product to the cart
            $data['wishList'] = array(
                'id'        => $proID,
                'qty'       => 1,
                'price'     => $product[0]['sale_price'],
                'name'      => $product[0]['product_title'],
                'image'     => $product[0]['image'],
                'type'     => 'wishlist'
            );
            $this->cart->insert($data,"wishList");
            // print_r($_SESSION);
            // Redirect to the cart page
            $this->session->set_flashdata('Cart',' Cart added  Successfull');
            $this->session->set_flashdata('user_register_class','alert alert-success');
            redirect('CustomerController/fav_cart/');
        }
        function fav_cart()
        {
            $data['cartItem'] = $this->cart->contents();
            $this->load->view('Front-End/Blog/fav_cart',$data);
        }
        function update_favItemQty(){
            $update = 0;
            // Get cart item info
            $rowid = $this->input->post('rowid');
            $qty = $this->input->post('qty');
            // Update item in the cart
            if(!empty($rowid) && !empty($qty)){
                $data = array(
                    'rowid' => $rowid,
                    'qty'   => $qty
                );
                $update = $this->cart->update($data);
            }
            // print_r($_SESSION);
            $this->session->set_flashdata('message','Cart Update  Sucessful');
            $this->session->set_flashdata('message_class','alert-success');
            redirect('CustomerController/fav_cart/');
        }
        function remove_Item($rowid){
            // Remove item from cart
            $remove = $this->cart->remove($rowid);
            // Redirect to the cart page
            $this->session->set_flashdata('message','Cart Delete  Sucessfull');
            $this->session->set_flashdata('message_class','alert-success');
            redirect('CustomerController/cart/');
        }
}
?>