<?php
class Shop extends CI_Controller {
	
	function index() {
		
		$this->load->model('Products_model');
		
		$data['products'] = $this->Products_model->get_all();
		$this->load->view('pizzeria/header');
		$this->load->view('products', $data);
		$this->load->view('pizzeria/footer');
	// 	redirect('check/koszyk');
		}
	
	function add() {
		
		$this->load->model('Products_model');
		
		$product = $this->Products_model->get($this->input->post('id'));
		
		$insert = array(
			'id' => $this->input->post('id'),
			'qty' => $this->input->post('qty'),
			'price' => $product->price,
			'name' => $product->name
		);
		if ($product->option_name) {
			$insert['options'] = array(
				$product->option_name => $product->option_values[$this->input->post($product->option_name)]
			);
		}
		
		$this->cart->insert($insert);
	
		redirect('shop');
		
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
                        $result = $this->products_model->save_cart_products($ids,$descriptions,$prices,$qtys);
                       
                        if($result){
                                        $msg="Successfully Save...";
                                        $this->cart->destroy();
                                        }
                        else{
                                        $msg="Save Failed..."; 
                                        }                 
                                                       
                        $data=array('msg' => $msg);
                        $this->session->set_userdata('user',$data);    
                        redirect(base_url().'shopping-cart-view');
        }   





	
	function remove($rowid) {
		
		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
		
		redirect('shop');
		
	}
	
}
