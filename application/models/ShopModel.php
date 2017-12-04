<?php

class ShopModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function getData(){
        $data = $this->db->get('books')->result();
        return $data;
    }

}