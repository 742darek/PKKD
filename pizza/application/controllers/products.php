<?php
if( !defined('BASEPATH') ) exit ('No direct script access allowed');
class products extends CI_Controller{

        function __construct(){
                                                        parent::__construct();
                                                        $this->load->model('product_model','product');

        }

        function index(){
                        $this->load->model('user_model');
                        $data['products'] = $this->product->get_products();
                        $this->load->view('products_view',$data);
        }



        function addToCart(){
                        $insert = array(
               'id'      => $this->input->post('id'),
               'qty'     => $this->input->post('qty'),
               'price'   => $this->input->post('price'),
               'name'    => $this->input->post('description'),
               'imie'    => $this->input->post('imie')
            );
                        $this->cart->insert($insert);
                        redirect('products');
                        // redirect(base_url().'index.php/shopping-cart-view');
        }





        function shoppingCartView(){
                       $this->load->library('session');
                       if (!$this->session->userdata('user_id')){

                             echo $user_data['user_id'];

                       }
                       
                        $data['products'] = $this->cart->contents();
                        $this->load->view('shopping_cart_view',$data);
        }
       
        function saveCartProducts(){
                        $ids = Array();
                        $descriptions = Array();
                        $prices = Array();
                        $qtys = Array();
                        $imies = Array();
                        $ids = $this->input->post('id');
                        $descriptions = $this->input->post('desription');
                        $prices = $this->input->post('price');
                        $qtys = $this->input->post('qty');
                        $imies = $this->input->post('imie');
                        $result = $this->product->save_cart_products($ids,$descriptions,$prices,$qtys,$imies);
                       
                        if($result){    

                                        $msg="Twoje zamówienie zostało złożone!";
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
}