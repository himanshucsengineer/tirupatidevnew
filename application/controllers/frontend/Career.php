<?php
    class Career extends CI_controller{
        public function __construct()
    {
        parent::__construct();

    }


//healthinsurance
    public function index(){
        
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/career');
            $this->load->view('frontend/template/footer');
        }








    public function careerData(){
        
       
           
           
        $this->load->model('frontend/Careermodel');
        if($this->input->post('formSubmit')){
            $this->load->config('email');
        $this->load->library('email');
       // $refer = '.base_url().'?id='.$_SESSION["referid"].';
        $from = $this->config->item('smtp_user');
        $to = 'vikaspoonia17@gmail.com';
        $subject = "Career Data";
        $message = "<p>Name: ".$this->input->post('name')."</p>
                    <p>Email: ".$this->input->post('mail')."</p>
                    <p>Number: ".$this->input->post('mob')."</p>
                    <p>Work experiance: ".$this->input->post('work')."</p>
                    <p>Position: ".$this->input->post('pos')."</p>
                    <p>Location: ".$this->input->post('loc')."</p>
                  ";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
            
            
            
            $this->form_validation->set_rules('name', '', 'required');
            $this->form_validation->set_rules('mob', '', 'required');
            $this->form_validation->set_rules('mail', '', 'required');
            $this->form_validation->set_rules('work', '', 'required');
            $this->form_validation->set_rules('pos', '', 'required');
            $this->form_validation->set_rules('loc', '', 'required');
        
           
       
        if ($this->form_validation->run() ){ 
            
   
    
           
        
        if (!empty($_FILES['images']['name'])){

        $File_name='resume-'.strtotime(date('YmdHis'));

        $config['upload_path'] = APPPATH . '../upload/career';
        $config['file_name'] = $File_name;
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'pdf|doc|docx';
        $config["max_size"] = 2048;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('images')) {

            $this->data['error'] = $this->upload->display_errors();
          $this->session->set_flashdata('error',$this->upload->display_errors());
      
             redirect('frontend/career');
        } else {
         $dataimage_return = $this->upload->data();
$imageurl=base_url().'upload/career/'.$dataimage_return['file_name'];
         
            
          }
          }
        
                $datas = array(
            'name' => $this->input->post('name'),
            'number' => $this->input->post('mob'),
            'email' => $this->input->post('mail'),
            'experiance' => $this->input->post('work'),
            'position' => $this->input->post('pos'),
            'location' => $this->input->post('loc'),
            
            'file' =>$imageurl,
        );

        
        
      

        if($this->Careermodel->career_insert($datas) && $this->email->send()){
            $this->send($datas,$name,$this->input->post('referid'));
            $this->session->set_flashdata('success','Successfully submited');
             redirect('frontend/career');
            
        }
        else{
            $this->session->set_flashdata('error','Error In Submission');
             redirect('frontend/career');
            
        }
         

    }
    else{
        
        
        $this->session->set_flashdata('error','fill all the fields.');
         redirect('frontend/career');
    }
            
            
        }  else{
               $this->session->set_flashdata('error','Something went wrong when saving the file, please try again.');
             redirect('frontend/career');
               }  
       
 }
 
 
 
 
 
  

public function send($data,$name,$refer_code)
{
    $to =  'eniacoder@gmail.com';  // User email pass here
    $subject = 'A New Mail For Health Insurance';
    $i=0;
    $from = 'fasthealthup@gmail.com';              // Pass here your mail id
    $emailContent = '<!DOCTYPE html><html><head><title>Page Title</title></head><body style="border:2px solid black;"><header style="background-color:rgb( 239, 69, 84 );text-align:center;padding:20px 0;"><h2 style="color:white;">Bike Insurance</h2></header><container style="text-align:center;">';
    foreach ($data as $title => $value){
       $emailContent .= "<h3>".$name[$i]." : ".$value."<h3>";
        $i++;
    }

    $emailContent .= "<h3>Refer_id : ".$refer_code."<h3>";
    $emailContent .= '</container><footer style="height:50px;background-color:black"></footer></body></html>';
                


    $config['protocol']    = 'smtp';
    $config['smtp_host']    = 'ssl://smtp.googlemail.com';
    $config['smtp_port']    = '465';
    $config['smtp_timeout'] = '60';
    $config['smtp_user']    = 'fasthealthup@gmail.com';    //Important
    $config['smtp_pass']    = '@navneet1';  //Important
    $config['charset']    = 'utf-8';
    $config['newline']    = "\r\n";
    $config['mailtype'] = 'html'; // or html
    $config['validation'] = TRUE; // bool whether to validate email or not 
    
    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($emailContent);
        if($this->email->send()){
            return True;
        }
        else{
            return False;
        }
    
}

}
?>