<?php
class Cart_test extends CI_Controller



{

	public function __construct() 
	
	{
		parent::__construct();
		
		$this->load->model('Item');
		
	}

	function add()
	
	{
		$data = array(  
		
			'id' => '42',
			'name' => 'Majtki',
			'qty' => 1,
			'price' => 19.99,
			'options' => array ('Size' => 'medium'));
			
			
		
		$this->cart->insert($data);
		echo "add() called";
		echo "<pre>";
		print_r($data);
	
	}
	
	
	function show()
	
	{
		$cart = $this->cart->contents();
		
		echo "<pre>";
		print_r($cart);




		foreach ( $this->cart->contents() as $cart )
{
  $insert['name'] = $cart['name'];
  $insert['qty'] = $cart['qty'];
  $insert['price'] = $cart['price'];
  $this->db->insert('products', $insert);
} 

	
	}
	
	
	function add2()
	
	{
		$data = array(  
		
			'id' => '59',
			'name' => 'Glasses',
			 'qty' => '1',
			'price' => '45.99'
			 );

		// 'options' => array ('Color' => 'black')
			
			
		
		$this->cart->insert($data);
		$this->db->insert( 'products', $data );

		echo "add() called";


	
	}
	

	function add3(){

		// $item_id = $this->input->post('item_id');
		// $purchase_id = $this->input->post('purchase_id');
		// $ip_address = $this->input->post('ip_address');
		$this->Item->log_download();

	}
	
	
	
	function update()
	
	{
		
		$data = array(
		
			'rowid' => 'ceaa6bc378827d07d5a035d6d3687e81',
			'qty' => '2'
			
			);
		
		$this->cart->update($data);
		echo "update() called";
	}
	
	
	function total()
	
	
	{
		echo $this->cart->total();
	}
	
	
	function remove()
	
	
	{
	
		$data = array(
		
			'rowid' => 'ceaa6bc378827d07d5a035d6d3687e81',
			'qty' => '0'
			
			);
		
		$this->cart->update($data);
		echo "remove() called";
	}
	
	
	function destroy()
	
	{
	
		$this->cart->destroy();
		echo "destroy() called";
	
	
	
	}


}