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
			// if ( ! $this->session->userdata('user_id'))
			// {
			// 	// Wyświetlamy stonę błędu, ale równie dobrze możemy zwrócic inny komunikat,
			// 	// np. taki, który informuje o konieczności zalogowania do aplikacji lub 
			// 	// przekierować użytkownika do strony logowania.
			// 	 $this->load->view('pizzeria/header');
 		// 		 $this->load->view('pizzeria/error');
 		// 		 $this->load->view('pizzeria/footer');
				
			// }

		}


		function zalogowani()
 {


 
 $this->load->view('pizzeria/header');
 $this->load->view('pizzeria/start');
 $this->load->view('pizzeria/footer');
 
 }
 
 
 		function panel()
 {
	if ( $this->session->userdata('user_rights') == '0')
        {
 $this->load->view('pizzeria/header');
 $this->load->view('pizzeria/error2');
 $this->load->view('pizzeria/footer');
        }

elseif ($this->session->userdata('user_rights') == '1') {

 $this->load->view('pizzeria/header');
 $this->load->view('pizzeria/adm');
 $this->load->view('pizzeria/footer');

 } 

 
 }


 
 
		}