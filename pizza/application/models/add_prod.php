<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Add_prod extends CI_Model
{

function __construct()
{
	parent::__construct(); 
	
}



    public function dodaj($description, $qty, $price)
    {
        $query_str = "INSERT INTO products (description, qty, price) VALUES (?, ?, ?)";
		$this->db->query($query_str, array($description, $qty, $price));
    }



}
/* End of file user_model.php */
/* Location: ./application/models/user_model.php */