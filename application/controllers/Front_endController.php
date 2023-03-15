<?php
class Front_endController extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->model('front_end_model');
  }
  public function front_view(){
  $this->load->model('front_end_model');
    $all_product_data = $this->front_end_model->All_list();
    $feature_data = $this->front_end_model->feature_list();
    $data_category = $this->front_end_model->front_category();
    $blog_list_data = $this->front_end_model->blog_list_view();
    $image_slider_data = $this->front_end_model->image_slider_view();
    $cart_data = $this->cart->contents();
        $post = array(
          'alldata' => $all_product_data,
          'alldata1' => $feature_data,
          'front_cat' => $data_category,
          'blog_list' => $blog_list_data,
          'slide_list' => $image_slider_data,
          'cartItems'=> $cart_data,  
        );
    $this->load->view('Front-End/index', $post);
  }
  public function blog(){
    $this->load->view('Front-End/Blog/blog');
  }
  public function contact(){
    $this->load->view('Front-End/Blog/contact');
  }

  public function check_out(){
    $data['cartItems'] = $this->cart->contents();
    $this->load->view('Front-End/Blog/check_out',$data);
  }
  public function blog_detail($id){
      $blog_data = $this->front_end_model->single_blog($id);
    $this->load->view('Front-End/Blog/blog_details',['single_data'=>$blog_data]);
  }
  public function specific_category_list($id){
    $list_category = $this->front_end_model->find_category_specific_list($id);
    $this->load->view('Front-End/Blog/category_list',['list'=> $list_category]);
  }
  public function filter_category_list($id){
    $list_category = $this->front_end_model->find_category_filter_list($id);
    $this->load->view('Front-End/Blog/filter_list',['list'=> $list_category]);
  }
  public function search_list(){
    $data = $this->input->get('search');
    $search = $this->front_end_model->search_product($data);
    $this->load->view('Front-End/Blog/search',['list'=>$search]);
  }
  public function shop_view(){
    $this->load->library('pagination');
    if($this->input->post('barndIds')){
      $brands = implode(",",$this->input->post('barndIds'));
      //dollar sign remove
      $input_min   = $this->input->post('min_price');
      $output_min  = floatval(ltrim($input_min, '$'));
  
      $input_max   = $this->input->post('max_price');
      $output_max  = floatval(ltrim($input_max, '$'));
      $data = array(
        'brand' => $brands,
        'min_price' =>  $output_min,
        'max_price' => $output_max 
    );
      $list_shopping = $this->front_end_model->filter_list_view($data);
    }
    else{
    $config['base_url'] = base_url('Front_endController/shop_view');
    $config['per_page'] = 2;
    $config['total_rows'] = $this->front_end_model->getTotalRows();
    $config['full_tag_open'] ="<ul class='pagination'>";
    $config['full_tag_close'] ="</ul>";
    $config['next_tag_open'] ="<li class='page-item disabled'>";
    $config['next_tag_close'] ="</li>";
    $config['prev_tag_open'] ="<li class='page-item'>";
    $config['prev_tag_close'] ="</li>";
    $config['num_tag_open'] ="<li class='page-item'>";
    $config['num_tag_close'] ="</li>";
    $config['cur_tag_open'] ="<li class='page-item active'><a class='page-link'>";
    $config['cur_tag_close'] ="<span class='sr-only'>(current)</span></a></li>";
    $config['attributes'] = array('class' => 'page-link');
    $this->pagination->initialize($config);
    $list_shopping = $this->front_end_model->shopping_list_view($config['per_page'],$this->uri->segment(3));
    }
    $this->load->view('Front-End/Blog/shop',['list'=> $list_shopping]);
  }
    public function shop_cart(){
      $this->load->view('Front-End/Blog/shoppingcart');
    }
         public function view_category(){
        $this->load->view('Dashboard/partial/header');
        $data = $this->category_model->categorylist();
        $this->load->view('Dashboard/partial/Category/view_category',['temp'=>$data]);
        $this->load->view('Dashboard/partial/footer');
        } 

        public function chat_list(){
         
          $this->load->view('Dashboard/partial/header');
          $this->load->view('Front-End/Blog/chat');
          $this->load->view('Dashboard/partial/footer');
        }
}
 ?>
