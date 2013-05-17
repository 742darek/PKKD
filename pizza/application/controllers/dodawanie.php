<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dodawanie extends CI_Controller {


	public function __construct() 
	
	{
		parent::__construct();
		
		$this->load->model('Add_prod');
		
	}


    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('description', 'description','required');
		$this->form_validation->set_rules('qty','lang:qty','required|numeric');
		$this->form_validation->set_rules('price','lang:price','required|numeric|greater_than[0.99]');
		$this->load->view('pizzeria/header');
        $this->load->view('pizzeria/form_prod');
        $this->load->view('pizzeria/footer');

	  if(!$this->form_validation->run())
        {	

        }
        else
        {	
			
			
			$description = $this->input->post('description');
			$qty = $this->input->post('qty');
			$price = $this->input->post('price');
			
            $this->Add_prod->dodaj($description, $qty, $price);
        }
    }
}