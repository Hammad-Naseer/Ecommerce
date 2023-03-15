<?php
//echo BASEPATH;
if(!defined('BASEPATH'))  exit('No direct script access allowed');

class Pdfgenerate extends CI_controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('order_model');
        $this->load->library('pdf');
    }
 
    function project_summery_pdf(){
        $id = $_SESSION['id'];    
         $order_id = $this->uri->segment(3);
        $data = $this->order_model->order_detail_list($order_id);
         $html_content=$this->load->view('Front-End/Blog/order_pdf',['temp'=>$data],true);
         $this->pdf->loadHtml($html_content);
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->render();
        //var_dump( $this->pdf->render($html_content));
         $this->pdf->stream("Invoice.pdf",array("Attachment"=>0));
        }

}

?>