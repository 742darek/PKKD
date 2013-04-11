<?php
class Check extends CI_Controller
{


public function __construct()
	{
		parent::__construct();
		// Ładujemy bibilotekę sesji
		$this->load->library('session');

		
			// Sprawdzamy, czy użytkownik jest zalogowany poprzez sprawdzenie istnienia zmiennej sesyjnej 'user_id'.
			// Ta zmienna jest ustawiana tylko w momencie poprawnego zalogowania.
			if ( ! $this->session->userdata('user_id'))
			{
				// Wyświetlamy stonę błędu, ale równie dobrze możemy zwrócic inny komunikat,
				// np. taki, który informuje o konieczności zalogowania do aplikacji lub 
				// przekierować użytkownika do strony logowania.
				show_404();
			}
		}
		
		
		function zalogowani()
 {
	

 
 $this->load->view('pizzeria/header');
 $this->load->view('pizzeria/check');
 $this->load->view('pizzeria/footer');
 
 }
 
 
 		function panel()
 {
	

 
 $this->load->view('pizzeria/header');
 $this->load->view('pizzeria/form_prod');
 $this->load->view('pizzeria/footer');
 
 }
 
		}