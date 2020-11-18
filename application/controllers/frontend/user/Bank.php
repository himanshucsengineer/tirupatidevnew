<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/refermodel');
            
        }
        
    public function index()
    {
        $data['history'] = $this->refermodel->fetch_user($_SESSION["referid"]);
        $this->load->view('frontend/template/header.php');
        $this->load->view('frontend/template/desh.php');
        $this->load->view('frontend/user/bank.php',$data);
       
    }
    
    
   

}

/* End of file Dasboard.php */
