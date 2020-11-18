<?php
    class Refer extends CI_controller{
        public function __construct()
    {
        parent::__construct();
   //     $this->load->model('frontend/Homemodel');
   $this->load->helper('url','form');
    }

        public function index(){
       //     $getsocials['brandslogo'] = $this->Homemodel->fetchaddinventory_api();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/refer');
            $this->load->view('frontend/template/footer');
        }


    public function invite(){
        $this->load->model('frontend/ReferandEarnmodel');
        $this->input->post('formSubmit');
        $this->load->config('email');
        $this->load->library('email');
       // $refer = '.base_url().'?id='.$_SESSION["referid"].';
        $from = $this->config->item('smtp_user');
        $to = 'vikaspoonia17@gmail.com';
        $subject = "Invite Data";
        $message = "<p>Friend Name: ".$this->input->post('fname')."</p>
                    <p>Friend Email: ".$this->input->post('fmail')."</p>
                    <p>Friend Number: ".$this->input->post('fmob')."</p>
                    <p>City: ".$this->input->post('city')."</p>
                    <p>cutomer Number: ".$this->input->post('cnum')."</p>
                  ";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        $this->form_validation->set_rules('fname', 'Friend name', 'required');
        $this->form_validation->set_rules('fmail', 'Friend Email', 'required');
        $this->form_validation->set_rules('fmob', 'Friend number', 'required');
        $this->form_validation->set_rules('city', 'city', 'required');
        $this->form_validation->set_rules('cnum', 'number', 'required');

        
        
        $name =array("Friend name","Friend Email","Friend number","city","number");
       
       
        if ($this->form_validation->run()){ 
        $data = array(
            'f_name' => $this->input->post('fname'),
            'f_email' => $this->input->post('fmail'),
            'f_number' => $this->input->post('fmob'),
            'city' => $this->input->post('city'),
            'c_number' => $this->input->post('cnum'),
            
        );
        
        

            if($this->ReferandEarnmodel->invite_data($data) && $this->email->send()){
         
                echo "<h6 class='text-success text-center'>Invitation Message sent Successfully </h6>";
            }
            else{
                echo "<h6 class='text-danger text-center'>Error In Submission</h6>";
            }
         
              
    }
    else{
               
        echo "<h6 class='text-danger text-center'>PLease Fill All Fields</h6>";
               
    }
    }







        public function ref_gen(){
            $this->load->model('frontend/ReferandEarnmodel');
            $this->input->post('formSubmit');
            $data = array(
                'email' => $this->input->post('email'),
                'referid' => "X112222",
            );
            if($this->ReferandEarnmodel->refercode_insert($data)){
                echo "<h6 class='text-success text-center'>Successfully Submited</h6>";
            }
            else{
                echo "<h6 class='text-danger text-center'>Error In Submission</h6>";
            }
            echo $this->ReferandEarnmodel->fetchModeldata()[0];
            
        }

    }

?>  