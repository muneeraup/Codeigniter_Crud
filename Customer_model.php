<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    public function displydata()
    {
        $this->db->order_by('id', 'desc');
       $query = $this->db->get('home_slider');
        return $query->result();
    }
}

