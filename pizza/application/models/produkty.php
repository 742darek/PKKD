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






    public function usun($id)
    {
       $this->db->where('id', $id);
       $this->db->delete('products'); 
       
    }


    public function get($id)
  {
    return $this->db->where('id', $id)->get($this->table)->row_array();
  }




public function update($id, $data)
  {
    return $this->db->where('id', $id)->update($this->table, $data);
  }




      }