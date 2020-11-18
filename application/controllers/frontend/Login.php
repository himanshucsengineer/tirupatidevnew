<?php
    class Login extends CI_controller{
        public function __construct()
    {
        parent::__construct();
   //     $this->load->model('frontend/Homemodel');
    }

        public function index(){
       //     $getsocials['brandslogo'] = $this->Homemodel->fetchaddinventory_api();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            $this->load->view('frontend/login');
            $this->load->view('frontend/template/footer');
        }

        public function login(){
            $url = $_SESSION['url']; 
            $this->load->model('frontend/ReferandEarnmodel');
            $model_data=$this->ReferandEarnmodel->fetchModeldata();
            $login_success=0;
            $user_data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            foreach ($model_data as $key => $value) {
                if($value['email']==$user_data['email'] && $value['Password']==$user_data['password'])
                {
                    $_SESSION["email"]=$value["email"];
                    $_SESSION["name"]=$value["name"];
                    $_SESSION["number"]=$value["number"];
                    $_SESSION["addrs"]=$value["addrs"];
                    $_SESSION["ref_count"]=$value["ref_count"];
                    $_SESSION["earn"]=$value["earn"];
                    $_SESSION["referid"]=$value["referid"];
                    $_SESSION["bank_acc"]=$value["bank_acc"];
                    $_SESSION["ifsc"]=$value["ifsc"];
                    $_SESSION["acc_name"]=$value["acc_name"];
                    $_SESSION["amount"]=$value["amount"];
                    $login_success=1;
                    break;
                }
            }
            if($login_success==1){
                
                if($url == "https://tirupatiinsurance.com/refer-earn"){
                    redirect($url); 
                }else{
                    redirect(base_url().'frontend/user/dashboard');
                }
                
                
            }
            else{
                $this->session->set_flashdata('error','Wrong Username Or Password'); 
                redirect(base_url()); 
            }
            

             
        }

        public function signup(){
            $this->load->model('frontend/ReferandEarnmodel');
            $this->input->post('formSubmit');
            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[referandearn.email]');
         if ($this->form_validation->run()){ 
            if($this->input->post('password')!=$this->input->post('cpassword')){
                $this->session->set_flashdata('error','Password Not Matched'); 
                redirect(base_url()); 
                return 0;
            }
            $data = array(
                'email' => $this->input->post('email'),
                'name' => $this->input->post('name'),
                'password' => $this->input->post('password'),
                'referid' => uniqid(),
                'earn' => 0,
                'ref_count' => 0,
                'bank_acc' => "Not Available",
                'ifsc' => "Not Available",
                'acc_name' => "Not Available"
            );
            if($this->ReferandEarnmodel->signup($data)){
                $this->session->set_flashdata('success','Signup Successful'); 
                redirect(base_url()); 
            }
            else{
                $this->session->set_flashdata('error','Wrong Username Or Password'); 
                redirect(base_url()); 
            }
        }else{
            $this->session->set_flashdata('error','Already Registered'); 
            redirect(base_url()); 
    }

    }
    
    
    public function update_pro(){
        $this->load->model('frontend/ReferandEarnmodel');
        
        $this->input->post('formSubmit');

            
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('mail', 'Email', 'required');
            $this->form_validation->set_rules('mob', 'Number', 'required');
            $this->form_validation->set_rules('add', 'Address', 'required');
            if ($this->form_validation->run()){ 
               
               $name = $this->input->post('name');
                        $email = $this->input->post('mail');
                        $number = $this->input->post('mob');
                        $addrs = $this->input->post('add');
                        
                
                    if($this->ReferandEarnmodel->update_pro($name,$number,$email,$addrs)){
                        
                        
                        $_SESSION["name"]=$this->input->post('name');
                        $_SESSION["email"]=$this->input->post('mail');
                        $_SESSION["number"]=$this->input->post('mob');
                        $_SESSION["addrs"]=$this->input->post('add');
                        $this->session->set_flashdata('dashboard_error','Updated Successfully'); 
                        redirect(base_url().'frontend/user/dashboard');  
                    }
                    else{
                        $this->session->set_flashdata('dashboard_error','Error In Bank Details'); 
                        redirect(base_url().'frontend/user/dashboard'); 
                    }
                }
                else{
                    $this->session->set_flashdata('dashboard_error','Please Fill all Fields'); 
                    redirect(base_url().'frontend/user/dashboard');   
                }
       
}

public function update_bank(){
        $this->load->model('frontend/ReferandEarnmodel');
        $this->input->post('formSubmit');

             $email=$_SESSION["email"];
            $this->form_validation->set_rules('bank_acc', 'Account No', 'required');
           // $this->form_validation->set_rules('cbank_acc', 'Account No', 'required');
            $this->form_validation->set_rules('ifsc', 'IFSC Code', 'required');
            $this->form_validation->set_rules('acc_name', 'Account Holder Name', 'required');
            if ($this->form_validation->run()){ 
             
                    $bank_acc = $this->input->post('bank_acc');
                        $ifsc = $this->input->post('ifsc');
                        $acc_name = $this->input->post('acc_name');
                        
                    if($this->ReferandEarnmodel->update_bank($bank_acc,$ifsc,$acc_name,$email)){
                        $_SESSION["bank_acc"]=$this->input->post('bank_acc');
                        $_SESSION["ifsc"]=$this->input->post('ifsc');
                        $_SESSION["acc_name"]=$this->input->post('acc_name');
                        $this->session->set_flashdata('dashboard_error','Updated Successfully'); 
                        redirect(base_url().'frontend/user/dashboard');  
                    }
                    else{
                        $this->session->set_flashdata('dashboard_error','Error In Bank Details'); 
                        redirect(base_url().'frontend/user/dashboard'); 
                    }
                }
                else{
                    $this->session->set_flashdata('dashboard_error','Please Fill all Fields'); 
                    redirect(base_url().'frontend/user/dashboard');   
                }
       
}




    }

 