<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Rej extends CI_Model
{

function __construct()
{
	parent::__construct(); 
	
}



    public function dodaj($username, $email,$password,$adres,$now)
    {
    	$now = date("Y-m-d H:i:s");
        $query_str = "INSERT INTO users (username, email, password, adres,time, rights) VALUES (?, ?, ?, ?, ?, 0)";
		$this->db->query($query_str, array($username, $email, $password, $adres, $now));
    }
}
 
/* End of file user_model.php */
/* Location: ./application/models/user_model.php */