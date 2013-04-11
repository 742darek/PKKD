<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Add_prod extends CI_Model
{

function __construct()
{
	parent::__construct(); 
	
}



    public function dodaj($nazwa, $typ, $cena)
    {
        $query_str = "INSERT INTO produkty (nazwa, typ, cena) VALUES (?, ?, ?)";
		$this->db->query($query_str, array($nazwa, $typ, $cena));
    }
}
 
/* End of file user_model.php */
/* Location: ./application/models/user_model.php */