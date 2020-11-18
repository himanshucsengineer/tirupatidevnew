<?php
    class Term extends CI_controller{
        public function __construct()
    {
        parent::__construct();

    }

//car insurance
        public function index(){
        $this->load->model('frontend/Termmodel');
        
            
        
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/term',$data);
            $this->load->view('frontend/template/footer');
        }
        

       


    public function termData(){
        $this->load->model('frontend/Termmodel');
        $this->input->post('formSubmit');
        $this->load->config('email');
        $this->load->library('email');
       // $refer = '.base_url().'?id='.$_SESSION["referid"].';
        $from = $this->config->item('smtp_user');
        $to = 'vikaspoonia17@gmail.com';
        $subject = "Term Data";
        $message = "<p>Gender: ".$this->input->post('gen')."</p>
                    <p>Age: ".$this->input->post('age')."</p>
                    <p>Occupation: ".$this->input->post('occu')."</p>
                    <p>Income: ".$this->input->post('inco')."</p>
                    <p>Education: ".$this->input->post('edu')."</p>
                    <p>Cover Amount: ".$this->input->post('cover')."</p>
                    <p>Medical condition: ".$this->input->post('medi')."</p>
                    <p>Number: ".$this->input->post('mob')."</p>
                    <p>Email: ".$this->input->post('mail')."</p>
                  ";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        $this->form_validation->set_rules('gen', 'Gender', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('occu', 'Occupation', 'required');
        $this->form_validation->set_rules('inco', 'Anual income', 'required');
        $this->form_validation->set_rules('edu', 'Education', 'required');
        $this->form_validation->set_rules('cover', 'Cover amount', 'required');
        $this->form_validation->set_rules('medi', 'Medical Condition', 'required');
        $this->form_validation->set_rules('mob', 'Mobile number', 'required');
        $this->form_validation->set_rules('mail', 'Email', 'required');
        
        $name =array("Gender","Age","Occupation","Anual income","Education","Cover amount","Medical condition","Mobile number", "Email");
        if ($this->form_validation->run()){ 
        $data = array(
            'gender' => $this->input->post('gen'),
            'age' => $this->input->post('age'),
            'occupation' => $this->input->post('occu'),
            'income' => $this->input->post('inco'),
            'education' => $this->input->post('edu'),
            'amount' => $this->input->post('cover'),
            'm_condition' => $this->input->post('medi'),
            'number' => $this->input->post('mob'),
            'email' => $this->input->post('mail'),
        );

            if($this->Termmodel->term_data($data) && $this->email->send()){
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




