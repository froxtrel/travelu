<?php

class Tour extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function get_featured_tour()
    {
        $this->db->select("*");
        $this->db->from('tour');
        $this->db->where('is_hot', 1);
        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }
    }

   

}