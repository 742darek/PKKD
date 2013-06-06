<?php
if( !defined('BASEPATH') ) exit ('No direct script access allowed');
class Get extends CI_Controller{

        function __construct(){
                                                        parent::__construct();
                                                        $this->load->model('produkty');
                                                        $this->load->model('skladniki');
                                                        $this->load->library('session');
                                                        if ( ! $this->session->userdata('user_id'))
            {
               
                show_404();
                
            }

        }

        function index(){
                        
                        $this->load->view('pizzeria/header');
                        $this->load->view('pizzeria/edit');
                        $this->load->view('pizzeria/footer');
        }


        function ready(){
                        $data['id'] = $this->produkty->get_products();
                        $this->load->view('pizzeria/header');
                        $this->load->view('pizzeria/produkty',$data);
                        $this->load->view('pizzeria/footer');
        }


        function ready_ingr(){
                       
                        $data['id'] = $this->skladniki->get_ingr();
                        $this->load->view('pizzeria/header');
                        $this->load->view('pizzeria/edycja_skladniki',$data);
                        $this->load->view('pizzeria/footer');
        }




        public function delete($id){


                      $this->produkty->usun($id);
                      $this->skladniki->usun($id);
                      redirect('get/ready');

    }



     public function delete_ingr($id){


                      $this->produkty->usun($id);
                      $this->skladniki->usun($id);
                      redirect('get/ready_ingr');

    }



       public function edit($id)
    {
        // Ustalamy reguły walidacji
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        $this->form_validation->set_rules('description', 'description','required');
        $this->form_validation->set_rules('qty','lang:qty','required|numeric');
        $this->form_validation->set_rules('price','lang:price','required|numeric|greater_than[0.99]');

        // Sprawdzamy, czy formularz został wysłany i czy wystąpiły błędy walidacji
        if ($this->form_validation->run() == FALSE)
        {
            // Pobieramy dane z modelu po zmiennej $id
            $data = $this->produkty->get($id);

            // Przypisujemy otrzymane dane do widoku
            // Ewentualne błędy walidacji zostaną przekazane automatycznie
            $this->load->view('pizzeria/header');
            $this->load->view('pizzeria/form_prod_edit', $data);
            $this->load->view('pizzeria/footer');
        }
        else
        {
            // Przypisujemy zmienne POST z formularza do tablicy $data
            $data['description'] = $this->input->post('description');
            $data['opis'] = $this->input->post('opis');
            $data['qty'] = $this->input->post('qty');
            $data['price'] = $this->input->post('price');
            $this->produkty->update($id, $data);

            

            // Wysyłamyzmienną $id i tablicę $data do modelu i w zależności od zwróconego wyniku wykonujemy poniższe czynności
            if ($this->produkty->update($id, $data))
            {
                // Ustawiamy zmienną flashadata o nazwie success i przypisujemy do niej komunikat o powodzeniu dodania wpisu.
                $this->session->set_flashdata('success', 'Wpis został zaktualizowany.');
                // Przekierowujemy użytkownika pod adres http://localhost/blogtutorial/index.php/posts  
                redirect('get');          
            }
            else
            {
                // Ustawiamy zmienną flashadata o nazwie error i przypisujemy do niej komunikat o błędzie.
                $this->session->set_flashdata('error', 'Wystąpił błąd i wpis nie mógł zostac zaktualizowany.');
                // Przekierowujemy użytkownika pod adres edycji wpisu http://localhost/blogtutorial/index.php/posts/edit/numer_id_wpisu 
                redirect('get/edit/'. $id);
            }
        }
    }



     public function edit_ingr($id)
    {

    
        // Ustalamy reguły walidacji
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        $this->form_validation->set_rules('name', 'name','required');
        $this->form_validation->set_rules('qty','lang:qty','required|numeric');
        $this->form_validation->set_rules('price','lang:price','required|numeric|greater_than[0.99]');

   
        if ($this->form_validation->run() == FALSE)
        {
            
          
            $data = $this->skladniki->get($id);

       
            $this->load->view('pizzeria/header');
            $this->load->view('pizzeria/skladniki', $data);
            $this->load->view('pizzeria/footer');
        }
        else
        {
           
            $data['name'] = $this->input->post('name');
            $data['wielkosc'] = $this->input->post('wielkosc');
            $data['qty'] = $this->input->post('qty');
            $data['price'] = $this->input->post('price');
            $this->skladniki->update($id, $data);

            

            // Wysyłamyzmienną $id i tablicę $data do modelu i w zależności od zwróconego wyniku wykonujemy poniższe czynności
            if ($this->skladniki->update($id, $data))
            {
                // Ustawiamy zmienną flashadata o nazwie success i przypisujemy do niej komunikat o powodzeniu dodania wpisu.
                $this->session->set_flashdata('success', 'Wpis został zaktualizowany.');
                // Przekierowujemy użytkownika pod adres http://localhost/blogtutorial/index.php/posts  
                redirect('get');          
            }
            else
            {
                // Ustawiamy zmienną flashadata o nazwie error i przypisujemy do niej komunikat o błędzie.
                $this->session->set_flashdata('error', 'Wystąpił błąd i wpis nie mógł zostac zaktualizowany.');
                // Przekierowujemy użytkownika pod adres edycji wpisu http://localhost/blogtutorial/index.php/posts/edit/numer_id_wpisu 
                redirect('get/edit_ingr/'. $id);
            }
        }
    }



     




}    