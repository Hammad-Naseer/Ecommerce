<?php
class OrderController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('image');
        $this->load->helper('drop-down');
        $this->load->model('order_model');

    }
    public function view_order(){
        $this->load->view('Dashboard/partial/header');
        $data = $this->order_model->list_all_order_admin();
        // echo "<pre>";print_r($data);exit;
        $this->load->view('Dashboard/partial/Order/view_order',['order'=>$data]);
        $this->load->view('Dashboard/partial/footer');
    }
    public function add_advertisement(){
        $this->load->view('Dashboard/partial/header');
        $this->load->view('Dashboard/partial/Order/add_advertisement');
        $this->load->view('Dashboard/partial/footer');
    }
    public function insert_data(){
          $this->form_validation->set_rules('name', 'Add Name', 'trim|required');
          $this->form_validation->set_rules('description', 'Description', 'trim|required');
          $this->form_validation->set_rules('status', 'Status ', 'required');
          $this->form_validation->set_rules('shop', 'shop ', 'required');
          $this->form_validation->set_rules('link', 'Link ', 'required');
          $this->form_validation->set_error_delimiters('<div class="error">','</div>');
          if( $this->form_validation->run() == false){ 
            $this->load->view('Dashboard/partial/header');
            $this->load->view('Dashboard/partial/Order/add_advertisement');
            $this->load->view('Dashboard/partial/footer');
        }
        else{
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'shop' => $this->input->post('shop'),
                'link' => $this->input->post('link')
            );
            $filename = $_FILES['image']['name'];
            img_upload($_FILES['image']);
            $data['image'] = $filename;
            $this->order_model->insert_adv($data);
                    $this->session->set_flashdata('message','Slider Data Add Successfull');
                 redirect('view_adv');
        }
    }
       public function view_adv_list(){
        $this->load->view('Dashboard/partial/header');
        $data = $this->order_model->adv_list();
        $this->load->view('Dashboard/partial/Order/view_advertisement',['temp'=>$data]);
        $this->load->view('Dashboard/partial/footer');
        }
       public function edit_adv($id){
        $this->load->view('Dashboard/partial/header');
        $Adv = $this->order_model->find_adv($id);
        $this->load->view('Dashboard/partial/Order/edit_adv',['row'=>$Adv]);
        $this->load->view('Dashboard/partial/footer');
         }
         public function update_data(){
             $hidden = $this->input->post("hidden");
             $data = $this->input->post("image");
             $data = array(
              'name' => $this->input->post('name'),
              'description' => $this->input->post('description'),
              'status' => $this->input->post('status'),
              'shop' => $this->input->post('shop'),
              'link' => $this->input->post('link')
                 );  
                     if($_FILES['image']['name'] != ""){
                         $new_file =  $_FILES['image']['name'];
                         img_upload_update($_FILES['image']);
                         $data['image'] = $new_file;
                     }    
             if($this->order_model->update_item_adv($hidden,$data)){
                 $this->session->set_flashdata('message','Slider Data Update  Sucessful');
                 $this->session->set_flashdata('message_class','alert-success');
             }
             else{
                 $this->session->set_flashdata('message','Blog Not Update Data ');
                 $this->session->set_flashdata('message_class','alert-danger');
             }
              redirect('view_adv');
         }
       public function delete_adv($id){
        if($this->order_model->delete($id)){
            $this->session->set_flashdata('message','Slider Data Deleted');
            $this->session->set_flashdata('message_class','alert-success');
        }
            else{
              $this->session->set_flashdata('ADV','Pleae try again Not Delete Data ');
              $this->session->set_flashdata('message_class','alert-danger');
              }
              $this->load->view('Dashboard/partial/Order/view_advertisement');
               redirect('view_adv');
              $this->load->view('Dashboard/partial/footer');
       }
       public function insert_check_out(){
        if(empty($_SESSION['id'])){
            redirect('login_customer');
        }else{
                // if(isset($_SESSION){
                $item = $this->cart->contents();
                // echo "<pre>";print_r($item);exit;
                $subTotal = 0;
                if (!empty($item)) {
                    foreach ($item as $row) {
                        if($row['type'] == "cart"):
                        $subTotal += $row['subtotal']; 
                        endif;
                    }
                }
                $payement_method = $this->input->post('payement_method');
                    $item = array(
                        'user_id'=> $_SESSION['id'],
                        'payement_method' => $payement_method,
                        'grand_total' => $subTotal
                    );
                $cart = $this->order_model->cart_insert($item);
                $last_order_id = $cart;
                if($last_order_id){
                $item = $this->cart->contents();
                $quantity = 0; $product_id=0;
                if (!empty($item)) {
                    foreach ($item as $row) {
                        if($row['type'] == "cart"):
                            $data = array(
                                'Quantity' => $row['qty'],
                                'product_id' => $row['id'],
                                'order_id'  => $last_order_id,
                                'price'  => $row['price']
                            );
                            // echo "<pre>";print_r($data);exit;
                            $this->order_model->order_item_insert($data);
                        endif;
                    }
                }
                }
                $this->form_validation->set_rules('firstname', 'Enter  Name', 'trim|required');
                $this->form_validation->set_rules('lastname', 'Last name Add', 'trim|required');
                $this->form_validation->set_rules('country', 'Enter Country ', 'required');
                $this->form_validation->set_rules('email', 'Correct/Valid-Email ', 'required');
                $this->form_validation->set_rules('contact', 'Contact number Add Plz ', 'required');
                $this->form_validation->set_rules('address', 'Enter Your Address ', 'required');
                $this->form_validation->set_rules('city', 'Enter City ', 'required');
                $this->form_validation->set_rules('payement_method', 'Select Button ', 'required');
                $this->form_validation->set_error_delimiters('<div class="error">','</div>');
                if( $this->form_validation->run() == false){ 
                    $this->load->view('Front-End/Blog/check_out');
                }
                else{
                    $data = array(
                        'order_id' =>  $last_order_id,
                        'firstname' => $this->input->post('firstname'),
                        'lastname' => $this->input->post('lastname'),
                        'country' => $this->input->post('country'),
                        'email' => $this->input->post('email'),
                        'contact' => $this->input->post('contact'),
                        'address' => $this->input->post('address'),
                        'city' => $this->input->post('city'),
                        'user_id'=> $_SESSION['id'],
                        'payement_method' => $this->input->post('payement_method')
                    );
                    $data_check_out =  $this->order_model->check_out_data_insert($data);
             

                    notification('1','Your order has been delievered succesfull Thank you for Order!','order');
                    redirect('detail_order/'.$last_order_id);
                }
            }
                //else  {  redirect('login_customer')}
       }
       public function order_detail($orderID){
            // print_r($_SESSION);exit;
        //   $id = $_SESSION['id'];
        $data = $this->order_model->order_detail_list($orderID);
      
        $this->load->view('Front-End/Blog/order_detail',['temp'=>$data]);
       }   


       function getOrderDetail()
       {
        // $id = $_POST['id'];
        //  print_r($id); exit;
        $id=$this->input->post('id');
         $data = $this->order_model->modal_get_data($id);
        // print_r($data); exit;
            $output = '';
        if(!empty($data)){
            $output .= '
            <div class="widget-main padding-24">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                    </div>
                    <div>
                        <ul class="list-unstyled  spaced" style="text-align:start;">
                            <li id="firstname">
                                <b>First Name</b> : <i class="ace-icon fa fa-caret-right green"> '.$data[0]['firstname'].'</i>
                            </li>
                            <li id="lastname">
                            <b>Last Name</b> : <i class="ace-icon fa fa-caret-right green"> '.$data[0]['lastname'].'</i>
                            </li>
                            <li id="country">
                            <b>State, Country</b>: <i class="ace-icon fa fa-caret-right green"> '.$data[0]['country'].'</i><b class="green"> </b>
                            </li>
                            <li class="divider"></li>
                            <li id="contact">
                                <b>Contact Info</b>: <i class="ace-icon fa fa-caret-right green"> '.$data[0]['contact'].'</i>
                                <b class="red"></b>
                            </li>
                            <li id="email">
                                <b>Email</b> : <i class="ace-icon fa fa-caret-right green"> '.$data[0]['email'].'</i>
                            </li>
                            <li id="address">
                            <b>Address</b> : <i class="ace-icon fa fa-caret-right green"> '.$data[0]['address'].'</i>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="space"></div>

            <div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            
                            <th>Product Title</th>
                            <th class="center">Price</th>
                            <th class="center">Qty</th>
                            <th class="center">Price*Qty</th>
                            <th class="hidden-480">Discount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
            
                    <tbody>
        ';
                    // PHP Loop grand_total
                  foreach($data as $list_item) 
                  {
                    $price = $list_item['price']; $qty = $list_item['qty'];
                    $output .= '<tr>
                    <td>'.$list_item['product_title'].'</td>
                    <td>'.$list_item['sale_price'].'</td>
                    <td>'.$list_item['qty'].'</td>
                    <td>'.$list_item['price'].' '."*".' '.$list_item['qty'].'</td>
                    <td>'.$list_item['discount_price'].'</td>
                    <td>'.$price*$qty.'</td>
                  </tr>';
                  }
          $output .='  </tbody>
                </table>
            </div>

            <div class="hr hr8 hr-double hr-dotted"></div>

            <div class="row">
                <div class="col-sm-5 pull-left">
                    <h4 class="pull-left">
                        Total amount : '.$data[0]['grand_total'].'
                        <span class="red"></span>
                    </h4>
                </div>
                
            </div>

            <div class="space-6"></div>
            
        </div>
            ';

            echo $output;
                }else{
                  
            echo  "No order ...";
                                   
                }
       }

       function getOrderDetail_admin(){
        $id=$this->input->post('id');
        $data = $this->order_model->order_get_data($id);
       //    print_r($data); exit;
       $output = '';

       $output .= '
       <div class="widget-main padding-24">
       <div class="row">
           <div class="col-sm-6">
               <div class="row">
                  
               </div>
               <div>
                   <ul class="list-unstyled  spaced" style="text-align:start;">
                       <li id="firstname">
                           <b>First Name</b> : <i class="ace-icon fa fa-caret-right green"> '.$data[0]['firstname'].'</i>
                       </li>

                       <li id="lastname">
                       <b>Last Name</b> : <i class="ace-icon fa fa-caret-right green"> '.$data[0]['lastname'].'</i>
                       </li>
                       <li id="country">
                       <b>State, Country</b>: <i class="ace-icon fa fa-caret-right green"> '.$data[0]['country'].'</i><b class="green"> </b>
                       </li>
                       <li class="divider"></li>

                       <li id="contact">
                           <b>Contact Info</b>: <i class="ace-icon fa fa-caret-right green"> '.$data[0]['contact'].'</i>
                           <b class="red"></b>
                       </li>
                       <li id="email">
                           <b>Email</b> : <i class="ace-icon fa fa-caret-right green"> '.$data[0]['email'].'</i>
                       </li>
                       <li id="address">
                       <b>Address</b> : <i class="ace-icon fa fa-caret-right green"> '.$data[0]['address'].'</i>
                       </li>
                   </ul>
               </div>
           </div><!-- /.col -->
       </div><!-- /.row -->

       <div class="space"></div>

       <div>
           <table class="table table-striped table-bordered">
               <thead>
                   <tr>
                       
                       <th>Product Title</th>
                       <th class="center">Price</th>
                       <th class="center">Qty</th>
                       <th class="hidden-480">Discount</th>
                       <th>Total</th>
                   </tr>
               </thead>
       
               <tbody>
   ';
               // PHP Loop 
             foreach($data as $list_item) 
             {
                $price = $list_item['price']; $qty = $list_item['qty'];
               $output .= '<tr>
               <td>'.$list_item['product_title'].'</td>
               <td>'.$list_item['price'].'</td>
               <td>'.$list_item['qty'].'</td>
               <td>'.$list_item['discount_price'].'</td>
               <td>'.$price*$qty.'</td>
             </tr>';
             }
     $output .='  </tbody>
           </table>
       </div>

       <div class="hr hr8 hr-double hr-dotted"></div>

       <div class="row">
           <div class="col-sm-5 pull-left">
               <h4 class="pull-left">
                   Total amount : '.$data[0]['grand_total'].'
                   <span class="red"></span>
               </h4>
           </div>
           
       </div>

       <div class="space-6"></div>
       
   </div>
       ';

       echo $output; 
       }
}


?>