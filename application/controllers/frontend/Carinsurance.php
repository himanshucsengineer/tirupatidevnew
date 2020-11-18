<?php
    class Carinsurance extends CI_controller{
        public function __construct()
    {
        parent::__construct();

    }

//car insurance
        public function index(){
        $this->load->model('frontend/Carmodel');
        
            $data['company'] = $this->Carmodel->fetchComp();
        
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/carinsurance',$data);
            $this->load->view('frontend/template/footer');
        }
        public function getCompany(){
        $this->load->model('frontend/Carmodel');

            $postData = $this->input->post('comp');        
            $data = $this->Carmodel->fetchModels($postData);
            echo json_encode($data);
        }

        public function getModel(){
        $this->load->model('frontend/Carmodel');
        $postData = $this->input->post('comp');        
        $data = $this->Carmodel->fetchVariants($postData);
        echo json_encode($data);
        }


    public function renewDetails(){
        $this->load->model('frontend/Carmodel');
        $this->input->post('formSubmit');

        $this->load->config('email');
        $this->load->library('email');
        
        
         $from = $this->config->item('smtp_user');
        $to = 'vikaspoonia17@gmail.com';
        $subject = "Renew Car Data";
        $message = "<p>Registration no: ".$this->input->post('registraion')."</p>
        <p>Company Name: ".$this->input->post('company')."</p>
        <p>Fuel Type: ".$this->input->post('fuel_type')."</p>
        <p>Registrtion Year: ".$this->input->post('regyr')."</p>
        <p>Modal: ".$this->input->post('modl')."</p>
        <p>Policy Type: ".$this->input->post('ptypes')."</p>
        <p>Varient: ".$this->input->post('vari')."</p>
        <p>Policy Expire: ".$this->input->post('policy_expire')."</p>
        <p>Policy Insurer: ".$this->input->post('pinsur')."</p>
        <p>Email: ".$this->input->post('mail')."</p>
        <p>Mobile Number: ".$this->input->post('mob')."</p>
                  ";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
    



        $this->form_validation->set_rules('registraion', 'Registration', 'required');
        $this->form_validation->set_rules('company', 'Company Name', 'required');
        $this->form_validation->set_rules('fuel_type', 'Fuel Type', 'required');
        $this->form_validation->set_rules('regyr', 'Registrtion Year', 'required');
        $this->form_validation->set_rules('modl', 'Modal', 'required');
        $this->form_validation->set_rules('ptypes', 'Policy Type', 'required');
        $this->form_validation->set_rules('vari', 'Varient', 'required');
        $this->form_validation->set_rules('policy_expire', 'Policy Expire', 'required');
        $this->form_validation->set_rules('pinsur', 'Policy Insurer', 'required');
        $this->form_validation->set_rules('mob', '', 'required');
        $this->form_validation->set_rules('mail', '', 'required');
        $name =array("Registration Number","Company","Fuel Type","Registration Year","Modal","Policy Type","Varieny","Policy Expire","Policy Insurer","Email","Mobile number");
        if ($this->form_validation->run()){ 
        $data = array(
            'registration_no' => $this->input->post('registraion'),
            'maufacturer_id' => $this->input->post('company'),
            'fuel_type' => $this->input->post('fuel_type'),
            'registration_year' => $this->input->post('regyr'),
            'prev_policy' => $this->input->post('ptypes'),
            'modal_id' => $this->input->post('modl'),
            'variant_id' => $this->input->post('vari'),
            'policy_expire' => $this->input->post('policy_expire'),
            'prev_insurer' => $this->input->post('pinsur'),
            
        'email' => $this->input->post('mail'),
        'mob' => $this->input->post('mob'),
        );

            if($this->Carmodel->car_data($data) && $this->email->send()){
                $this->send($data,$name,"No Refer Code");
                echo "<h6 class='text-success text-center'>Successfully Submited</h6>";
            }
            else{
                echo "<h6 class='text-danger text-center'>Error In Submission</h6>";
            }
         
              
    }
    else{
               
        echo "<h6 class='text-danger text-center'>PLease Fill All Fields</h6>";
               
    }
    }
    public function newCar(){
        $this->load->model('frontend/Carmodel');
        $this->input->post('formSubmit');
        $this->load->config('email');
        $this->load->library('email');
        
        
         $from = $this->config->item('smtp_user');
        $to = 'vikaspoonia17@gmail.com';
        $subject = "New Car Data";
        $message = "<p>Registration no: ".$this->input->post('registraion')."</p>
        <p>Company Name: ".$this->input->post('company')."</p>
        <p>Fuel Type: ".$this->input->post('fuel_type')."</p>
        <p>Registrtion Year: ".$this->input->post('regyr')."</p>
        <p>Modal: ".$this->input->post('model')."</p>
        
        <p>Varient: ".$this->input->post('vari')."</p>
        
        <p>Email: ".$this->input->post('mail')."</p>
        <p>Mobile Number: ".$this->input->post('mob')."</p>
                  ";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        
        $this->form_validation->set_rules('registraion', 'Registration', 'required');
        $this->form_validation->set_rules('company', 'Company Name', 'required');
        $this->form_validation->set_rules('fuel_type', 'Fuel Type', 'required');
        $this->form_validation->set_rules('regyr', 'Registrtion Year', 'required');
        $this->form_validation->set_rules('model', 'Modal', 'required');
       
        $this->form_validation->set_rules('vari', 'Varient', 'required');
        
       
        $this->form_validation->set_rules('mob', '', 'required');
        $this->form_validation->set_rules('mail', '', 'required');
        $name =array("Registration Number","Company","Fuel Type","Registration Year","Modal Id","Variant Id","Email","Mobile number");
        if ($this->form_validation->run()){ 
            $data = array(
                
                'registration_no' => $this->input->post('registraion'),
            'maufacturer_id' => $this->input->post('company'),
            'fuel_type' => $this->input->post('fuel_type'),
            'registration_year' => $this->input->post('regyr'),
            
            'modal_id' => $this->input->post('model'),
            'variant_id' => $this->input->post('vari'),
            
            
            
        'email' => $this->input->post('mail'),
        'mob' => $this->input->post('mob'),
            );
            
            
            if($this->Carmodel->car_data($data) && $this->email->send()){
                $this->send($data,$name,$this->input->post('referid'));
                echo "<h6 class='text-success texpirepolr'>Successfully Submited</h6>";
            }
            else{
                echo "<h6 class='text-danger text-center'>Error In Submission</h6>";
            }
         
              
    }
    else{
               
        echo "<h6 class='text-danger text-center'>PLease Fill All Fields</h6>";
               
    }
    }
    public function send($data,$name,$refer_code)
    {
        $to = 'navneetofficial25@gmail.com';

$subject = 'Registration Form Of mssblt School';
        $emailContent = '<!DOCTYPE html><html><head><title>Page Title</title></head><body style="border:2px solid black;"><header style="background-color:rgb( 239, 69, 84 );text-align:center;padding:20px 0;"><h2 style="color:white;">Bike Insurance</h2></header><container style="text-align:center;">';
        foreach ($data as $title => $value){
           $emailContent .= "<h3>".$name[$i]." : ".$value."<h3>";
            $i++;
        }
    
        $emailContent .= "<h3>Refer_id : ".$refer_code."<h3>";
        $emailContent .= '</container><footer style="height:50px;background-color:black"></footer></body></html>';
        $headers = 'From: form@mssbltc.com' . "\r\n".'Content-type:text/html;charset=UTF-8' . "\r\n" .'Reply-To: form@mssbltc.com' . "\r\n" .'X-Mailer: PHP/' . phpversion(); 
       mail($to, $subject, $emailContent, $headers);
     

        
    }  
}
?>