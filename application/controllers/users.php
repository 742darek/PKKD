<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Users extends CI_Controller
{
 public function __construct()
	{
		parent::__construct();
		// Ładujemy bibliotekę sesji
		$this->load->library('session');
	}
    public function login()
    {
        // Ładujemy bibliotekę walidacji formularza
        $this->load->library('form_validation');
        // Określamy jakie tagi będą otaczać komunikat błędu walidacji. 
        // To kwestia stricte kosmetyczna - dostosowanie wyglądu do Twitter Bootstrap.
        $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#">×</a>', '</div>');
 
        // Ustalamy reguły walidacji dla formularza
		$this->form_validation->set_rules('username', 'Login', 'required|trim|xss_clear');
        $this->form_validation->set_rules('password', 'Hasło', 'required|trim|sha1');
 
        // Sprawdzamy, czy formularz został wysłany i czy wystąpiły błędy walidacji.
        if ($this->form_validation->run() === FALSE)
        {
            // Ładujemy helper Form, aby ułatwić sobie pracę z formularzem.
            $this->load->helper('form');
 
            // Jeśli walidacja formularza nie powiodła się (lub metoda jest wywołana po raz pierwszy), wyświetlamy pliki z katalogu partials oraz widok "user_login",
            // który znajduje się w katalogu "application/views". Ewentualne informacje o błędach w formularzu są przekazywane automatycznie.
            $this->load->view('pizzeria/header');
            $this->load->view('pizzeria/user_login');
            $this->load->view('pizzeria/footer');
        }
        else
        {
            // Jeśli walidacja formularza powiodła się, przypisujemy odpowiednie zmienne z tablicy $_POST do zmiennej $email i $password
            $username = $this->input->post('username');
            $password = $this->input->post('password');
			

            // Ładujemy wcześniej utworzony model
            $this->load->model('user_model');
 
            if ($user = $this->user_model->login($username, $password)) 
            // Wywołujemy metodę "login" modelu "user_model" wraz z parametrami i przypisujemy zwrócony wynik do zmiennej $user
            {
			
			
                // Jeśli zwrócony wynik nie jest pusty (czyli znaleziono użytkownika o podanym adresie email i haśle),
                // ustawiamy zmienną sesyjną o nazwie "user_id" na wartość unikalnego identyfikatora użytkownika.
                $this->session->set_userdata('user_id', $user['id']);
                $this->session->set_userdata('user_rights', $user['rights']);
                // Ustawiamy zmienną flashadata o nazwie success i przypisujemy do niej komunikat o powodzeniu logowania.
                $this->session->set_flashdata('success', 'Logowanie przebiegło pomyślnie!');
                // Przekierowujemy użytkownika na stronę ze wszystkimi postami podając w funkcji nazwę kontrolera/metody, która ma zostać wywołana.
                // W tym wypadku nie ma znaczenia, czy podamy 'posts/index', czy samo 'posts', ponieważ CodeIgniter domyślnie zinterpretuje samo 'posts' jako wywołanie
                // metody 'index' - jako domyślnej funkcji dla każdego kontrolera.
               redirect('check/zalogowani');
            }
			
			/*elseif ($user = $this->user_model->login($username, $password, $rights) && $rights==1)
            {
                // Jeśli zwrócony wynik nie jest pusty (czyli znaleziono użytkownika o podanym adresie email i haśle),
                // ustawiamy zmienną sesyjną o nazwie "user_id" na wartość unikalnego identyfikatora użytkownika.
                $this->session->set_userdata('user_id', $user['id']);
                // Ustawiamy zmienną flashadata o nazwie success i przypisujemy do niej komunikat o powodzeniu logowania.
                $this->session->set_flashdata('success', 'Logowanie przebiegło pomyślnie!');
                // Przekierowujemy użytkownika na stronę ze wszystkimi postami podając w funkcji nazwę kontrolera/metody, która ma zostać wywołana.
                // W tym wypadku nie ma znaczenia, czy podamy 'posts/index', czy samo 'posts', ponieważ CodeIgniter domyślnie zinterpretuje samo 'posts' jako wywołanie
                // metody 'index' - jako domyślnej funkcji dla każdego kontrolera.
                redirect('check/panel');
            } */
			
			
            else
            {
                // Jeśli zwrócony wynik jest pusty (czyli nie znaleziono użytkownika o podanym adresie email i haśle),
                // ustawiamy zmienną flashadata o nazwie error i podajemy komunikat o niepowodzeniu logowania.
                $this->session->set_flashdata('error', 'Podany login lub hasło są nieprawidłowe!');
                // Przekierowujemy użytkownika na stronę logowania podając dla funkcji nazwę kontrolera/metody, która ma zostać wywołana
                redirect('check/zalogowani');
            }
        }
    }
 
    public function logout()
    {
        // Niszczymy aktualną sesję
        $this->session->sess_destroy();
        // Przekierowujemy na stronę logowania
        
        redirect('users/login');

    }
    

}
 
/* End of file users.php */
/* Location: ./application/controllers/users.php */
