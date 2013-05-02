<?php
class product_model extends CI_Model{
    
      private $table;
    
      function __construct(){
                  parent::__construct();
                  $this->table='products';
      }  
          function get_products(){
                                        $result = $this->db->get($this->table);
                                        return $result->result_array();
          }
          function save_cart_products($ids,$descriptions,$prices,$qtys,$imies,$adress){
                                        $this->db->trans_begin();
                                        $ndx=0;
                                        foreach($ids as $id){
                                                        //save product to order_details table.
                                                        $data = array('product_id' => $id,
                                                                                                          'description' => $descriptions[$ndx],
                                                                                                          'price' =>$prices[$ndx],
                                                                                                          'qty_ordered' =>$qtys[$ndx],
                                                                                                          'imie' =>$imies[$ndx],
                                                                                                          'adres' => $adress[$ndx]);
                                                                                                         
                                                                                                         
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