<?php
class Cart_test extends CI_Controller
{

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
	
	}
	
	
	function show()
	
	{
		$cart = $this->cart->contents();
		
		echo "<pre>";
		print_r($cart);
	
	}
	
	
	function add2()
	
	{
		$data = array(  
		
			'id' => '56',
			'name' => 'Glasses',
			'qty' => 1,
			'price' => 45.99,
			'options' => array ('Color' => 'black'));
			
			
		
		$this->cart->insert($data);
		echo "add() called";
	
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