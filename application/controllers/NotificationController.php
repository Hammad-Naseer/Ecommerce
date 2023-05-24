<?php
class NotificationController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('image');
        $this->load->helper('drop-down');
        $this->load->model('notification_model');
    }
    public function view_list(){
        $this->load->view('Dashboard/partial/header');
        $all_notification_data = $this->notification_model->all_notification();
        // echo "<Pre>";print_r($all_notification_data);exit;
        $this->load->view('Dashboard/partial/Notification/view_notification',['data'=>$all_notification_data]);
        $this->load->view('Dashboard/partial/footer');
    }
    public function view_reviewList(){
        $this->load->view('Dashboard/partial/header');
        $all_review_data = $this->notification_model->all_reviews();
        $this->load->view('Dashboard/partial/Notification/view_reviews',['data'=>$all_review_data]);
        $this->load->view('Dashboard/partial/footer');
    }

    public function readnotification($id,$type){
        update_notification($id);
        if($type == "Registered")
        {
            redirect(base_url().'/view_customer');
        }
        elseif($type == "order")
        {
            redirect(base_url().'/view_order');

        }
        elseif($type == "review")
        {
            redirect(base_url().'view_viewList');

        }
          
    }
}


?>