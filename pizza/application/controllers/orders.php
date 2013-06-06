<?php
if( !defined('BASEPATH') ) exit ('No direct script access allowed');
class orders extends CI_Controller{

        function __construct(){
                                                        parent::__construct();
                                                        $this->load->model('zamowienia');
                                                        $this->load->library('session');
                                                       

        }

        function index(){
                        $data['orders'] = $this->zamowienia->get_products();
                        $this->load->view('pizzeria/header');
                        $this->load->view('pizzeria/zamowienia');
                        $this->load->view('pizzeria/footer');
        }



        
        function gotowe(){
                        $data['orders'] = $this->zamowienia->get_products();
                        $this->load->view('pizzeria/header');
                        $this->load->view('pizzeria/orders',$data);
                        $this->load->view('pizzeria/footer');
        }



         function kreator(){
                        $data['orders'] = $this->zamowienia->get_ingredients();
                        $this->load->view('pizzeria/header');
                        $this->load->view('pizzeria/orders_ingr',$data);
                        $this->load->view('pizzeria/footer');
        }




    }    