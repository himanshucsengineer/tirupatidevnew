<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
        
            
        }
        
    public function index()
    {
        
        $this->load->view('frontend/template/header.php');
        $this->load->view('frontend/template/desh.php');
        $this->load->view('frontend/user/transfer.php',$data);
       
    }
    
    
    public function add_bank(){
        $this->load->model('frontend/Transfermodel');
         $this->form_validation->set_rules('anum', 'Account Number', 'trim|required');
       
         $this->form_validation->set_rules('ifsc', 'Ifsc Code', 'trim|required');
         $this->form_validation->set_rules('hname', 'Holder Name', 'trim|required');

         $this->form_validation->set_rules('am', 'Amount', 'trim|required');
         if ($this->form_validation->run()) {
            //= $this->session->userdata('email');;
           $data['email']=$_SESSION["email"];
             $data['a_number'] = $this->input->post('anum');
             $data['a_ifsc'] = $this->input->post('ifsc');
             $data['h_name'] = $this->input->post('hname');
            $data['amount'] = $this->input->post('am');
             if($this->Transfermodel->account_insert($data)){
                $this->session->set_flashdata('response', '<p class="text-center text-success">Account Transfer Requested</p>');
                redirect(base_url().'frontend/user/transfer');
             }else{
                 redirect(base_url().'error_show');
             }
         } else {
            $this->session->set_flashdata('response', '<p class="text-center text-danger">Fill All Fields</p>');
                redirect(base_url().'frontend/user/transfer');
         }

     }
    
}

/* End of file Dasboard.php */
