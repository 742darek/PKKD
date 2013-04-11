<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dodawanie extends CI_Controller {


	public function __construct() 
	
	{
		parent::__construct();
		
		$this->load->model('Add_prod');
		
	}

//|alpha_numeric|min_length[3]|xss_clean');
//'trim|required|alpha_numeric|min_length[3]|xss_clean');
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('nazwa', 'nazwa','required');
		$this->form_validation->set_rules('typ', 'typ','required');
		//$this->form_validation->set_rules('cena', 'cena','trim|required|alpha_numeric|min_length[0]|xss_clean');
		$this->form_validation->set_rules('cena','lang:cena','required|numeric|greater_than[0.99]');
      // $this->form_validation->set_rules('password', 'Password', 'trim|required|alpha_numeric|min_length[6]|xss_clean');
		//$this->form_validation->set_rules('password_conf', 'Password Confirmation','trim|required|alpha_numeric|min_length[6]|matches[password]|xss_clean');
       // $this->load->view('rej_form');
		$this->load->view('pizzeria/header');
        $this->load->view('pizzeria/form_prod');
        $this->load->view('pizzeria/footer');

	  if(!$this->form_validation->run())
        {	
			
    //    $this->load->view('rej_form');
		//$this->load->view('pizzeria/user_login');
        }
        else
        {	
			
			
			$nazwa = $this->input->post('nazwa');
			$typ = $this->input->post('typ');
			$cena = $this->input->post('cena');
            $this->Add_prod->dodaj($nazwa, $typ, $cena);
        }
    }
}