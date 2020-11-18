<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            //$this->load->model('admin/usermodel');
            
        }
        
    public function index()
    {
        //$data['fetch_refer'] = $this->usermodel->fetch_user($_SESSION["referid"]);
        $this->load->view('frontend/template/header.php');
        $this->load->view('frontend/template/desh.php');
        $this->load->view('frontend/user/dashboard.php',$data);
       
    }

}

/* End of file Dasboard.php */
