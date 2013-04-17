<?php
class Test extends CI_Controller
{

	function add()
	{
		$data = array(
					   'id'      => 'sku_123ABC',
					   'qty'     => 1,
					   'price'   => 39.95,
					   'name'    => 'T-Shirt',
					   'options' => array('Size' => 'L', 'Color' => 'Red')
					);

		$this->cart->insert($data);	
			
	}
	
	
	function show()
	
	{
		$cart = $this->cart->contents();
		
		echo "<pre>";
		print_r($cart);
	}



	
	
}