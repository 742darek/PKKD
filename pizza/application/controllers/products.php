<?php
if( !defined('BASEPATH') ) exit ('No direct script access allowed');
class products extends CI_Controller{

        function __construct(){
                                                        parent::__construct();
                                                        $this->load->model('product_model','product');
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
                        $data['products'] = $this->product->get_products();
                        $this->load->view('pizzeria/header');
                        $this->load->view('pizzeria/cart',$data);
                        $this->load->view('pizzeria/footer');
        }
        function addToCart(){
                        $data = array(
               'id'      => $this->input->post('id'),
               'qty'     => $this->input->post('qty'),
               'price'   => $this->input->post('price'),
               'name'    => $this->input->post('description'),
               'imie'    => $this->input->post('imie')
            );
                        $this->cart->insert($data);
                        // redirect(base_url().'index.php/shopping-cart-view');
                        redirect('products');
        }
       

        // function shoppingCartView(){
        //                 $data['products'] = $this->cart->contents();
        //                  // $this->load->view('shopping_cart_view',$data);
        //                 // $this->load->view('products_view',$data);
        // }
       
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
                        $result = $this->product->save_cart_products($ids,$descriptions,$prices,$qtys,$imies);
                       
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