<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Rej extends CI_Model
{

function __construct()
{
	parent::__construct(); 
	
}



    public function dodaj($username, $email,$password)
    {
        $query_str = "INSERT INTO users (username, email, password, rights) VALUES (?, ?, ?, 0)";
		$this->db->query($query_str, array($username, $email, $password));
    }
}
 
/* End of file user_model.php */
/* Location: ./application/models/user_model.php */