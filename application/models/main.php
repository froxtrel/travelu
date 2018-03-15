<?php

class Main extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function get_all_destination()
    {
        $this->db->select("des_name");
        $this->db->from('destination');
        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }
    }

    function get_all_adv_type()
    {
        $this->db->select("adv_name");
        $this->db->from('adv_type');
        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }
    }

    function get_all_home_slider()
    {
        $this->db->select('*');
        $this->db->from('main_slider');
        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }
    }

    function get_slider_wording()
    {
        $this->db->select('*');
        $this->db->from('banner_wording');
        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }
    }

    function insert_page_view($page,$user_ip,$year,$month,$day)
    {

        $query = $this->db->query("select userip from pageview where page='".$page."' and userip='".$user_ip."'");

        if ( $query->num_rows() > 1 )
        {
           

        } else {

            $query = $this->db->query("insert into pageview values('','".$page."','".$user_ip."','".$year."','".$month."','".$day."')");
        }

    }

    function get_page_view_year($page)
    {

        $query = $this->db->query("SELECT * FROM pageview where page='".$page."'");

        return  $query->num_rows();

    }

}