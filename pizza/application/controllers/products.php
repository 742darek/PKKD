<?php
if( !defined('BASEPATH') ) exit ('No direct script access allowed');
class products extends CI_Controller{

        function __construct(){
                                                        parent::__construct();
                                                        $this->load->model('product_model');
                                                        

        }

        function index(){

                        $data['products'] = $this->product_model->get_products();
                        $this->load->view('pizzeria/header');
                        $this->load->view('pizzeria/cart',$data);
                        $this->load->view('pizzeria/footer');
        }
        function addToCart(){
              
               $this->load->library('session');
             if ( ! $this->session->userdata('user_id'))
            {
                show_404(); 
            }
           

                        $data = array(
               'id'      => $this->input->post('id'),
               'name'    => $this->input->post('description'),
               'qty'     => $this->input->post('qty'),
               'price'   => $this->input->post('price')
             
            );

                    
                        $this->cart->insert($data);
                        redirect('products');
        }
       
       
        function saveCartProducts(){
                        $ids = Array();
                        $descriptions = Array();
                        $prices = Array();
                        $qtys = Array();
                        $ids = $this->input->post('id');
                        $descriptions = $this->input->post('name');
                        $prices = $this->input->post('price');
                        $qtys = $this->input->post('qty');
                        $imies = $this->input->post('imie');
                        $adress = $this->input->post('adres');
                        $result = $this->product_model->save_cart_products($ids,$descriptions,$prices,$qtys,$imies,$adress);
                       
                        if($result){
                                        $msg="Zamówienie zostało złożone!";
                                         // $this->cart->destroy();
                                        }
                        else{
                                        $msg="Save Failed..."; 
                                        }                 
                                                       
                        $data=array('msg' => $msg);
                        $this->session->set_userdata('user',$data);   

                        // redirect(base_url().'index.php/shopping-cart-view');
                        redirect('products');
        }   



        function remove($rowid) {
        
        $this->cart->update(array(
            'rowid' => $rowid,
            'qty' => 0
        ));
        
        redirect('products');
        
    }



    function destroy() {
        
        $this->cart->destroy(); 
        redirect('products');
        
    }
}