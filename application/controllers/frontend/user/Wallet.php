<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Wallet extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
          $this->load->model('frontend/invoicedatamodel');
            
        }
        
    public function index()
    {
        $data['fetch_refer'] = $this->invoicedatamodel->fetch_user($_SESSION["referid"]);
        $data['fetch_wimoney'] = $this->invoicedatamodel->fetch_wmoney($_SESSION["email"]);
        
        $this->load->view('frontend/template/header.php');
        $this->load->view('frontend/template/desh.php');
        $this->load->view('frontend/user/wallet.php',$data);
       
    }
    
    
    
     public function export(){
            $file_name = 'Refferal_Data'.'.csv';
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Type: application/csv");
            
            $getPurchaseData = $this->invoicedatamodel->fetch_user($_SESSION["referid"]);
            
            $file = fopen('php://output','w');
            
            $header = array("Sr no", "Refer id", "Name", "Email", "Mobile Number","money earn" ,"Insurance type", "Total Premium", "Premium Paid", "date");
            
            fputcsv($file, $header);
            
            foreach ($getPurchaseData as $key => $value) { 
                
                
                    fputcsv($file, $value);  

                
            }
            fclose($file);
            exit;
                
            
        }

}
