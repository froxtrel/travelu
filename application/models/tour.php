<?php

class Tour extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function get_featured_tour()
    {

        $query = $this->db->query(" SELECT a.id,a.name,b.tour_desc,c.duration,d.price_adult,d.price_child,e.photo_1,f.is_hot 
                                    FROM tour a 
                                    inner join tour_desc b on a.id = b.id 
                                    inner join tour_info c on a.id = c.id 
                                    inner join tour_price d on a.id = d.id 
                                    inner join tour_photo e on a.id = e.id 
                                    inner join tour_status f on a.id = f.id 
                                    WHERE f.is_hot = '1' ");

        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }
    }

    function get_rafting_list()
    {   
        $query = $this->db->query(" SELECT a.id,a.name,b.tour_desc,c.duration,d.price_adult,d.price_child,e.photo_1,f.is_hot 
                                    FROM tour a 
                                    inner join tour_desc b on a.id = b.id 
                                    inner join tour_info c on a.id = c.id 
                                    inner join tour_price d on a.id = d.id 
                                    inner join tour_photo e on a.id = e.id 
                                    inner join tour_status f on a.id = f.id 
                                    WHERE a.category =  2 ");

        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }

    }

    function get_kayaking_list()
    {   
        $query = $this->db->query(" SELECT a.id,a.name,b.tour_desc,c.duration,d.price_adult,d.price_child,e.photo_1,f.is_hot 
                                    FROM tour a 
                                    inner join tour_desc b on a.id = b.id 
                                    inner join tour_info c on a.id = c.id 
                                    inner join tour_price d on a.id = d.id 
                                    inner join tour_photo e on a.id = e.id 
                                    inner join tour_status f on a.id = f.id 
                                    WHERE a.category =  3 ");

        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }

    }

    function get_tour_detail($id)
    {   
        $query = $this->db->query(" SELECT a.id,a.note,a.tour_code,a.name,b.tour_desc,c.duration,d.price_adult,d.price_child,e.photo_1,e.photo_2,e.photo_3,e.photo_4,e.photo_5,f.is_hot,g.des_name,h.include_1,h.include_2,h.include_3,h.include_4,h.include_5
                                    FROM tour a 
                                    inner join tour_desc b on a.id = b.id 
                                    inner join tour_info c on a.id = c.id 
                                    inner join tour_price d on a.id = d.id 
                                    inner join tour_photo e on a.id = e.id 
                                    inner join tour_status f on a.id = f.id 
                                    inner join destination g on a.location = g.des_id
                                    inner join tour_include h on a.id = h.id
                                    WHERE a.id = ".$id."");

        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }

    }

   

}