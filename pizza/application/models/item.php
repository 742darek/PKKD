<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Item extends CI_Model
{

function __construct()
{
	parent::__construct(); 
	
}



    public function log_download() {
  $data = array(
    // 'item_id'      => $item_id,
    // 'purchase_id'  => $purchase_id,
    'download_at'  => time(),
    'ip_address'   => '321321321',
    'user_agent'   => 'dupa'
  );
  $this->db->insert( 'downloads', $data );
}
 
} 
/* End of file user_model.php */
/* Location: ./application/models/user_model.php */