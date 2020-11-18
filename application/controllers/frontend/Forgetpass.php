<?php 
class Forgetpass extends CI_Controller 
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();
	
		$this->load->library('session');
		/*load Model*/
	 $this->load->helper('url','form');
		
	}
    public function index(){
    $this->load->model('frontend/ReferandEarnmodel');
      
    
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/forgetpass');
        $this->load->view('frontend/template/footer');
}	

public function forgot_pass()
	{
	    $this->load->config('email');
        $this->load->library('email');
	    $this->load->model('frontend/ReferandEarnmodel');
	    $this->input->post('formSubmit');
        
        $email=$this->input->post('mail');
			$que=$this->db->query("select Password,email from referandearn where email='$email'");
			$row=$que->row();
			$user_email=$row->email;
			
        $this->form_validation->set_rules('forgot_pass', 'Forget Password', 'required');
	    
	     $name =array("Forgot Password");
	    
	    
	    if ($this->form_validation->run() && (!strcmp($email, $user_email))){
	        
			$pass=$row->Password;
				/*Mail Code*/
				$from = $this->config->item('smtp_user');
                $to = $user_email;
                $subject = "Forgot password";
                $message = "<h3>Your Password is : $pass . </h3>
                  ";

                $this->email->set_newline("\r\n");
                $this->email->from($from);
                $this->email->to($to);
                $this->email->subject($subject);
                $this->email->message($message);
				
				if($this->email->send()){
				    redirect('frontend/forgetpass');
				   echo "<h6>Your Password has been sent on your email</h6>";
				}else{
				    
				    echo "<h6 class='text-danger text-center'>Please enter Registerd Email id</h6>";
				}
				
				
				}
	        
	    else{
	        echo "<h6 class='text-danger text-center'>PLease Fill All Fields</h6>";
	    }
	    
	
		
	  
   }

}   
?>