<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rejestracja extends CI_Controller {


	public function __construct() 
	
	{
		parent::__construct();
		
		$this->load->model('Rej');
		
	}


    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('username', 'username','trim|required|alpha_numeric|min_length[2]|xss_clean');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email|trim');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[2]|SHA1');
        $this->form_validation->set_rules('adres', 'adres','required');

      // $this->form_validation->set_rules('password', 'Password', 'trim|required|alpha_numeric|min_length[6]|xss_clean');
		//$this->form_validation->set_rules('password_conf', 'Password Confirmation','trim|required|alpha_numeric|min_length[6]|matches[password]|xss_clean');
       // $this->load->view('rej_form');
		$this->load->view('pizzeria/header');
        $this->load->view('pizzeria/user_reg');
        $this->load->view('pizzeria/footer');

	  if(!$this->form_validation->run())
        {	
			
    //    $this->load->view('rej_form');
		//$this->load->view('pizzeria/user_login');
        }
        else
        {	
			
			
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
            $adres = $this->input->post('adres');
            $result = $this->Rej->dodaj($username,$email,$password,$adres);

            if($result){
                                        $msg="Zostałeś zarejestrowany!";
                                        // $this->cart->destroy();
                                        }
                        else{
                                        $msg="Nie zostałeś zarejestrowany..."; 
                                        }    
                                        $data=array('msg' => $msg);
                      				    $this->session->set_userdata('user',$data);                
        }
    }
}