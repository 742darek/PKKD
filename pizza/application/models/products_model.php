<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Products_model extends CI_Model
{

	 private $table;
    
      function __construct(){
                  parent::__construct();
                  $this->table='products2';
              }

	function get_all()
	
	
	{
	
	
	$results = $this->db->get('products')->result();
	
	foreach ($results as $result)  
	
	{
		if ($result->option_values){
			$result->option_values = explode (',',$result->option_values);
		}
	}
	
	
	return $results;
	
  }
  
  
  function get($id) 
  
  {
		$results = $this->db->get_where('products', array('id' => $id))->result();
		$result = $results[0];
		
		if ($result->option_values){
			$result->option_values = explode (',',$result->option_values);
		}
		
		return $result;
  }




  function save_cart_products($ids,$descriptions,$prices,$qtys,$options)


          {

                                        $results = $this->db->get('products')->result();
                                        $this->db->trans_begin();
                                        $ndx=0;
                                        foreach($ids as $id){
                                                        //save product to order_details table.
                                                        $data = array('product_id' => $id,
                                                                                                          'description' => $descriptions[$ndx],
                                                                                                          'price' =>$prices[$ndx],
                                                                                                          'qty_ordered' =>$qtys[$ndx],
                                                                                                          'option_name' => $options[$indx]);

                                                        


                                                        $this->db->insert("order_details",$data);
                                                       
                                                        //update product qty on the products table.
                                                        $this->db->where('id',$id);
                                                        $this->db->set('qty', "qty-$qtys[$ndx]", FALSE);
                                                        $this->db->update($this->table);
                                                        $ndx++;
                                        }
                                        if ($this->db->trans_status() === FALSE){
                                                        $this->db->trans_rollback();
                                                        return FALSE;
                                                        }
                                        else{
                                                        $this->db->trans_commit();
                                                        return TRUE;
                                        }
          }




  

}





	
 
/* End of file user_model.php */
/* Location: ./application/models/user_model.php */