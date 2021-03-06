<?php
class ingredients_model extends CI_Model{
    
      private $table;
    
      function __construct(){
                  parent::__construct();
                  $this->table='ingredients';
      }  
          function get_products(){
                                    // $this->db->select('option_value');   
                                    $result= $this->db->get('ingredients');  
                                    return $result->result_array();
          }




          
          function save_cart_products($ids,$names,$prices,$qtys,$imies,$adress){
                                        $this->db->trans_begin();
                                        $ndx=0;
                                        foreach($ids as $id){
                                                        //save product to order_details table.

                                                        $now = date("Y-m-d H:i:s");

                                                        $data = array('product_id' => $id,
                                                        'description' => $names[$ndx],
                                                        'price' =>$prices[$ndx],
                                                        'qty_ordered' =>$qtys[$ndx],
                                                        'imie' =>$imies[$ndx],
                                                        'adres' =>$adress[$ndx],
                                                        'time' =>$now
                                                        
                                                        );
                                                                                                          
                                                                                                         
                                                                                                         
                                                        $this->db->insert("order_ingredients",$data);
                                                       
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