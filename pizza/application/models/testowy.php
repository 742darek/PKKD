<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Testowy extends CI_Model
{

function __construct()
{
	parent::__construct(); 
	
}



    public function dodaj($username)
    {
        $query_str = "INSERT INTO products (nazwa) VALUES (?)";
		$this->db->query($query_str, array($username));
    }
}
 
/* End of file user_model.php */
/* Location: ./application/models/user_model.php */