<?php
if( !defined('BASEPATH') ) exit ('No direct script access allowed');
class orders extends CI_Controller{

        function __construct(){
                                                        parent::__construct();
                                                        $this->load->model('zamowienia');
                                                        $this->load->library('session');
                                                        if ( ! $this->session->userdata('user_id'))
            {
                // Wyświetlamy stonę błędu, ale równie dobrze możemy zwrócic inny komunikat,
                // np. taki, który informuje o konieczności zalogowania do aplikacji lub 
                // przekierować użytkownika do strony logowania.
                show_404();
                
            }

        }

        function index(){
                        $data['orders'] = $this->zamowienia->get_products();
                        $this->load->view('pizzeria/header');
                        $this->load->view('pizzeria/orders',$data);
                        $this->load->view('pizzeria/footer');
        }



     




    }    