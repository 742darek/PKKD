<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Add_prod extends CI_Model
{

function __construct()
{
	parent::__construct(); 
	
}



    public function dodaj($description, $opis, $qty, $price)
    {
        $query_str = "INSERT INTO products (description, opis, qty, price) VALUES (?, ?, ?, ?)";
		$this->db->query($query_str, array($description, $opis, $qty, $price));
    }



     public function dodaj_ingr($name, $wielkosc, $qty, $price)
    {
        $query_str = "INSERT INTO ingredients (name, wielkosc, qty, price) VALUES (?, ?, ?, ?)";
		$this->db->query($query_str, array($name, $wielkosc, $qty, $price));
    }




}
/* End of file user_model.php */
/* Location: ./application/models/user_model.php */