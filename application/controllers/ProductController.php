<?php 
class ProductController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->helper('image');
        $this->load->helper('drop-down');
      
    }
        public function Add_Product(){
            $this->load->view('Dashboard/partial/header');
         
            $this->load->view('Dashboard/partial/Product/Add_product');
            $this->load->view('Dashboard/partial/footer');
        }
        public function insert_product(){
           $filename = $_FILES['image']['name'];
            img_upload($_FILES['image']);
            $this->load->library('form_validation');
            $post = array(
                'product_title' => $this->input->post('product_title'),
                'brand_id' => $this->input->post('brand_id'),
                'category_id' => $this->input->post('category_id'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'discount_price' => $this->input->post('discount_price'),
                'is_featured' => $this->input->post('is_featured'),
                'trending' => $this->input->post('trending'),
                'best_sale' => $this->input->post('best_sale'),
                'date' => $this->input->post('date')
                );
              $post['image'] = $filename;
                $this->load->model('product_model');
            $last_id = $this->product_model->insert_product($post);
                if($last_id){
                    $key    = $this->input->post('key_val');
                    $value    = $this->input->post('value');
                    $counter = count($key);
                    for($i=0; $i<$counter; $i++){
                        $data['product_id'] =  $last_id;
                        $data['key_val'] = $key[$i];
                        $data['value'] = $value[$i];
                        $this->db->insert('product_attribute',$data);
                    }
                    $this->session->set_flashdata('Product','product added  Successfull');
                    $this->session->set_flashdata('message_class','alert alert-success');
                }
                else{
                    $this->session->set_flashdata('login_failed','Invalid username/Password');
                     redirect("add_product");
                }
                 redirect('view_product');
        }
        public function view_review(){
            $this->load->view('Dashboard/partial/header');
            $this->load->view('Dashboard/partial/Product/product_review');
            $this->load->view('Dashboard/partial/footer');
        }
        public function insert_review(){
          $id=$this->input->post('p_id');
            $data = array(
                'Comment' => $this->input->post('Comment'),
                'stars' => $this->input->post('stars'),
                'user_id'=> $_SESSION['id'] ,
                'product_id' => $id
                );
              $this->product_model->review_product_insert($data);
              notification('1','User comment product reviews','review');

               redirect(base_url().'CustomerController/category_products_listing/'.$id);
        }
        public function view_Product(){
           
            $this->load->view('Dashboard/partial/header');
            // $curl = curl_init();
            //     curl_setopt_array($curl, array(
            //         CURLOPT_URL => 'http://localhost/Ecommerce/Api_product_data_product',
            //         CURLOPT_RETURNTRANSFER => true,
            //         CURLOPT_ENCODING => '',
            //         CURLOPT_MAXREDIRS => 10,
            //         CURLOPT_TIMEOUT => 0,
            //         CURLOPT_FOLLOWLOCATION => true,
            //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //         CURLOPT_CUSTOMREQUEST => 'GET',
            //         CURLOPT_HTTPHEADER => array(
            //         'Cookie: ci_session=tkprv0rr84j8hl2a99ro1rdhidndpp3i'
            //         ),
            //     ));
            //     $response = curl_exec($curl);
               
                // curl_close($curl);
             
            $data = $this->product_model->productlist();
            $this->load->view('Dashboard/partial/Product/products',['temp'=>$data]);
            $this->load->view('Dashboard/partial/footer');
        }

        public function edit_product($id){
            $this->load->view('Dashboard/partial/header');
            $product = $this->product_model->find_product($id);
            $this->load->view('Dashboard/partial/Product/edit_product',['row'=>$product]);
            $this->load->view('Dashboard/partial/footer');
        }
        public function updateproductitem(){
           $post = $this->input->post();
            $hidden = $this->input->post("hidden");
            $data = array(
                'product_title' => $this->input->post('product_title'),
                'brand_id' => $this->input->post('brand_id'),
                'category_id' => $this->input->post('category_id'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'is_featured' => $this->input->post('is_featured'),
                'trending' => $this->input->post('trending'),
                'best_sale' => $this->input->post('best_sale'),
                );
                    $checkbox_value1 = isset($data['is_featured']) ? 1 : 0;
                    $checkbox_value2 = isset($data['trending']) ? 1 : 0;
                    $checkbox_value3 = isset($data['best_sale']) ? 1 : 0;
                    
                    $data = array(
                        'is_featured' => $checkbox_value1,
                        'trending' => $checkbox_value2,
                        'best_sale' => $checkbox_value3
                    );
                    if($_FILES['image']['name'] != ""){
                        $new_file =  $_FILES['image']['name'];
                        img_upload_update($_FILES['image']);
                        $data['image'] = $new_file;
                    }
            if($this->product_model->update_item($hidden,$data)){
                $this->session->set_flashdata('message','Product Update  Sucessful');
                $this->session->set_flashdata('message_class','alert-success');
            }
            else{
                $this->session->set_flashdata('message','Product Not Update Data ');
                $this->session->set_flashdata('message_class','alert-danger');
            }
            return redirect('view');
        }
        public function delete_product($id){
            if($this->product_model->del($id)){
                $this->session->set_flashdata('message','Delete  Sucessfull');
                $this->session->set_flashdata('message_class','alert-danger');
            }
            else{
                $this->session->set_flashdata('message','Pleae try again Not Delete Data ');
                $this->session->set_flashdata('message_class','alert-danger');
            }
            return redirect('view_product');
            $this->load->view('Dashboard/partial/footer');
        }
        public function product_detail(){
            $this->load->view('Dashboard/partial/header');
            $this->load->view('Dashboard/partial/Product/product_detail');
            $this->load->view('Dashboard/partial/footer');
        }
}