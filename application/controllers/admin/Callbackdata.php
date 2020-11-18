<?php
    class Callbackdata extends CI_controller{

        public function __construct()
        {
            parent::__construct();
            if(! $this->session->userdata('vendorAuth')){
            redirect('login');}
            $this->load->model('admin/Callbackdatamodel');
        }
              


                  
              public function index(){
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/sidebar');
                $this->load->view('admin/template/topbar');
                $this->load->view('admin/callback');
                $this->load->view('admin/template/footer');
            }
            
            public function addinventory_api(){
    
              $getPurchaseData = $this->Callbackdatamodel->fetchinventory_api();
      
              //print_r($getPurchaseData);
      
              foreach ($getPurchaseData as $key => $value) { 
  //                $short_desc_vl=$lst_desc.'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value->id.'" data-toggle="tooltip" data-original-title="Edit">Read More</a>';
                    
                    $arrya_json[] = array($value['name'],$value['mob'],$value['insurance'],'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value['id'].'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
               <a class="delete_sliders" data-id="'.$value['id'].'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
                }
                 echo json_encode(array('data'=>$arrya_json));
                    
                    
                     
              }

                public function export(){
            $file_name = 'Callback_Data'.'.csv';
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Type: application/csv");
            
            $getPurchaseData = $this->Callbackdatamodel->fetchinventory_api();
            
            $file = fopen('php://output','w');
            
            $header = array("Sr no","Name", "mobile number","insurance");
            
            fputcsv($file, $header);
            
            foreach ($getPurchaseData as $key => $value) { 
                
               
                    fputcsv($file, $data);                

                
            }
            fclose($file);
            exit;
                
            
        }



              public function deletecallback(){ 
        
                if($this->input->post('deletesliderId'))
            {
              $this->form_validation->set_rules('deletesliderId','text','required');
              if($this->form_validation->run() == true)
              {
                $getDeleteStatus = $this->Callbackdatamodel->deletecalldata($this->input->post('deletesliderId'));
                if($getDeleteStatus['message'] == 'yes')
                {
                  $this->session->set_flashdata('success','Gallery  deleted successfully');
                  redirect(base_url()."admin/callbackdata");
                }
                else
                {
                  $this->session->set_flashdata('error','Something went wrong. Please try again');
                redirect(base_url()."admin/callbackdata");
                  
                }
              }
              else
              {
                $this->session->set_flashdata('error','Something went wrong. Please try again');
                redirect(base_url()."admin/callbackdata");

              }
            }
          }
    
    }

?>