<?php 
class DashboardController extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->logged_in();
      $this->load->helper('image');
      $this->load->helper('drop-down');

      $this->load->model('front_end_model');
  }
  private function logged_in(){
    if(!$this->session->userdata('id')){
      redirect('login');
    }
  }
    public function view(){
      // $data = get_notification();
      // $order = order_get_notification();
      // $review = review_get_notification();
               notification_count();
      // echo "<pre>";print_r(notification_count());exit;
      // session_start();
      //  $_SESSION['firstname'];
      $recent_product_data = $this->front_end_model->recent_product();
    	$this->load->view('Dashboard/partial/master',['recent'=> $recent_product_data]);
  }
  public function Add_Product(){
    $this->load->view('Dashboard/partial/Add_product');
}
public function test_Product(){
  $this->load->view('Dashboard/partial/test_product');
}
}
?>