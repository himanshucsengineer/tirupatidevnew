<?php
    class Travel extends CI_controller{
        public function __construct()
    {
        parent::__construct();

    }


//Travelinsurance
    public function index(){
        
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/travel');
            $this->load->view('frontend/template/footer');
        }

    public function travelData(){
        
        $this->load->model('frontend/Travelmodel');
        $this->input->post('formSubmit');
        $this->load->config('email');
        $this->load->library('email');
       // $refer = '.base_url().'?id='.$_SESSION["referid"].';
        $from = $this->config->item('smtp_user');
        $to = 'vikaspoonia17@gmail.com';
        $subject = "Travel Data";
        $message = "<p>Destination: ".$this->input->post('desti')."</p>
                    <p>Start Trip: ".$this->input->post('strip')."</p>
                    <p>End Trip: ".$this->input->post('etrip')."</p>
                    <p>No of Traveler: ".$this->input->post('trav')."</p>
                    <p>Traveler 1: ".$this->input->post('trav1')."</p>
                    <p>Traveler 2: ".$this->input->post('trav2')."</p>
                    <p>Traveler 3: ".$this->input->post('trav3')."</p>
                    <p>Traveler 4: ".$this->input->post('trav4')."</p>
                    <p>Traveler 5: ".$this->input->post('trav5')."</p>
                    <p>Traveler 6: ".$this->input->post('trav6')."</p>
                    <p>Number: ".$this->input->post('mob')."</p>
                    <p>Email: ".$this->input->post('mail')."</p>
                  ";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        
        
        $this->form_validation->set_rules('desti', 'Destination', 'required');
        $this->form_validation->set_rules('strip', 'Start trip', 'required');
        $this->form_validation->set_rules('etrip', 'End Trip', 'required');
        $this->form_validation->set_rules('trav', 'No of travelers', 'required');
        $this->form_validation->set_rules('mob', 'Mobile number', 'required');
        $this->form_validation->set_rules('mail', 'Email', 'required');
       
        
        $name =array("Destination","Start trip","End Trip","No of travelers","Mobile number", "Email");
        if ($this->form_validation->run()){ 

    //    $check1 = $this->input->post('contact1');
    //    $check2 = $this->input->post('contact2');

        $datas = array(
            'destination' => $this->input->post('desti'),
            's_trip' => $this->input->post('strip'),
            'e_trip' => $this->input->post('etrip'),
            'traveler' => $this->input->post('trav'),
            'f_traveler' => $this->input->post('trav1'),
            's_traveler' => $this->input->post('trav2'),
            'th_traveler' => $this->input->post('trav3'),
            'fo_traveler' => $this->input->post('trav4'),
            'five_traveler' => $this->input->post('trav5'),
            'six_traveler' => $this->input->post('trav6'),
            'number' => $this->input->post('mob'),
            'email' => $this->input->post('mail'),
            
            
        );

        if($this->Travelmodel->travel_insert($datas) && $this->email->send()){
            $this->send($data,$name,$this->input->post('referid'));
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
    $to =  'eniacoder@gmail.com';  // User email pass here
    $subject = 'A New Mail For Travel Insurance';
    $i=0;
    $from = 'fasttravelup@gmail.com';              // Pass here your mail id
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
    $config['smtp_user']    = 'fasttravelup@gmail.com';    //Important
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