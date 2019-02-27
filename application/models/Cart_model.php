<?php
class Cart_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

 public function select()
 {
     $query=$this->db->query("SELECT * FROM products");
      return $query->result();
  
 }

}