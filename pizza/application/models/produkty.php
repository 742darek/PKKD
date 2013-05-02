<?php
class Produkty extends CI_Model{
    
      private $table;
    
      function __construct(){
                  parent::__construct();
                  $this->table='products';
      }  
          function get_products(){
                                        $result = $this->db->get($this->table);
                                        return $result->result_array();
          }



      }