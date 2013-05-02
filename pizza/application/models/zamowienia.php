<?php
class Zamowienia extends CI_Model{
    
      private $table;
    
      function __construct(){
                  parent::__construct();
                  $this->table='order_details';
      }  
          function get_products(){
                                        $result = $this->db->get($this->table);
                                        return $result->result_array();
          }



      }