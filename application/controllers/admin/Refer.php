<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Refer extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/refermodel');
       
    }
    
    public function index()
    {
       $data['fetch_email'] = $this->refermodel->fetch_refer();
        $data['fetch_refer'] = $this->refermodel->fetch_referId();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/refer',$data);
        $this->load->view('admin/template/footer');
    }


public function insert_data(){
    $this->load->model('admin/refermodel');
     
    $this->input->post('formSubmit');
   
        
        $html='<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Invoice</title>
    
        <style>
            body{
                width: 100%;
                height: auto;
                border: 1px solid #cdcdcd;
                
            }
            .top{
                width: 100%;
                height: auto;
            }
          .top .top-ryt{
                width: 70%;
                height: auto;
                float: right;
                background-color: rgb( 239, 69, 84 );
                
            }
            .top .top-ryt-left{
                width: 50%;
                height: auto;
                float: left;
                color: white;
                background-color: rgb( 239, 69, 84 );
               
              
               
            }
            .top .top-ryt-left p{
                margin-bottom:-20px;
                margin-left: 2rem;
                margin-right: 1rem;
               
              
               
            }
            .top .top-ryt-ryt{
                width: 50%;
                height: auto;
                float: right;
                color: white;
                background-color: rgb( 239, 69, 84 );
            }
            .top .top-ryt-ryt p{
                margin-bottom:-20px;
                margin-left: 2rem;
                margin-right: 1rem;
            }
         .top .top-lft{
                width: 30%;
                height: auto;
                float:left;
                background-color: transparent;
            }
            
            .comm h4{
                width: 100%;
                height: auto;
                margin-top:7rem;
               
                margin-left: 1rem;
                margin-right: 1rem;
                background-color: black;
                color: white;
                padding-top: .5rem;
                padding-bottom: .5rem;
                padding-left: 1rem;
                font-size: 20px;
                font-weight: 500;
            }
            .invo{
                margin-top:-2rem;
            }
            .invo .left{
                width: 50%;
                float: left;
                margin-left: 2rem;
            }
            .invo .ryt{
                width: 50%;
                float: right;
            }
            
           .bot{
               width: 100%;
               height: 20px;
               background-color: rgb( 239, 69, 84 );
               bottom: 0px;
           }
        </style>
    </head>



<body>
   
        
            <div class="top">
                <div class="top-lft">
                        <img src="'.base_url().'assest/img/logo.jpg">
                </div>
                <div class="top-ryt">
                    <div class="top-ryt-left">
                    <p >www.tirupatiinsurance.com</p>



                        <p >info@tirupatiinsurance.com</p>
                        <p style="margin-bottom: 1.95rem;">8950000000</p>
                    </div>
                    <div class="top-ryt-ryt">
                        <p>Rajmahal Complex,</p>
                        <p >Opp-PLA Petrol</p>
                        <p >Pump, Delhi Road,</p>
                        <p style="margin-bottom: 1rem;">Hisar-125001</p>
                    </div>
                </div>
            </div>

            <div class="comm">
                <h4>Invoice Details</h4>
            </div>

            <div class="invo">
                <div class="left">
                    <h4>Invoice Number <span style="margin-left: .5rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('invonum').'</span></h4>
                    <h4>Reference Name <span style="margin-left: .2rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('rrname').'</span></h4>
                </div>
                <div class="ryt">
                <h4>Date Of issue <span style="margin-left: 1.3rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('is_date').'</span></h4>
                <h4>Policy Number <span style="margin-left: .5rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('policy_number').'</span></h4>
                </div>
            </div>
            <div class="comm">
                <h4>Billing Details</h4>
            </div>
            <div class="invo">
                <div class="left">
                    <h4>Name <span style="margin-left: .4rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('rname').'</span></h4>
                    <h4>Email <span style="margin-left: .2rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('mail').'</span></h4>
                </div>
                <div class="ryt">
                <h4>Mobile Number <span style="margin-left: .5rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('mob').'</span></h4>
                <h4>Company <span style="margin-left: 3.2rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('c_name').'</span></h4>
                </div>
            </div>

            <div class="comm">
                <h4>Product Details</h4>
            </div>
            <div class="invo" >
                <div class="left">
                    <h4 style="color:rgb( 239, 69, 84 );">Product Type <span style="margin-left: 2rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('p_type').'</span></h4>
                    <h4 style="color:rgb( 239, 69, 84 );">Vehicle Name  <span style="margin-left: 2rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('v_name').'</span></h4>
                    <h4 style="color:rgb( 239, 69, 84 ); " >Registration Date <span style="margin-left: .4rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('r_date').'</span></h4>
                </div>
                <div class="ryt">
                <h4 style="color:rgb( 239, 69, 84 );">Sub class <span style="margin-left: 3rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('s_class').'</span></h4>
                <h4 style="color:rgb( 239, 69, 84 );">Registration no.<span style="margin-left: .5rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('r_no').'</span></h4>
                <h4 style="color:rgb( 239, 69, 84 );">Due Date <span style="margin-left: 3.2rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('d_date').'</span></h4>
                </div>
            </div>
            <div class="comm">
                <h4 style="padding-top: -1rem;">Payment Details</h4>
            </div>
            <div class="invo">
                
            <div class="llff" style="margin-left:14rem;">
            <h4 >Payment Mode <span style="margin-left: 1rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('paym').'</span></h4>
            </div>
                <div class="ryt">
                <h4 style="color:rgb( 239, 69, 84 );">Net Premiuum <span style="margin-left: 1.5rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('tp').'</span></h4>
                <h4 style="color:rgb( 239, 69, 84 );">Gross Premiuum <span style="margin-left: .5rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('g_pre').'</span></h4>
                <h4 style="color:rgb( 239, 69, 84 );">Discount <span style="margin-left: 4rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('Disct').'</span></h4>
                <h4 style="color:rgb( 239, 69, 84 );">Premium Paid<span style="margin-left: 1.8rem; color:gray;">:</span><span style="margin-left: .5rem; color:gray;">'.$this->input->post('pp').'</span></h4>
                </div>
            </div>


          
</body>
</html>';
    
    
   
    
    
        $data = array(
            'refer_id' => $this->input->post('refer_id'),
            'invoice_no' => $this->input->post('invonum'),
            'isu_date' => $this->input->post('is_date'),
            'ref_date' => $this->input->post('rrname'),
            'poli_no' => $this->input->post('policy_number'),
            'reference' => $this->input->post('rname'),
            'email' => $this->input->post('mail'),
            'number' => $this->input->post('mob'),
            'company' => $this->input->post('c_name'),
            'pro_type' => $this->input->post('p_type'),
            'sub_clas' => $this->input->post('s_class'),
            'Vhichel_name' => $this->input->post('v_name'),
            'registration_no' => $this->input->post('r_no'),
            'registration_date' => $this->input->post('r_date'),
            'due_date' => $this->input->post('d_date'),
            'insurance_type' => $this->input->post('itype'),
            'total_premium' => $this->input->post('tp'),
            'premium_paid' => $this->input->post('pp'),
            'money' => $this->input->post('money'),
            'gross' => $this->input->post('g_pre'),
            'payment_meth' => $this->input->post('paym'),
            'discount' => $this->input->post('Disct'),
            
            
            
            
            
            
            
            
            
            
            
            
        );
        
        if($this->refermodel->insert($data) ){
          $this->load->library('pdf');
                $this->pdf->createPDF($html, 'mypdf', false);
                
            
        }
        else{
            $this->session->set_flashdata('admin_error','Error In Updating Please Try Again'); 
            redirect(base_url().'admin/refer');
        }    
   
  }
  
  
  public function addinventory_api(){

            $getPurchaseData = $this->refermodel->fetchinventory_api();
    
    
            foreach ($getPurchaseData as $key => $value) { 
//                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';
    
                $arrya_json[] = array($value['refer_id'],$value['invoice_no'],$value['isu_date'],$value['ref_date'],$value['poli_no'],$value['reference'],$value['email'],$value['number'],$value['company'],$value['pro_type'],$value['sub_clas'],$value['Vhichel_name'],$value['registration_no'],$value['registration_date'],$value['due_date'],$value['insurance_type'],$value['total_premium'],$value['premium_paid'],$value['money'],$value['gross'],$value['payment_meth'],$value['discount'],'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value['id'].'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value['id'].'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
            }
            
  public function export(){
            $file_name = 'Refer_Data'.'.csv';
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Type: application/csv");
            
            $getPurchaseData = $this->refermodel->fetchinventory_api();
            
            $file = fopen('php://output','w');
            
            $header = array("Sr no", "Refer Id","Invoice Number","Date of issue", "Referance Name","Policy Number"," name", "Email", "Number","Company","Product Type","Sub Class","Vhichel Name","Registration No.","Regsitration Date","Due Date","Money", "Insurance type", "Total Premium", "Premium Paid","Gross Premium","Payment Method","Discount", "Date");
            
            fputcsv($file, $header);
            
            foreach ($getPurchaseData as $key => $value) { 
                    fputcsv($file, $value);                

                
            }
            fclose($file);
            exit;
                
            
        }
   function viepdf()
    {
    $model_data=$this->refermodel->fetchModeldata($id);
        $this->load->library('pdf');
        foreach ($model_data as $key => $value) {
        $html = '<p>'.$value['email'].'</p>
                    <p>'.$value['number'].'</p>
        ';
        }
        $this->pdf->createPDF($html, 'mypdf', false);
    }
   
   public function deletecardetail(){ 
    
                    if($this->input->post('deletesliderId'))
                {
                  $this->form_validation->set_rules('deletesliderId','text','required');
                  if($this->form_validation->run() == true)
                  {
                    $getDeleteStatus = $this->refermodel->deletereferdata($this->input->post('deletesliderId'));
                    if($getDeleteStatus['message'] == 'yes')
                    {
                      $this->session->set_flashdata('success','Gallery  deleted successfully');
                      redirect(base_url()."admin/refer");
                    }
                    else
                    {
                      $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/refer");
                      
                    }
                  }
                  else
                  {
                    $this->session->set_flashdata('error','Something went wrong. Please try again');
                    redirect(base_url()."admin/refer");
    
                  }
                }
              }
  
}

/* End of file Refer.php */
