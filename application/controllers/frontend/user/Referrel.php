<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Referrel extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('frontend/invoicedatamodel');
            
        }
        
    public function index()
    {
        $data['fetch_mypolicy'] = $this->invoicedatamodel->fetch_policy($_SESSION["email"]);
        
        $this->load->view('frontend/template/header.php');
        $this->load->view('frontend/template/desh.php');
        $this->load->view('frontend/user/referrel.php',$data);
       
    }
    
    
    public function export(){
            $file_name = 'Refferal_Data'.'.csv';
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Type: application/csv");
            
            $getPurchaseData = $this->invoicedatamodel->fetch_user($_SESSION["referid"]);
            
            $file = fopen('php://output','w');
            
            $header = array("Sr no","Refer id", "Name", "Email", "Mobile Number","money earn" ,"Insurance type", "Total Premium", "Premium Paid", "date");
            
            fputcsv($file, $header);
            
            foreach ($getPurchaseData as $key => $value) { 
                    fputcsv($file, $value);                

                
            }
            fclose($file);
            exit;
                
            
        }
}

/* End of file Dasboard.php */
